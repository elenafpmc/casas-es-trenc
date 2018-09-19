@extends('layouts.app')


@section ('title')
{{ __('home.UBICACION') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
<div class="sector sector--fullwidth">
  <div class="sector__header" style="background-image: url(/images/content/ubicacion-playa.jpg);">
    <div class="sector__header__content">
        <div class="sector__header__content__text"><p class="title">{{ __('ubicacion.PENSADO_PARA_DESCANSAR') }}</p></div>
      <p class="sector__header__content__title">{{ __('ubicacion.EL_MEJOR_ENTORNO_Y') }}</p>
        <!-- <div class="cnt-button"> -->
        <!-- </div> -->
      <button type="button" class="btn-arrow-down btn-sector"><span class="icon-arrow-down"></span></button>
    </div>
  </div>
  <div class="sector__content">


<div class="content-image content-image--right">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.PARADISIACAS') }}</p>
    <p class="title">{{ __('ubicacion.PLAYAS') }}</p>
    <p class="text lead">{{ __('ubicacion.LA_PLAYA_DE_ES_TRENC_ES') }}</p>
                    <p class="text">{{ __('ubicacion.LA_ZONA_HA_SIDO') }}</p>
                    <p class="text">{{ __('ubicacion.EXISTEN_MUY_POCAS') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-playas.jpg" class="" alt="{{ __('ubicacion.UBICACION_PLAYAS') }}" />
  </div>
</div>

<div class="content-image content-image--left">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.MAGNIFICO') }}</p>
    <p class="title">{{ __('ubicacion.PUERTO_DEPORTIVO') }}</p>
    <p class="text lead">{{ __('ubicacion.APARTAMENTOS_EXCLUSIVOS') }}</p>
                    <p class="text">{{ __('ubicacion.LA_URBANIZACION_CASAS') }}</p>
                    <p class="text">{{ __('ubicacion.SU_CASA_JUNTO_AL_MAR') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-puerto.jpg" class="" alt="{{ __('ubicacion.UBICACION_PUERTO') }}" />
  </div>
</div>

<div class="content-image content-image--right">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.BUEN_SWING') }}</p>
    <p class="title">{{ __('ubicacion.GOLF') }}</p>
    <p class="text lead">{{ __('ubicacion.EXCELENTES_CAMPOS_DE') }}<a href="{{ url((App::getLocale()=='es')?'':App::getLocale(),__('url.sectores')) }}">Casas Es Trenc – Buganvilla.</a></p>
                    <p class="text">{{ __('ubicacion.EN_SOLO_15_MINUTOS') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-golf.jpg" class="" alt="{{ __('ubicacion.UBICACION_GOLF') }}" />
  </div>
</div>

<div class="content-image content-image--left">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.AMANTES_DEL_TREKKING') }}</p>
    <p class="title">{{ __('ubicacion.SENDERISMO') }}</p>
    <p class="text lead">{{ __('ubicacion.SI_LE_GUSTA_LA_NATURALEZA') }}</p>

                    <p class="text">{{ __('ubicacion.IMAGINE_TENER_SU_PROPIA') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-senderismo.jpg" class="" alt="{{ __('ubicacion.UBICACION_SENDERISMO') }}" />
  </div>
</div>

<div class="content-image content-image--right">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.RECORRE_EL_SURESTE') }}</p>
    <p class="title">{{ __('ubicacion.BICI') }}</p>
    <p class="text lead">{{ __('ubicacion.SU_CASA_EN_MAYORCA') }}</p>
                    <p class="text">{{ __('ubicacion.PIERDASE_POR_LA_ISLA') }}</p>
                    <p class="text">{{ __('ubicacion.PRACTIQUE_EL_CICLO') }}</p>
                    <p class="text">{{ __('ubicacion.CIENTOS_DE_KILOMETROS') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-bici.jpg" class="" alt="{{ __('ubicacion.UBICACION_BICI') }}" />
  </div>
</div>

<div class="content-image content-image--left">
  <div class="content-image__content">
    <p class="title-small">{{ __('ubicacion.EL_MEJOR') }}</p>
    <p class="title">{{ __('ubicacion.OCIO') }}</p>
    <p class="text lead">{{ __('ubicacion.CONOZCA_MAYORCA') }}</p>
                    <p class="text">{{ __('ubicacion.DESCUBRA_MAYORCA') }}<a href="#">Es Trenc – Buganvilla.</a></p>
  </div>
  <div class="content-image__image">
    <img src="/images/content/ubicacion-ocio.jpg" class="" alt="{{ __('ubicacion.UBICACION_OCIO') }}" />
  </div>
</div>

  </div>
</div>




  <img src="/images/content/mapa-palma.jpg" class="map-img" alt="{{ __('ubicacion.MAPA_UBICACION') }}" />
@endsection
