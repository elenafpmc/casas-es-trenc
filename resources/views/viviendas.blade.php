@extends('layouts.app')


@section ('title')
{{ __('home.VIVIENDAS') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
<div class="sector sector--left">
  <div class="sector__header" style="background-image: url(/assets/images/content/vivienda-atico.jpg);">
    <div class="sector__header__content">
      <p class="sector__header__content__title">{{ __('viviendas.ATICOS_CON_TERRAZA') }}</p>
        <!-- <div class="cnt-button"> -->
        <!-- </div> -->
      <button type="button" class="btn-arrow-down btn-sector"><span class="icon-arrow-down"></span></button>
    </div>
  </div>
  <div class="sector__content">
    <div class="sector__content__info">
                  <p class="sector__content__info__title">{{ __('viviendas.ATICOS') }}</p>
                  <div class="sector__content__info__text">
                    <p>{{ __('viviendas.IMPRESIONANTES_ATICOS') }}</p>
                    <p>{{ __('viviendas.LE_OFRECEMOS_ATICOS') }}</p>
                    <p>{{ __('viviendas.TODO_EN_UN_ENTORNO') }}</p>
                  </div>
                </div>

      <div class="gallery">
        <div class="swiper-container gallery__top">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc_MG_4471-1.jpg" class="" alt="Casas es trenc mg 4471 1" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-81-1618x1080.jpg" class="" alt="Casas es trenc 81 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-319-1618x1080.jpg" class="" alt="Casas es trenc 319 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-340-1618x1080.jpg" class="" alt="Casas es trenc 340 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bathroom-1-n-1618x1080.jpg" class="" alt="Casas es trenc b bathroom 1 n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bedroom-1a-n-1618x1080.jpg" class="" alt="Casas es trenc b bedroom 1a n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bedroom-2-n-1618x1080.jpg" class="" alt="Casas es trenc b bedroom 2 n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-kitchen-n-1618x1080.jpg" class="" alt="Casas es trenc b kitchen n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-tarrase-n-1618x1080.jpg" class="" alt="Casas es trenc b tarrase n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-Es-Trenc-Buganvilla-107-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 107 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-IMG_3710-1620x1080.jpg" class="" alt="Casas es trenc f1 img 3710 1620x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-salon2-1-1621x1080.jpg" class="" alt="Casas es trenc f1 salon2 1 1621x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-salon4-1-1643x1080.jpg" class="" alt="Casas es trenc f1 salon4 1 1643x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1a-dormitorio2-z-1622x1080.jpg" class="" alt="Casas es trenc f1a dormitorio2 z 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-Es-Trenc-roof-tarrace-solarium-1618x1080.jpg" class="" alt="Casas es trenc roof tarrace solarium 1618x1080" />
                </div>
          </div>
        </div>
        <div class="swiper-container gallery__thumbs">
          <div class="swiper-button-prev gallery__thumbs__prev"><span class="icon-arrow-left-alt"></span></div>


          <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc_MG_4471-1.jpg" class="" alt="Casas es trenc mg 4471 1" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-81-1618x1080.jpg" class="" alt="Casas es trenc 81 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-319-1618x1080.jpg" class="" alt="Casas es trenc 319 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-340-1618x1080.jpg" class="" alt="Casas es trenc 340 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bathroom-1-n-1618x1080.jpg" class="" alt="Casas es trenc b bathroom 1 n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bedroom-1a-n-1618x1080.jpg" class="" alt="Casas es trenc b bedroom 1a n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-bedroom-2-n-1618x1080.jpg" class="" alt="Casas es trenc b bedroom 2 n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-kitchen-n-1618x1080.jpg" class="" alt="Casas es trenc b kitchen n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-es-Trenc-B-tarrase-n-1618x1080.jpg" class="" alt="Casas es trenc b tarrase n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-Es-Trenc-Buganvilla-107-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 107 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-IMG_3710-1620x1080.jpg" class="" alt="Casas es trenc f1 img 3710 1620x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-salon2-1-1621x1080.jpg" class="" alt="Casas es trenc f1 salon2 1 1621x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1-salon4-1-1643x1080.jpg" class="" alt="Casas es trenc f1 salon4 1 1643x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/casas-es-trenc-f1a-dormitorio2-z-1622x1080.jpg" class="" alt="Casas es trenc f1a dormitorio2 z 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/aticos/Casas-Es-Trenc-roof-tarrace-solarium-1618x1080.jpg" class="" alt="Casas es trenc roof tarrace solarium 1618x1080" />
                </div>
          </div>


          <div class="swiper-button-next gallery__thumbs__next"><span class="icon-arrow-right-alt"></span></div>
        </div>

        <div class="row center-xs">
          <div class="col-md-3 col-sm-4">
            
  <button type="button" class="btn btn--sm btn--primary"  data-modal-open="modal-catalog">
    Solicita un catálogo
  </button>

          </div>
        </div>

        <div class="row center-xs">
          <div class="col-md-3 col-sm-4">
            <a href="#" class="link">Ver memoria de calidades <span class="icon-arrow-right"></span></a>
          </div>
        </div>
      </div>
  </div>
</div>

  
<div class="modal modal-catalog" data-modal="modal-catalog" data-modal-close>
  <div class="modal__dialog">
    <div class="modal__dialog__close" data-modal-close><span class="icon-close"></span></div>
    <div class="modal__dialog__wrapper">
      <p class="modal__dialog__wrapper__title">Solicita un catálogo</p>
      <div class="modal__dialog__wrapper__content">
<div class="form-catalog">
  <form>
    <div class="form-item">
      
<div class="input ">
  <input type="text" id="catalog01-name" name="catalog01-name" placeholder="Nombre" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="email" id="catalog01-mail" name="catalog01-mail" placeholder="Mail" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="text" id="catalog01-address" name="catalog01-address" placeholder="Dirección" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="checkbox ">
  <input type="checkbox" id="catalog01-lega" name="catalog01-lega" class="checkbox__field">
  <label for="catalog01-lega" class="checkbox__label">Acepto la <a href='http://development.flyingpigs.es/casas-es-trenc/build/politica-de-privacidad/'>política de privacidad.</a></label>
</div>

    </div>

    
  <button type="submit" class="btn btn--block btn--primary" >
    Enviar solicitud
  </button>

  </form>
</div></div>
    </div>
  </div>
</div>

  

  

<div class="sector sector--right">
  <div class="sector__header" style="background-image: url(/assets/images/content/vivienda-bajo.jpg);">
    <div class="sector__header__content">
      <p class="sector__header__content__title">Bajo con jardín</p>
        <!-- <div class="cnt-button"> -->
        <!-- </div> -->
      <button type="button" class="btn-arrow-down btn-sector"><span class="icon-arrow-down"></span></button>
    </div>
  </div>
  <div class="sector__content">
    <div class="sector__content__info">
                  <p class="sector__content__info__title">Bajos</p>
                  <div class="sector__content__info__text">
                    <p>Casas de arquitectura mediterránea clásica con lujosos y luminosos interiores de moderno diseño en un espectacular entorno y con las mejores calidades. Listas para entrar a vivir y con todas las licencias aprobadas. Casas Es Trenc – Buganvilla, venta de viviendas muy próximas a la playa de Es Trenc en una zona muy tranquila.</p>
                    <p>Aproveche las ventajas de vivir en una planta baja. Acceda directamente a la piscina desde su casa o simplemente siéntese a disfrutar de los amplios jardines llenos de plantas que rodean su vivienda.</p>
                  </div>
                </div>

      <div class="gallery">
        <div class="swiper-container gallery__top">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc_MG_4494-1622x1080.jpg" class="" alt="Casas es trenc mg 4494 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-96-B-1618x1080.jpg" class="" alt="Casas es trenc 96 b 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-180-f1-cocina-1-1618x1080.jpg" class="" alt="Casas es trenc 180 f1 cocina 1 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-218-f1-pb-1618x1080.jpg" class="" alt="Casas es trenc 218 f1 pb 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-273-1618x1080.jpg" class="" alt="Casas es trenc 273 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-B-living-room-n-1618x1080.jpg" class="" alt="Casas es trenc b living room n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-Es-Trenc-Buganvilla-102-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 102 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-Es-Trenc-Buganvilla-288-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 288 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-apartments-mallorca-B7K4289-1618x1080.jpg" class="" alt="Casas es trenc buganvilla apartments mallorca b7k4289 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3449-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3449 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3470-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3470 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3476-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3476 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-f1-pb-dormitorio2-1622x1080.jpg" class="" alt="Casas es trenc f1 pb dormitorio2 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Cases-des-Trenc-203-f1-pb-terraza2-1618x1080.jpg" class="" alt="Cases des trenc 203 f1 pb terraza2 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Cases-es-Trenc-188-f1-pb-salon-1618x1080.jpg" class="" alt="Cases es trenc 188 f1 pb salon 1618x1080" />
                </div>
          </div>
        </div>
        <div class="swiper-container gallery__thumbs">
          <div class="swiper-button-prev gallery__thumbs__prev"><span class="icon-arrow-left-alt"></span></div>


          <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc_MG_4494-1622x1080.jpg" class="" alt="Casas es trenc mg 4494 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-96-B-1618x1080.jpg" class="" alt="Casas es trenc 96 b 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-180-f1-cocina-1-1618x1080.jpg" class="" alt="Casas es trenc 180 f1 cocina 1 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-218-f1-pb-1618x1080.jpg" class="" alt="Casas es trenc 218 f1 pb 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-es-Trenc-273-1618x1080.jpg" class="" alt="Casas es trenc 273 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-B-living-room-n-1618x1080.jpg" class="" alt="Casas es trenc b living room n 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-Es-Trenc-Buganvilla-102-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 102 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Casas-Es-Trenc-Buganvilla-288-1618x1080.jpg" class="" alt="Casas es trenc buganvilla 288 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-apartments-mallorca-B7K4289-1618x1080.jpg" class="" alt="Casas es trenc buganvilla apartments mallorca b7k4289 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3449-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3449 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3470-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3470 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-buganvilla-luxury-apartments-mallorca-B7K3476-1618x1080.jpg" class="" alt="Casas es trenc buganvilla luxury apartments mallorca b7k3476 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/casas-es-trenc-f1-pb-dormitorio2-1622x1080.jpg" class="" alt="Casas es trenc f1 pb dormitorio2 1622x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Cases-des-Trenc-203-f1-pb-terraza2-1618x1080.jpg" class="" alt="Cases des trenc 203 f1 pb terraza2 1618x1080" />
                </div>
                <div class="swiper-slide">
                  <img src="/assets/images/content/gallery/bajos/Cases-es-Trenc-188-f1-pb-salon-1618x1080.jpg" class="" alt="Cases es trenc 188 f1 pb salon 1618x1080" />
                </div>
          </div>


          <div class="swiper-button-next gallery__thumbs__next"><span class="icon-arrow-right-alt"></span></div>
        </div>

        <div class="row center-xs">
          <div class="col-md-3 col-sm-4">
            
  <button type="button" class="btn btn--sm btn--primary"  data-modal-open="modal-catalog">
    Solicita un catálogo
  </button>

          </div>
        </div>

        <div class="row center-xs">
          <div class="col-md-3 col-sm-4">
            <a href="#" class="link">Ver memoria de calidades <span class="icon-arrow-right"></span></a>
          </div>
        </div>
      </div>
  </div>
</div>



  
<div class="modal modal-catalog" data-modal="modal-catalog" data-modal-close>
  <div class="modal__dialog">
    <div class="modal__dialog__close" data-modal-close><span class="icon-close"></span></div>
    <div class="modal__dialog__wrapper">
      <p class="modal__dialog__wrapper__title">Solicita un catálogo</p>
      <div class="modal__dialog__wrapper__content">
<div class="form-catalog">
  <form>
    <div class="form-item">
      
<div class="input ">
  <input type="text" id="catalog02-name" name="catalog02-name" placeholder="Nombre" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="email" id="catalog02-mail" name="catalog02-mail" placeholder="Mail" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="text" id="catalog02-address" name="catalog02-address" placeholder="Dirección" value="" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="checkbox ">
  <input type="checkbox" id="catalog02-lega" name="catalog02-lega" class="checkbox__field">
  <label for="catalog02-lega" class="checkbox__label">Acepto la <a href='http://development.flyingpigs.es/casas-es-trenc/build/politica-de-privacidad/'>política de privacidad.</a></label>
</div>

    </div>

    
  <button type="submit" class="btn btn--block btn--primary" >
    Enviar solicitud
  </button>


  </form>
</div></div>
    </div>
  </div>
</div>
@endsection