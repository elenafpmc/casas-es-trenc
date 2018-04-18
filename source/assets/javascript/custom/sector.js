if ( $('.sector').length > 0 ) {
  $('.btn-sector').on('click', function(ev) {
    var sector = $(this).closest('.sector');
    var sectorContent = sector.find('.sector__content');
    if( sectorContent.is(':hidden') ) {
      sectorContent.slideDown(500);
      sector.addClass('open');
    } else {
      sectorContent.slideUp(500);
      sector.removeClass('open');
    }
  });
}