(function ($) {
  $(function () {
    // scrollbar
    var ps = new PerfectScrollbar('.scroll', {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // humburger button
    $('.nav-toggle').on('click', function () {
      $('body').toggleClass('close');
    });

    // Add class
    $('.menu-item-has-children').children("a").addClass('sub-menu-head');

    // サイドサブメニューアコーディオン
    $('.sub-menu-head').on('click', function () {
      var $subNav = $(this).next('.sub-menu');
      if ($subNav.is(':visible')) {
        $subNav.velocity('slideUp', { duration: 200 });
        $(this).parent('li').removeClass('is-active');
      }
      else {
        $subNav.velocity('slideDown', { duration: 200 });
        $(this).parent('li').addClass('is-active');
      }
      return false;
    });
  });
})(jQuery);
