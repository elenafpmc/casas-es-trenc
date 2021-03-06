if ( $('.sector').length > 0 ) {
  $('.btn-sector').on('click', function(ev) {
    var sector = $(this).closest('.sector');
    var sectorContent = sector.find('.sector__content');
    if( sectorContent.is(':hidden') ) {
      sectorContent.slideDown(500);

      timeout = 0;

      if( $('.sector.open').not(sector).length > 0 ) {
        $('.sector.open').not(sector).find('.btn-sector').trigger('click');

        timeout = 500;
      }

      setTimeout(function() {

        sector.addClass('open');
        setTimeout(function(){
          sector.trigger('show-sector');
        }, 500);

        var headerOffset = $('.header').height();
        var sectorContentTop = sectorContent.offset().top;

        $('html, body').animate({
            scrollTop: sectorContentTop - headerOffset + 1
        }, 1000, function() { });

      }, timeout);


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

