function CommentForm(selector, params) {
    this.$form = $(selector);
    this.elementId = params.elementId;

    this.init();
}

CommentForm.prototype = {
    constructor: CommentForm,

    init: function () {
        this.bindEvents();
    },

    bindEvents: function() {
      this.$form.on('submit', this.onSubmit.bind(this));
    },

    onSubmit: function(e) {
        e.preventDefault();

        const data = this.$form.serialize() + '&elementId=' + this.elementId;
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