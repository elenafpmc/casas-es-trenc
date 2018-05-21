if ( $('.hero').length > 0 ) {
  var swiperParams = {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 25,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets'
    }
  };
  var charsSwiper = new Swiper('.hero__slider', swiperParams);
}