(function($) {
  $(function () {
    // 各ディスプレイのサイズを取得。(padding, marign含む)
    var window_max_Width = $(window).width();
    var navigation_Width = $(".scroll").outerWidth();
    var sidebar_Width = $(".sidebar").outerWidth();
    var max_main_widh = window_max_Width - navigation_Width - sidebar_Width -20; // 20は右の隙間
    $('.main-contents').css('width',max_main_widh); // css追加
    // console.log(max_main_widh);
  });
})(jQuery);
