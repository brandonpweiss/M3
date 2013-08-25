   $(function() {
        $( '#dl-menu' ).dlmenu();
        var menu = $( '#dl-menu' ).data('dlmenu');
        $( '.hamburger-navitem' ).click(function() {
            menu._closeMenu();
        });
    });