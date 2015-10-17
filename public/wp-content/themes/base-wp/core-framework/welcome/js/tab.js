jQuery( document ).ready( function() {
    jQuery( 'div.panel' ).hide();
    jQuery( 'div#getting_started' ).show();

    jQuery( '.ig-nav-tab-wrapper a' ).click( function() {

        var tab = jQuery( this );
        var	tabs_wrapper = tab.closest( '.about-wrap' );

        jQuery( '.nav-tab-wrapper a', tabs_wrapper ).removeClass( 'nav-tab-active' );
        jQuery( 'div.panel', tabs_wrapper ).hide();
        jQuery( 'div' + tab.attr( 'href' ), tabs_wrapper ).show();
        tab.addClass( 'nav-tab-active' );

        return false;
    });
});
