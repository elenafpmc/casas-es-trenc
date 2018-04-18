
if ( $('.lang-selector-val').length > 0 ) {
  $('.lang-selector-val').on('click', function(ev) {
    $(this).closest('.cnt-lang-selector').toggleClass('open');
  });
}

if ( $('.btn-menu-mobile').length > 0 ) {
  $('.btn-menu-mobile').on('click', function() {
    $('.header__nav').toggleClass('open');
  });
}