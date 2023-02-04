jQuery(document).ready(function ($) {

  // Default slider for Block Slider
  const sliders = $('.js-slider');
  sliders.each(function (num, slider) {
    slider = $(slider);
    slider.slick({
      arrows: true,
      prevArrow: slider.parents('.b-slider').find('.b-slider__button--prev'),
      nextArrow: slider.parents('.b-slider').find('.b-slider__button--next'),
    });
  });

  $('.slider-work').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    adaptiveHeight: true
  });

  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-work',
    focusOnSelect: true,
    centerMode: false,
    arrows: false,
  });


  // Venobox loaded
  const venoBox = $('.venobox');
  if (venoBox.length > 0) {
    venoBox.venobox({
      spinner: false
    });
  }

  // Open mobile menu
  $('.c-hamburger').click(function () {
    // $(this).toggleClass('is-open');
    $('body').toggleClass('is-open-sidebar');
  });


  $('.menu-item-has-children a').click(function () {
    var list = $(this).siblings('ul');
    list.toggleClass('is-open');
  });


  // Default filter
  $('#filter').on("change", function () {
    var data = $('#filter').serialize();
    var url = '?' + data;

    history.pushState(false, false, url);
    window.location.reload()
  });

  // Default Cookiebanner
  /*  var cookie = Cookies.get('WP-Cookie');

    if (cookie != '1') {
      $('.js-cookie-banner').show();
    }

    $("#accept").click(function () {
      Cookies.set('WP-Cookie', '1', {expires: 365});
      $('.js-cookie-banner').hide();
    });*/

});
