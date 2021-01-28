function CommentList(selector) {
    this.$el = $(selector);

    this.init();
}

CommentList.prototype = {
  constructor: CommentList,

  init: function() {
      const items = this.$el.find('.comment-list__item');
      for (let i = 0; i < items.length; i++) {
          new Comment(items[i]);
      }

  },
};

function Comment(el) {
    this.$el = $(el);
    this.id = this.$el.data('id');

    this.$like = this.$el.find('.comment-list__item-like');
    this.$dislike = this.$el.find('.comment-list__item-dislike');
    this.$btnAnswer = this.$el.find('.comment-list__item-answer');

    this.init();
}

Comment.prototype = {
    constructor: Comment,

    init: function() {
        this.$formWrap = this.makeForm();
        this.formIsOpen = false;
        this.bindEvents();
    },

    makeForm: function() {
        const nameId = 'comment-form-name' + this.id;
        const textId = 'comment-form-text' + this.id;
        const formHtmlTemplate =
            '<div class="comment-list__item-form">' +
                '<form class="comment-form">' +
                    '<input type="hidden" name="parentId" value="' + this.id + '">' +
                    '<div class="comment-form__field">' +
                        '<label class="comment-form__field-label" for="' + nameId + '">Имя</label>' +
                        '<input class="comment-form__field-control" type="text" name="name" id="' + nameId + '">' +
                    '</div>' +
                    '<div class="comment-form__field comment-form__field_text">' +
                        '<label class="comment-form__field-label" for="' + textId + '">Комментарий</label>' +
                        '<textarea class="comment-form__field-control" type="text" name="text" id="' + textId + '"></textarea>' +
                    '</div>' +

                    '<div class="comment-form__btn-list">' +
                        '<span class="comment-form__btn comment-form__btn_cancel js-cancel">Отменить</span>' +
                        '<button class="comment-form__btn">Отправить</button>' +
                    '</div>' +
                '</form>' +
            '</div>';

        return $(formHtmlTemplate);
    },

    bindEvents: function() {
        this.$like.on('click', this.clickLike.bind(this));
        this.$dislike.on('click', this.clickDislike.bind(this));
        this.$btnAnswer.on('click', this.openAnswerForm.bind(this));
    },

    clickLike: function() {
        const data = {'comment_id': this.id};
        $.post('/api/v1/likes/', data, this.likeSuccess.bind(this), 'json')
    },

    likeSuccess: function(data) {
      this.processDate(data);
    },

    clickDislike: function() {
        const data = {'comment_id': this.id};
        $.post('/api/v1/dislikes/', data, this.dislikeSuccess.bind(this), 'json')
    },

    dislikeSuccess: function(data) {
        this.processDate(data);
    },

    processDate: function (data) {
        this.$el.find('.comment-list__item-like-value').text(data.likes);
        this.$el.find('.comment-list__item-dislike-value').text(data.dislikes);

        if (data.isLiked) {
            this.$el.find('.comment-list__item-dislike').removeClass('comment-list__item-dislike_active');
            this.$el.find('.comment-list__item-like').addClass('comment-list__item-like_active');
        } else if (data.isDisliked) {
            this.$el.find('.comment-list__item-like').removeClass('comment-list__item-like_active');
            this.$el.find('.comment-list__item-dislike').addClass('comment-list__item-dislike_active');
        }
    },

    openAnswerForm: function() {
        if (this.formIsOpen) {
            return this.closeAnswerForm();
        }

        this.$el.append(this.$formWrap);
        new AnswerForm(this.$formWrap.find('form'));
        this.formIsOpen = true;

        this.$formWrap.on('click', '.comment-form__btn_cancel', this.closeAnswerForm.bind(this));
    },

    closeAnswerForm: function() {
        this.$formWrap.detach();
        this.formIsOpen = false;
    }
};

function AnswerForm($form, params) {
    this.$form = $form;

    this.init();
}

AnswerForm.prototype = {
    constructor: CommentForm,

    init: function () {
        this.bindEvents();
    },

    bindEvents: function() {
        this.$form.on('submit', this.onSubmit.bind(this));
    },

    onSubmit: function(e) {
        e.preventDefault();

        const data = this.$form.serialize();
        $.post('/api/v1/comments/', data, null, 'json')
            .done(this.ajaxDone.bind(this))
            .fail(this.ajaxFail.bind(this));
    },

    ajaxDone: function(data) {
        if (data.success) {
            return this.sendFormSuccess();
        }

        console.error(data.error);
    },

    ajaxFail: function() {
        console.error(arguments);
    },

    sendFormSuccess: function() {
        this.$form.find('[name="name"], [name="text"]').val('');
        $.magnificPopup.open({
            items: {
                src: '<div class="white-popup">Ваш комментарий успешно отправлен</div>',
                type: 'inline'
            }
        });
    }
};
