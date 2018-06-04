@extends('layouts.app')


@section ('title')
{{ __('Aviso') }}
@endsection
@section ('module_content')
@endsection
@section ('content')
  <div class="container">
    <div class="row center-xs">
      <div class="col-sm-10 col-xs-12">
        <p class="static__title">
          {{ __('aviso.AVISO_LEGAL') }}
        </p>
        <div class="static__text">

          <p>
            {{ __('aviso.ESTA_PAGINA_WEB') }}
          </p>
          <ul>
            <li>{{ __('aviso.CIF') }}</li>
            <li>{{ __('aviso.DOMICILIO_SOCIAL') }}</li>
            <li>{{ __('aviso.DATOS_DE_INSCRIPCION') }}</li>
            <li>{{ __('aviso.CONTACTO') }}
              <ul>
                <li>{{ __('aviso.DIRECCION_DE_CORREO_E') }} <a href="mailto:business@urnova.com">business@urnova.com</a></li>
                <li>{{ __('aviso.TELEFONO') }}: <a href="tel:+34915615202">+ 34 (91.561.52.02)</a></li>
              </ul>
            </li>
          </ul>
          <p>
            {{ __('aviso.EN_CUALQUIER_MOMENTO') }}
          </p>
          <p>
            {{ __('aviso.LA_UTILIZACION_DE_ESTA') }}
          </p>
          <p>
            {{ __('aviso.TODOS_LOS_CONTENIDOS') }}
          </p>
          <p>
            {{ __('aviso.QUEDA_PROHIBIDO') }}
          </p>
          <p>
            {{ __('aviso.EL_USUARIO_DEBERA') }}
          </p>
          <p>
            {{ __('aviso.EL_USUARIO_QUE_QUIERA') }}
          </p>
          <p>
            {{ __('aviso.ESTA_WEB_PUEDE') }}
          </p>
          <p>
            {{ __('aviso.EL_PRESENTE_AVISO') }}
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection