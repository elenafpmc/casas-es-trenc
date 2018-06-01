if ( $('.carousel-home').length > 0 ) {
  var homeSwiperParams = {
    slidesPerView: 1,
    spaceBetween: 25,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  };
  var carouselHome = new Swiper('.carousel-home__slider', homeSwiperParams);
}

$(function() {

  if ( $(".hero_form-info__form").length > 0 ) {
    $.validator.addMethod('legalCheck', function (value, element) {
      return $('[name="hero_lega"]').is(':checked');
    }, '');

    $(".hero_form-info__form").validate({
      errorPlacement: function(error, element) {
        if (element.closest(".input").length > 0) {
          element.closest(".input").addClass('error-form');
          error.appendTo( element.closest(".input") );
        }
        if (element.closest(".checkbox").length > 0) {
          element.closest(".checkbox").addClass('error-form');
          error.appendTo( element.closest(".checkbox") );
        }
      },
      errorClass: "error-label",
      errorElement: 'p',
      rules:{
        hero_name: {
          required: true
        },
        hero_mail: {
          required:true,
          email: true
        },
        hero_message: {
          required: true
        },
        hero_lega: {
          legalCheck: true
        }
      },
      messages: {
        hero_name: {
          required: 'Por favor indique su nombre.'
        },
        hero_mail: {
          required: 'Por favor indique un email de contacto',
          email: 'Email invalido. Por favor indique un email de contacto valido.'
        },
        hero_message: {
          required: 'Por favor escriba un mensaje.'
        },
        hero_lega: {
          legalCheck: 'Por favor acepte la politica de privacidad.'
        }
      }

    });
  }

  if ( $(".modal_form-info__form").length > 0 ) {
    $.validator.addMethod('legalCheck', function (value, element) {
      return $('[name="modal_lega"]').is(':checked');
    }, '');

    $(".modal_form-info__form").validate({
      errorPlacement: function(error, element) {
        if (element.closest(".input").length > 0) {
          element.closest(".input").addClass('error-form');
          error.appendTo( element.closest(".input") );
        }
        if (element.closest(".checkbox").length > 0) {
          element.closest(".checkbox").addClass('error-form');
          error.appendTo( element.closest(".checkbox") );
        }
      },
      errorClass: "error-label",
      errorElement: 'p',
      rules:{
        modal_name: {
          required: true
        },
        modal_mail: {
          required:true,
          email: true
        },
        modal_message: {
          required: true
        },
        modal_lega: {
          legalCheck: true
        }
      },
      messages: {
        modal_name: {
          required: 'Por favor indique su nombre.'
        },
        modal_mail: {
          required: 'Por favor indique un email de contacto',
          email: 'Email invalido. Por favor indique un email de contacto valido.'
        },
        modal_message: {
          required: 'Por favor escriba un mensaje.'
        },
        modal_lega: {
          legalCheck: 'Por favor acepte la politica de privacidad.'
        }
      }

    });
  }
});