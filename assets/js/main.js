(function($) {

  $(".section__carousel").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: "<button class='slick-prev-arrow slick-arrow'><span class='fas fa-chevron-left'></span></button>",
    nextArrow: "<button class='slick-next-arrow slick-arrow'><span class='fas fa-chevron-right'></span></button>",
    mobileFirst: true
  })


})(jQuery);
