@extends('layouts.app')


@section ('title')
{{ __('home.VIVIENDAS') }}
@endsection

@section ('module_content')
@endsection
@section ('content')
  <div class="container">
    <div class="row center-xs">
      <div class="col-sm-10 col-xs-12">
        <p class="static__title">
          {{ __('politica.POLITICA_DE_PRIVACIDAD') }}
        </p>
        <div class="static__text">
          <p>
            {{ __('politica.A_LOS_EFECTOS_DE_LO') }}
          </p>
          <p>
            {{ __('politica.LOS_DATOS_FACILITADOS') }}
          </p>
          <p>
            {{ __('politica.SI_SE_NOS_PROPORCIONA') }}
          </p>
          <p>
            {{ __('politica.EN_TODO_CASO') }}
          </p>
        </div>
        <p class="static__title">
          {{ __('politica.POLITICA_DE_COOKIES') }}
        </p>
        <div class="static__text">
          <p>
            {{ __('politica.UNA_COOKIE_ES_UN_FICHERO') }}
          </p>
          <p>
            {{ __('politica.NO_OBSTANTE_ESTOS_MEDIOS') }}
          </p>
          <p>
            {{ __('politica.LAS_COOKIES_UTILIZADAS') }}
          </p>

          <ul>
            <li>{{ __('politica.COOKIE_GA') }}</li>
            <li>{{ __('politica.COOKIE_DATR') }}</li>
          </ul>

          <p>
            {{ __('politica.PUEDE_USTED_PERMITIR') }}
          </p>


          <ul>
            <li>Explorer: <a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank">http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9</a></li>
            <li>Firefox: <a href="http://support.mozilla.org/es/products/firefox/cookies" target="_blank">http://support.mozilla.org/es/products/firefox/cookies</a></li>
            <li>Chrome: <a href="http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647" target="_blank">http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647</a></li>
            <li>Safari: <a href="http://support.apple.com/kb/ph5042" target="_blank">http://support.apple.com/kb/ph5042</a></li>
          </ul>

          <p>
            {{ __('politica.LE_INFORMAMOS_NO_OBSTANTE') }}
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection