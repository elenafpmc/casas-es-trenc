@extends('layouts.app')


@section ('title')
{{ __('home.SECTORES') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
<div class="sector sector--left">
  <div class="sector__header" style="background-image: url(../assets/images/content/franciscogarvi.com_B7K7803.jpg);">
    <div class="sector__header__content">
      <p class="sector__header__content__title">Ave del Paraíso</p>
<<<<<<< HEAD
        <div class="sector__header__content__text"><p class="text">{{ __('sectores.DESDE') }}</p> <p class="price">220.000€</p> <p class="text">{{ __('sectores.ULTIMOS_9_PISOS') }}</p></div>
=======
        <div class="sector__header__content__text"><p class="text">Desde</p> <p class="price">220.000€</p></div>
>>>>>>> baa7b547f204ddc7914994a896e4f113bf3cd78d
        <!-- <div class="cnt-button"> -->
        <!-- </div> -->
      <button type="button" class="btn-arrow-down btn-sector"><span class="icon-arrow-down"></span></button>
    </div>
    <div class="sector__header__ribbon">
      <span class="content">9 últimas unidades</span>
    </div>

  </div>
  <div class="sector__content">
    <div class="sector__content__info"><img src="../assets/images/content/logo-avedelparaiso.png" class="sector__content__info__logo" alt="Logo avedelparaiso" /><p class="sector__content__info__title">{{ __('sectores.APARTAMENTOS_AVE_DEL') }}</p>
                  <div class="sector__content__info__text">
                    <p>{{ __('sectores.DESCRIPCION_AVE') }}</p>
                    <p class="price">
                      <span class="small">{{ __('sectores.PISOS_DESDE') }}</span>
                       220.000€
                    </p>
                  </div>
                </div>
      <div class="sector__content__list">
          <div class="sector__content__list__item">
            <img src="../assets/images/content/cocina-americana-sectores-avedelparaiso.jpg" class="item-image" alt="{{ __('sectores.COCINA_AMERICANA') }} {{ __('sectores.SECTORES') }} avedelparaiso" />

            <p class="title">
              {{ __('sectores.COCINA_AMERICANA') }}
            </p>
            <p class="text">
              {{ __('sectores.TODAS_LAS_COCINAS_ESTAN') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K7826.jpg" class="item-image" alt="Franciscogarvi.com b7k7826" />
            <p class="title">
              {{ __('sectores.SALON_CON_VISTAS') }}
            </p>
            <p class="text">
              {{ __('sectores.AMPLIO_SALON_COMEDOR') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3487.jpg" class="item-image" alt="{{ __('sectores.BANOS_COMPLETOS') }} {{ __('sectores.SECTORES') }} buganvilla" />
            <p class="title">
              {{ __('sectores.DOS_BANOS_COMPLETOS') }}
            </p>
            <p class="text">
              {{ __('sectores.AMBOS_BANOS_CONSTAN_DE') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3480.jpg" class="item-image" alt="{{ __('sectores.DORMITORIOS_DOBLES') }} {{ __('sectores.SECTORES') }} buganvilla" />
            <p class="title">
              {{ __('sectores.DOS_DORMITORIOS_DOBLES') }}
            </p>
            <p class="text">
              {{ __('sectores.LOS_DORMITORIOS_ESTAN') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3507.jpg" class="item-image" alt="Franciscogarvi.com b7k3507" />
            <p class="title">
              {{ __('sectores.AMPLIAS_TERRAZAS') }}
            </p>
            <p class="text">
              {{ __('sectores.LOS_APARTAMENTOS_ESTAN') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3439.jpg" class="item-image" alt="Franciscogarvi.com b7k3439" />
            <p class="title">
              {{ __('sectores.ZONA_COMUN_CON_JARDINES') }}
            </p>
            <p class="text">
              {{ __('sectores.CONSTA_DE_DOS_PISCINAS') }}
            </p>
          </div>
      </div>

  </div>
</div>

  



  

<div class="sector sector--right">
  <div class="sector__header" style="background-image: url(../assets/images/content/sector-buganvilla.jpg);">
    <div class="sector__header__content">
      <p class="sector__header__content__title">Buganvilla</p>
        <div class="sector__header__content__text"><p class="text">{{ __('sectores.CONSTA_DE_DOS_PISCINAS') }}</p> <p class="price">295.000€</p></div>
        <!-- <div class="cnt-button"> -->
        <!-- </div> -->
      <button type="button" class="btn-arrow-down btn-sector"><span class="icon-arrow-down"></span></button>
    </div>
  </div>
  <div class="sector__content">
    <div class="sector__content__info"><img src="../assets/images/content/logo-buganvilla.png" class="sector__content__info__logo" alt="Logo buganvilla" /><p class="sector__content__info__title">{{ __('sectores.APARTAMENTOS_BUGANVILLA') }}</p>
                  <div class="sector__content__info__text">
                    <p>{{ __('sectores.EL_SECTOR_BUGANVILLA') }}</p>
                    <p class="price">
                      <span class="small">{{ __('sectores.PISOS_DESDE') }}</span>
                       {{ __('sectores.295_A_360') }}
                    </p>
                  </div>
                </div>
      <div class="sector__content__list">
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3457.jpg" class="item-image" alt="Franciscogarvi.com b7k3457" />
            <p class="title">
              {{ __('sectores.COCINA_AMERICANA') }}
            </p>
            <p class="text">
              {{ __('sectores.COCINAS_EQUIPADAS_CON') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K3449.jpg" class="item-image" alt="Franciscogarvi.com b7k3449" />
            <p class="title">
              {{ __('sectores.SALON_CON_VISTAS') }}
            </p>
            <p class="text">
              {{ __('sectores.DISFRUTE_DEL_SALON') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/banos-completos-sectores-buganvilla.jpg" class="item-image" alt="Franciscogarvi.com b7k3487" />
            <p class="title">
              {{ __('sectores.DOS_BANOS_COMPLETOS') }}
            </p>
            <p class="text">
              {{ __('sectores.CADA_APARTAMENTO_CONSTA') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/franciscogarvi.com_B7K4299.jpg" class="item-image" alt="Franciscogarvi.com b7k3480" />
            <p class="title">
              {{ __('sectores.ZONA_COMUN_CON_JARDINES') }}
            </p>
            <p class="text">
              {{ __('sectores.DOS_AMPLIAS_PISCINAS') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/bicicletas-buganvilla.jpg" class="item-image" alt="Franciscogarvi.com b7k3507" />
            <p class="title">
              {{ __('sectores.INSTALACIONES_PARA_BICIS') }}
            </p>
            <p class="text">
              {{ __('sectores.LA_URBANIZACION_CUENTA') }}
            </p>
          </div>
          <div class="sector__content__list__item">
            <img src="../assets/images/content/gimnasio-buganvilla.jpg" class="item-image" alt="Franciscogarvi.com b7k4299" />
            <p class="title">
              {{ __('sectores.GIMNASIO') }}
            </p>
            <p class="text">
              {{ __('sectores.ZONA_INDEPENDIENTE_PARA') }}
            </p>
          </div>
      </div>
    </div>


  </div>
@endsection