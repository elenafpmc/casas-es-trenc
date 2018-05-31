@extends('layouts.app')


@section ('title')
{{ __('home.CONTACTO') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
  <p class="contacto__title">Contacte con nosotros</p>
  <p class="contacto__text">
    ¿Necesita más información o desea concertar una visita? Nuestro equipo de profesionales de Urnova en Mallorca están a su disposición.
  </p>
  <div class="contacto__info">
    <div class="contacto__info__content">
      <div class="contacto__info__content__block">
        <p class="contacto__info__content__title">
          CASAS ES TRENC OFICINA DE VENTAS
        </p>
        <p class="contacto__info__content__address">
          Carrer de sa Vinyola
          <br />
          07639 Sa Ràpita - Campos
          <br />
          Illes Balears, Spain
        </p>
        <p><a href="mailto:info@casasestrencmallorca.com"><span class="icon-mail"></span>info@casasestrencmallorca.com</a></p>
        <p><a href="tel:+34871811998"><span class="icon-tel"></span>(+34) 871811998</a></p>
      </div>
      <div class="contacto__info__content__block">
        <p class="contacto__info__content__title">
          URNOVA, OFICINA EN MALLORCA
        </p>
        <p class="contacto__info__content__address">
          C/ Joan Maragall, 38 Local 9
          <br />
          07006 Palma de Mallorca, España
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