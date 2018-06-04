<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Use the title from a page's frontmatter if it has one -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://casasestrencmallorca.com/es/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://casasestrencmallorca.com/es/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://casasestrencmallorca.com/es/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://casasestrencmallorca.com/es/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://casasestrencmallorca.com/es/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://casasestrencmallorca.com/es/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="http://casasestrencmallorca.com/es/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="http://casasestrencmallorca.com/es/favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="http://casasestrencmallorca.com/es/mstile-144x144.png" /> -->


    <!-- <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" /> -->


    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />

    <title>@yield('title', 'CASAS ES TRENC')</title>
    <link href="/assets/stylesheets/stylesheets.css" rel="stylesheet" />
  </head>
  <body>
    <div id="cookie-message">
        <p>
            {{ __('common.MENSAJE_COOKIES') }}
            <br />
            <a href="/politica-de-privacidad/">{{ __('common.MAS_INFO_COOKIES') }}</a>
            <button type="button" class="close-cookies">x</button>
        </p>
    </div>
    <div class="body-wrapper">
      <header class="header ">
  <div class="header__logo">
    <div class="header__logo__left">
      <a href="{{ url(((App::getLocale()!='es')?App::getLocale():''),'home') }}">
        <img src="/assets/images/content/logo.png" class="logo" alt="Logo" />
        <p>{{ __('common.DIRECTO_DEL_PROMOTOR') }}</p>
      </a>
    </div>
    <div class="header__logo__urnova">
      <a href="http://www.urnova.com/" target="_blank">
        <img src="/assets/images/content/logo-urnova1.png" class="urnova" alt="Logo urnova" />
      </a>
    </div>
  </div>

  <nav class="header__nav">
    <ul>
      <li class="{{ @($section=='sectores')?' active':'' }}">
        <a href="{{ url(((App::getLocale()!='es')?App::getLocale():''),'sectores') }}">{{ __('common.SECTORES') }}</a>
      </li>
      <li class="{{ @($section=='viviendas')?' active':'' }}">
        <a href="{{ url(((App::getLocale()!='es')?App::getLocale():''),'viviendas') }}">{{ __('common.VIVIENDAS') }}</a>
      </li>
      <li class="{{ @($section=='ubicacion')?' active':'' }}">
        <a href="{{ url(((App::getLocale()!='es')?App::getLocale():''),'ubicacion') }}">{{ __('common.UBICACION') }}</a>
      </li>
      <li class="{{ @($section=='contacto')?' active':'' }}">
        <a href="{{ url(((App::getLocale()!='es')?App::getLocale():''),'contacto') }}">{{ __('common.CONTACTO') }}</a>
      </li>
      <li class="menu-lang">
@if($countries=['es'=>'es','en'=>'uk','de'=>'de'])
@endif

@if($request_path=Request::path())
@endif

@if($uno=1)
@endif
        <div class="cnt-lang-selector">
          <button type="button" class="lang-selector-val">
            <img src="/assets/images/icons/{{ $countries[App::getLocale()] }}.png" class="flag" alt="{{ ucfirst(App::getLocale()) }}" />
            <span class="text">{{ strtoupper(App::getLocale()) }}</span>
          </button>
          <ul class="lang-list">
@foreach($countries as $lang => $country)
        @if(App::getLocale() != $lang)
            <li>
              <a href="{{ 
			  url(
				($lang!='es')?$lang:'',
				(App::getLocale()!='es')?
				preg_replace('/'.App::getLocale().'\//','',$request_path)
				:Request::path()
			  )
			  }}" class="lang-selector-val">
                <img src="/assets/images/icons/{{ $country }}.png" class="flag" alt="{{ ucfirst($country) }}" />
                <span class="text">{{ strtoupper($lang) }}</span>
              </a>
            </li>
		@endif
@endforeach
          </ul>
        </div>
      </li>
      <li class="header__nav__info">
        <button type="button" class="btn-info" data-modal-open="modal-info">
          <span class="icon-mail"></span>
          <span class="text">+ info</span>
        </button>
      </li>
    </ul>
  </nav>
  <button type="button" class="btn-menu-mobile show-on-tablet"><span class="menu-bar"></span></button>
</header>


<div class="modal modal-info" data-modal="modal-info" data-modal-close>
  <div class="modal__dialog">
    <div class="modal__dialog__close" data-modal-close><span class="icon-close"></span></div>
    <div class="modal__dialog__wrapper">
      <p class="modal__dialog__wrapper__title">{{ __('common.MAS_INFORMACION') }}</p>
      <div class="modal__dialog__wrapper__content">
<div class="form-info">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ __('common.'.$error) }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  <form action="/InfoRequest" method="POST" class="modal_form-info__form">
{{ csrf_field() }}
    <div class="form-item">
<div class="input ">
  <input type="text" id="modal_name" name="modal_name" placeholder="{{ __('common.NOMBRE_Y_APELLIDOS') }}" value="{{ old('modal_name') }}{{ old('hero_name') }}" class="input__field">
</div>

    </div>
    <div class="form-item">

      
<div class="select ">
  <select id="modal_phone-prefix" name="modal_phone-prefix" class="select__field">
      <option value="+34"{{ ( old('modal_phone-prefix')=='+34' || old('hero_phone-prefix')=='+34' )?' selected':'' }}>+34</option>
      <option value="+23"{{ ( old('modal_phone-prefix')=='+23' || old('hero_phone-prefix')=='+23' )?' selected':'' }}>+23</option>
      <option value="+43"{{ ( old('modal_phone-prefix')=='+43' || old('hero_phone-prefix')=='+43' )?' selected':'' }}>+43</option>
  </select>
</div>



      
<div class="input ">
  <input type="text" id="modal_phone" name="modal_phone" placeholder="{{ __('common.NUMERO') }}" value="{{ old('modal_phone') }}{{ old('hero_phone') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="email" id="modal_mail" name="modal_mail" placeholder="{{ __('common.MAIL') }}" value="{{ old('modal_mail') }}{{ old('hero_mail') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="text" id="modal_message" name="modal_message" placeholder="{{ __('common.MENSAJE') }}" value="{{ old('modal_message') }}{{ old('hero_message') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="checkbox ">
  <input type="checkbox" id="modal_lega" name="modal_lega" class="checkbox__field"{{ old('hero_lega')?' checked':'' }} />
  <label for="modal_lega" class="checkbox__label">{{ __('common.ACEPTO_LA') }} <a href='/politica-de-privacidad/' target="_blank">{{ __('common.POLITICA_DE_PRIVACIDAD') }}.</a></label>
</div>

    </div>

    
  <button type="submit" class="btn btn--block btn--primary" >
    {{ __('common.ENVIAR_SOLICITUD') }}
  </button>

  </form>
</div></div>
    </div>
  </div>
</div>

  

<div class="content__wrapper {{ $section or '' }}">
@yield('content','content')
@yield('module_content','module_content')
</div>
<footer class="footer ">
@if($section!='static')
    <div class="footer__banner">
      <div class="content__wrapper">
        <ul class="footer__banner__list">
          <li>
            <span class="icon-sketch"></span>
            <span class="text">{{ __('common.30_ANOS') }} <br /> {{ __('common.DE_EXPERIENCIA') }}</span>
          </li>
          <li>
            <span class="icon-house"></span>
            <span class="text">{{ __('common.MAS_DE') }} <br /> {{ __('common.1000_OBRAS') }}</span>
          </li>
          <li>
            <span class="icon-worldwide"></span>
            <span class="text">{{ __('common.PRESENCIA') }} <br /> {{ __('common.INTERNACIONAL') }}</span>
          </li>
        </ul>
      </div>
    </div>
@endif
  <div class="content__wrapper">
@if($section!='static')
    <div class="footer__contact">
        <div class="footer__contact__adress">
          <p class="title"><img src="../assets/images/content/logo.png" class="logo" alt="Logo" />  {{ __('common.OFICINA_DE_VENTAS') }}</p>
          <p class="text">Carrer sa Vinyola</p>
          <p class="text">07639 Sa Ràpita - Campos</p>
          <p class="text">Illes Balears, Spain</p>
        </div>
        <div class="footer__contact__mail">
          <p><a href="mailto:sales@grupournova.com">sales@grupournova.com</a></p>
          <p><a href="tel:+34871811998">(+34) 871811998</a></p>
        </div>
        <div class="footer__contact__social">
          <ul>
            <a href="https://www.youtube.com/channel/UCe-9jlQXIZno4bkr6NxWRLQ/videos" target="_blank">
              <span class="icon-youtube"></span>
            </a>
            <!-- <a href="https://www.facebook.com/balearichouses/" target="_blank">
              <span class="icon-facebook"></span>
            </a> -->
          </ul>
        </div>
@endif
      <div class="footer__contact__legal">
        <p>
          {{ __('common.RESERVADOS_DERECHOS') }}
        </p>
        <ul>
          <li>
            <a href="/aviso-legal/">{{ __('common.AVISO_LEGAL') }}</a>
          </li>
          <li>
            |
          </li>
          <li>
            <a href="/politica-de-privacidad/" target="_blank">{{ __('common.POLITICA_DE_PRIVACIDAD') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</footer>
@if (session('success'))
    <div class="mensaje"><div class="success"><h1>Enviado{{ __('common.'.session('success')) }}</h1></div></div>
@endif
@if (session('error'))
    <div class="mensaje"><div class="error"><h1>{{ __('common.'.session('error')) }}</h1></div></div>
@endif

    </div>
    <script src="/assets/javascript/all.fn.js"></script><script src="/assets/javascript/all.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo28Pb3POxP1WAe2gU42C_f0hjvnCpDgE&callback=initMap"></script>
  </body>
</html>