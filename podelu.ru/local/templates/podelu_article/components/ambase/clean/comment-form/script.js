function CommentForm(selector, params) {
    this.$form = $(selector);
    this.elementId = params.elementId;

    this.init();
}

CommentForm.prototype = {
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

            setTimeout(() => {
                notification.classList.add('notification_hide');
            }, 3000);

        }, 100);
    }

};