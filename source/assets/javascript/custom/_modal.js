
if ( $('.modal').length > 0 ) {

  $('[data-modal-open]').on('click', function(){
    var modalSelector = $(this).data('modal-open');
    $('body').addClass('modal-open');
    $('[data-modal='+ modalSelector +']').addClass('modal-open');
  });

  $('[data-modal-close], [data-modal-close] .icon-close').on('click', function(ev) {
    if (this === ev.target){
      $('body').removeClass('modal-open');
      $('[data-modal]').removeClass('modal-open');
    }
  });
}

