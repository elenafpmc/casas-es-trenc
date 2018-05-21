if ( $('.hero').length > 0 ) {
  var swiperParams = {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 25,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  };
  var charsSwiper = new Swiper('.hero__slider', swiperParams);
}