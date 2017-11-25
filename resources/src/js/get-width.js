// 画面調整をするjs
(function($) {
  $(document).ready(function() {
    var window_max_Width = $(window).width();
    var navigation_Width = $(".scroll").outerWidth();
    var sidebar_Width = $(".sidebar").outerWidth();
    var max_main_widh = window_max_Width - navigation_Width - sidebar_Width -20; // 20は右の隙間
    // 各ディスプレイのサイズを取得。(padding, marign含む)
    $('.main-contents').css('width', max_main_widh); // css追加
    // console.log(max_main_widh);

    var wp_height = $("#wpadminbar").height();
    var header_height = $(".global-head").height();
    // console.log(wp_height + header_height);
    $('.web-logo-font').css('top', wp_height + header_height);
  });
  $(function () {
    $('.nav-toggle').on('click', function () {
      var window_max_Width = $(window).width();
      var navigation_Width = $(".scroll").outerWidth();
      var sidebar_Width = $(".sidebar").outerWidth();
      var max_main_width = window_max_Width - navigation_Width - sidebar_Width -20; // 20は右の隙間
      if($('body').hasClass('close')){
        $('.main-contents').css('width', max_main_width); // css追加
      }
      else {
        $('.main-contents').css('width', max_main_width + navigation_Width); // css追加
      }
    });
  });
})(jQuery);
