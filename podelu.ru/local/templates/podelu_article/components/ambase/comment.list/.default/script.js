function CommentList(selector) {
    this.$el = $(selector);

    this.init();
}

CommentList.prototype = {
  constructor: CommentList,

  init: function() {
      const items = this.$el.find('.comment, .comment1');

      for (let i = 0; i < items.length; i++) {
          new Comment(items[i]);
      }

  },
};

function Comment(el) {
    this.$el = $(el);
    this.id = this.$el.data('id');
    this.$btn = this.$el.find('.btn-item7');

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
            '<form class="comment__form comment-form">' +
                '<input type="hidden" name="parentId" value="' + this.id + '">' +

                '<div class="input">' +
                    '<input name="name" placeholder="Ваше имя" id="' + nameId + '">' +
                '</div>' +

                '<div class="textarea">' +
                    '<textarea name="text" placeholder="Ваш комментарий" rows="48" id="' + textId + '"></textarea>' +
                '</div>' +

                '<button type="submit" class="comment-form__btn" disabled>Ответить на комментарий</button>' +
            '</form>';

        return $(formHtmlTemplate);
    },

    bindEvents: function() {
        this.$btn.on('click', this.openAnswerForm.bind(this));
    },

    openAnswerForm: function(e) {
        if (this.formIsOpen) {
            return this.closeAnswerForm();
        }

        this.$el.append(this.$formWrap);
        new AnswerForm(this.$formWrap, this);
        this.formIsOpen = true;
    },

    closeAnswerForm: function() {
        this.$formWrap.detach();
        this.formIsOpen = false;
    }
};

function AnswerForm($form, ctx) {
    this.$form = $form;
    this.ctx = ctx;

    this.init();
}

AnswerForm.prototype = {
    constructor: CommentForm,

    init: function () {
        this.inputName = this.$form.find('[name="name"]');
        this.inputText = this.$form.find('[name="text"]');
        this.btn = this.$form.find('.comment-form__btn');

        this.bindEvents();
    },

    bindEvents: function() {
        this.inputName.on('input propertychange', this.onChangeInput.bind(this));
        this.inputText.on('input propertychange', this.onChangeInput.bind(this));
        this.$form.on('submit', this.onSubmit.bind(this));
    },

    onChangeInput() {
        if (this.inputName.val().trim().length && this.inputText.val().trim().length) {
            return this.btn.prop('disabled', false);
        }

        return this.btn.prop('disabled', true);
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
        this.showSuccessNotification();
    },

    showSuccessNotification() {
        const notification = document.createElement('div');
        notification.classList.add('notification', 'notification_success');
        notification.innerHTML += '<div class="notification__title">Всё получилось!</div>';
        notification.innerHTML += '<div class="notification__text">Ваш комментарий отправлен</div>';

        document.body.appendChild(notification);
        setTimeout(() => {
            notification.classList.add('notification_show');
            this.ctx.closeAnswerForm();

            setTimeout(() => {
                notification.classList.add('notification_hide');
            }, 3000);

        }, 100);
    }
};
