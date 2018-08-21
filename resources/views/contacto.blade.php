@extends('layouts.app')


@section ('title')
{{ __('home.CONTACTO') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
  <p class="contacto__title">{{ __('contacto.CONTACTE_CON_NOSOTROS') }}</p>
  <p class="contacto__text">
    {{ __('contacto.NECESITA_MAS_INFORMACION') }}
  </p>
  <div class="contacto__info">
    <div class="contacto__info__content">
      <div class="contacto__info__content__block">
        <p class="contacto__info__content__title">
          {{ __('contacto.CASAS_ES_TRENC_OFICINA') }}
        </p>
        <p class="contacto__info__content__address">
          Carrer Sa Vinyola
          <br />
          07639 Sa Ràpita - Campos
          <br />
          Illes Balears, España
        </p>
        <p><a href="mailto:info@casasestrencmallorca.com"><span class="icon-mail"></span>{{--info@casasestrencmallorca.com--}}sales@grupournova.com</a></p>
        <p><a href="tel:+34871811998"><span class="icon-tel"></span>(+34) 871811998</a></p>
      </div>
      <div class="contacto__info__content__block">
        <p class="contacto__info__content__title">
          {{ __('contacto.URNOVA_OFICINA_EN') }}
        </p>
        <p class="contacto__info__content__address">
          C/ Joan Maragall, 38 Local 9
          <br />
          07006 Palma de Mallorca
          <br />
          Illes Balears, España
        </p>
        <p><a href="mailto:sales@grupournova.com"><span class="icon-mail"></span>sales@grupournova.com</a></p>

        <p><a href="tel:+34971274282"><span class="icon-tel"></span>(+34) 971274282</a></p>
        <p><a href="http://www.urnova.com/mallorca/es" class="link" target="_blank">www.urnova.com</a></p>
      </div>
    </div>
    <div class="contacto__info__map">
      <div class="map" id="map"></div>
    </div>
  </div>

@endsection