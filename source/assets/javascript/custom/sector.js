if ( $('.sector').length > 0 ) {
  $('.btn-sector').on('click', function(ev) {
    var sector = $(this).closest('.sector');
    var sectorContent = sector.find('.sector__content');
    if( sectorContent.is(':hidden') ) {
      sectorContent.slideDown(500);
      sector.addClass('open');
      setTimeout(function(){
        sector.trigger('show-sector');
      }, 500);
    } else {
      sectorContent.slideUp(500);
      sector.removeClass('open');
      setTimeout(function(){
        sector.trigger('hide-sector');
      }, 500);
    }
  });
}

if ( $('.gallery').length > 0 ) {

  $('.sector').one('show-sector', function(ev) {
    var swiperTop = $(this).find('.gallery:visible .gallery__top');
    var swiperThumb = $(this).find('.gallery:visible .gallery__thumbs');
    
    var galleryTop = new Swiper(swiperTop, {
      spaceBetween: 10
    });
    var galleryThumbs = new Swiper(swiperThumb, {
      spaceBetween: 3,
      slidesPerView: 5,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      breakpoints: {
        767: {
          slidesPerView: 3
        }
      }
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;

  });

}

