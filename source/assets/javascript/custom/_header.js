
if ( $('.lang-selector-val').length > 0 ) {
  $('.lang-selector-val').on('click', function(ev) {
    if ( $(this).closest('.cnt-lang-selector').is('.open') ) {
      $(this).closest('.cnt-lang-selector').removeClass('open');
      $(document).unbind('closeLang');
    } else {
      $(this).closest('.cnt-lang-selector').trigger('openLang');
      $(this).closest('.cnt-lang-selector').addClass('open');
    }

  });

    
  $('.cnt-lang-selector').on('openLang', function(ev) {
    $(document).on('click', function(ev) {
      if ( !$(ev.target).is('.menu-lang') && $(ev.target).closest('.menu-lang').length == 0 ) {
        $('.cnt-lang-selector').removeClass('open');
      }
    });
  });
}

if ( $('.btn-menu-mobile').length > 0 ) {
  $('.btn-menu-mobile').on('click', function() {
    $('.header__nav').toggleClass('open');
  });
}