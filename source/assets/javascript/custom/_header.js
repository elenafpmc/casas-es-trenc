
if ( $('.lang-selector-val').length > 0 ) {
  $('.lang-selector-val').on('click', function(ev) {
    $(this).closest('.cnt-lang-selector').toggleClass('open');
  });
}

