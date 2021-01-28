function StickyBlock(selector)
{
    this.rightBlock = document.querySelector(selector);
    this.rightBlockBounding = this.rightBlock.getBoundingClientRect();
    this.rightBlockHeight = this.rightBlockBounding.height;

    this.init();
}

Object.defineProperty(StickyBlock, 'SCROLL_DIRECTION_UP', {
    value: 1,
    writable : false,
    enumerable : true,
    configurable : false
});

Object.defineProperty(StickyBlock, 'SCROLL_DIRECTION_DOWN', {
    value: 0,
    writable : false,
    enumerable : true,
    configurable : false
});

StickyBlock.prototype = {
    constructor: StickyBlock,

    init: function() {
        this.isOpened = true;
        this.contentsHeight = 0;
        this.scrollYOffset = window.pageYOffset;
        this.scrollDirection = StickyBlock.SCROLL_DIRECTION_DOWN;

        this.btn = document.querySelector('.article-right-block__btn');
        this.banner = document.querySelector('.article-right-block__banner');
        this.contents = document.querySelector('.article-right-block__contents');

        this.bindEvents();
        this.prepareUi();
    },

    bindEvents: function() {
        const onScroll = this.debounce(this.onScroll, 40);

        window.addEventListener('scroll', onScroll.bind(this));
        this.btn.addEventListener('click', this.toggleContents.bind(this));
    },

    debounce: function (func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };

            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    },

    prepareUi: function() {
        this.contentsRect  = this.contents.getBoundingClientRect();
        this.contentsHeight = this.contentsRect.height;

        this.article = document.querySelector('.content_block_rs__inside-wrap');
        this.articleBounding = this.article.getBoundingClientRect();
        this.articleHeight = this.articleBounding.height;
        this.articleOffsetTop = window.pageYOffset + this.articleBounding.y;
        this.articleOffsetBottom = this.articleOffsetTop + this.articleHeight;

        this.pageYOffsetMax = this.articleOffsetBottom - this.rightBlockHeight - 140;
        console.log('pageYOffsetMax', this.pageYOffsetMax);
    },

    onScroll: function(e) {
        if (window.pageYOffset - this.scrollYOffset > 0) {
            this.scrollDirection = StickyBlock.SCROLL_DIRECTION_DOWN;
        } else {
            this.scrollDirection = StickyBlock.SCROLL_DIRECTION_UP;
        }
        this.scrollYOffset = window.pageYOffset;

        if (!this.isOpened) {
            return;
        }

        if (this.scrollDirection === StickyBlock.SCROLL_DIRECTION_DOWN) {
            const bannerRect = this.banner.getBoundingClientRect();
            if (bannerRect.y < 140) {
                return this.closeContents();
            }

            if (
                window.pageYOffset > this.pageYOffsetMax ||
                window.pageYOffset < this.articleOffsetTop
            ) {
                return;
            }

            if (this.rightBlock.classList.contains('article-right-block_sticky')) {
                this.rightBlock.classList.remove('article-right-block_sticky');
                this.rightBlock.style.top = (window.pageYOffset - this.articleOffsetTop + 140) + 'px';
            }


        } else {
            const rightBlockRect = this.rightBlock.getBoundingClientRect();
            if (rightBlockRect.y >= 140) {
                this.rightBlock.classList.add('article-right-block_sticky');
                this.rightBlock.style.top = '';
            }
        }


        // console.log(coords, window.pageYOffset);
    },

    toggleContents: function(e) {
        e.preventDefault();

        return this.isOpened ? this.closeContents() : this.openContents();
    },

    openContents: function() {
        this.rightBlock.classList.remove('article-right-block_closed');
        this.contents.style.height = this.contentsHeight + 'px';

        if (
            window.pageYOffset > this.articleOffsetTop &&
            window.pageYOffset < this.pageYOffsetMax
        ) {
            this.rightBlock.classList.remove('article-right-block_sticky');
            this.rightBlock.style.top = (window.pageYOffset - this.articleOffsetTop + 140) + 'px';
        }

        this.isOpened = true;
    },

    closeContents: function() {
        this.rightBlock.classList.add('article-right-block_closed', 'article-right-block_sticky');
        this.rightBlock.style.top = '';
        this.contents.style.height = '0';

        this.isOpened = false;
    }
};


window.addEventListener('load', function() {
    new StickyBlock('.article-right-block');
});
