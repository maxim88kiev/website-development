(function() {
    function HeaderMenu(selector) {
        this.menu = document.querySelector(selector);

        this.init();
    }

    HeaderMenu.prototype = {
        constructor: HeaderMenu,

        init: function() {
            this.parent = this.menu.querySelector('.header-menu__item_parent');
            this.submenu = this.menu.querySelector('.header-menu__submenu');
            console.log(this.parent);

            this.bindEvents();
        },

        bindEvents: function () {
            this.parent.addEventListener('click', this.onClickParent.bind(this));
        },

        onClickParent: function() {
            if (this.submenu.classList.contains('header-menu__submenu_show')) {
                return this.closeSubmenu();
            }

            return this.openSubmenu();
        },

        openSubmenu: function() {
            this.submenu.classList.add('header-menu__submenu_display');
            setTimeout(() => {
                this.submenu.classList.add('header-menu__submenu_show');
            }, 0)

        },

        closeSubmenu: function() {
            this.submenu.classList.remove('header-menu__submenu_show');
            setTimeout(() => {
                this.submenu.classList.remove('header-menu__submenu_display');
            }, 400)
        },
    };

    window.addEventListener('DOMContentLoaded', function() {
        new HeaderMenu('.header-menu');
    });
}());