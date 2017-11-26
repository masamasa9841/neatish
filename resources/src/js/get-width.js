/**
 * Screen adjustment for different display sizes.
 */

( function( $ ) {

  $( document ).ready( function() {
    var wp_height = $( '#wpadminbar' ).height();
    var header_height = $( '.global-head' ).height();
    $('.web-logo-font').css('top', wp_height + header_height);
    add_width();
  });

  $( function () {
    $('.nav-toggle').on( 'click', function () {
      $('body').toggleClass('close');
      add_width();
    });
  });

  function add_width () {
    var window_width = $(window).width();
    var navigation_width = $( '.scroll' ).outerWidth();
    var sidebar_width = $( '.sidebar' ).outerWidth();
    var max_main_widh = window_width - navigation_width - sidebar_width - 20;
    if( $( 'body' ).hasClass( 'close' ) ) {
      $( '.main-contents' ).css( 'width', max_main_widh + navigation_width );
    } else {
      $('.main-contents').css('width', max_main_widh);
    }
  }

})(jQuery);
