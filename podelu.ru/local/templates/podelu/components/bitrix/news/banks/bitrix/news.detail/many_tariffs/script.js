;(function() {
    window.addEventListener('scroll', onScroll);

    function onScroll() {
        let $container = $('.bank-table-container');
        let $tables = $('.bank-table');
        let $fixedTableHeader = $tables.eq(0);
        let $mainTable = $tables.eq(1);
        if (!$container.length && !$fixedTableHeader.length) {
            return;
        }

        $fixedTableHeader.css({width: $container.outerWidth()});

        let $navbar = $('.navbar');
        let navbarHeight = $navbar.outerHeight();
        let position = $(document).scrollTop() + navbarHeight;
        let min = $container.offset().top;
        let max = $container.offset().top
            + $container.outerHeight()
            - $fixedTableHeader.outerHeight()
            - $mainTable.find('tbody tr:last-child').outerHeight();

        if (position <= min) {
            $fixedTableHeader.css({top: 0});
        } else if (position > max) {
            $fixedTableHeader.css({top: max - min});
        } else if (position > min && position < max) {
            // $fixedTableHeader.css({
            //     position: 'fixed',
            //     top: navbarHeight,
            // });
            $fixedTableHeader.css({top: position - min});
        }
    }
}());