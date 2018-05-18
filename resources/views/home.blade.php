@extends('layouts.app')


@section ('title')
{{ __('home.TITLE') }}
@endsection
@section ('module_content')
@endsection
@section ('content')
<div class="hero ">

  <div class="swiper-container hero__slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url(/assets/images/content/hero-home.jpg);"></div>
        </div>
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url(/assets/images/content/hero-home.jpg);"></div>
        </div>
    </div>

    <div class="swiper-button-prev hero__slider__prev"><span class="icon-arrow-left-hero"></span></div>
    <div class="swiper-button-next hero__slider__next"><span class="icon-arrow-right-hero"></span></div>
  </div>

    <div class="hero__form">
    
      <p class="hero__form__title">
        {{ __('common.MAS_INFORMACION') }}
      </p>
      
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
  <form action="/InfoRequest" method="POST">
  {{ csrf_field() }}
    <div class="form-item">
      
<div class="input ">
  <input type="text" id="hero-name" name="hero-name" placeholder="{{ __('common.NOMBRE_Y_APELLIDOS') }}" value="{{ old('hero-name') }}{{ old('modal-name') }}" class="input__field">
</div>

    </div>
    <div class="form-item">

      
<div class="select ">
  <select id="hero-phone-prefix" name="hero-phone-prefix" class="select__field">
    <option value="+34"{{ ( old('modal-phone-prefix')=='+34' || old('hero-phone-prefix')=='+34' )?' selected':'' }}>+34</option>
    <option value="+23"{{ ( old('modal-phone-prefix')=='+23' || old('hero-phone-prefix')=='+23' )?' selected':'' }}>+23</option>
    <option value="+43"{{ ( old('modal-phone-prefix')=='+43' || old('hero-phone-prefix')=='+43' )?' selected':'' }}>+43</option>
  </select>
</div>



      
<div class="input ">
  <input type="text" id="hero-phone" name="hero-phone" placeholder="{{ __('common.NUMERO') }}" value="{{ old('hero-phone') }}{{ old('modal-phone') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="email" id="hero-mail" name="hero-mail" placeholder="{{ __('common.MAIL') }}" value="{{ old('hero-mail') }}{{ old('modal-mail') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="text" id="hero-message" name="hero-message" placeholder="{{ __('common.MENSAJE') }}" value="{{ old('hero-message') }}{{ old('modal-message') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="checkbox ">
  <input type="checkbox" id="hero-lega" name="hero-lega" class="checkbox__field"{{ old('hero-lega')?'checked':'' }}>
  <label for="hero-lega" class="checkbox__label">{{ __('common.ACEPTO_LA') }} <a href='/build/politica-de-privacidad/'>{{ __('common.POLITICA_DE_PRIVACIDAD') }}.</a></label>
</div>

    </div>

    
  <button type="submit" class="btn btn--block btn--primary" >
    {{ __('common.ENVIAR_SOLICITUD') }}
  </button>

  </form>
</div>
    </div>

</div>

  <div class="carousel-home">
    <div class="swiper-container carousel-home__slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          

<div class="content-image content-image--right">
  <div class="content-image__content">
    <p class="title-small">{{ __('home.LOS_SECTORES_DE') }}</p>
    <p class="title">{{ __('home.CASAS_ES_TRENC') }}</p>
    <div class="slide-sectores-content ave-paraiso">
  <a href="/sectores/" >
		<img src="/assets/images/content/logo-avedelparaiso.png" class="logos-home" alt="Logo avedelparaiso" />
  </a>
	</div>
	<p class="text">{{ __('home.DESDE_219') }}</p>
    
<div class="slide-sectores-content buganvilla">
  <a href="/sectores/">
	<img src="/assets/images/content/logo-buganvilla.png" class="logos-home" alt="Logo buganvilla" />
  </a>
	<p class="text">{{ __('home.DESDE_285') }}</p>
</div>
  </div>
  <div class="content-image__image">
    <img src="/assets/images/content/slide-sectores.jpg" class="" alt="{{ __('home.SLIDE_SECTORES') }}" />
  </div>
</div>
        </div>
        <div class="swiper-slide">
          

<div class="content-image content-image--left">
  <div class="content-image__content">
    <p class="title-small">{{ __('home.NUESTRAS') }}</p>
    <p class="title">{{ __('home.VIVIENDAS') }}</p>
    <p class="text">{{ __('home.NUESTROS_APARTAMENTOS') }}</p>
              <p class="text"><a href="/viviendas/" class="link">{{ __('home.ATICOS_CON_TERRAZA') }} <span class="icon-arrow-right"></a></p>
              <p class="text"><a href="/viviendas/" class="link">{{ __('home.BAJOS_CON_JARDIN') }}<span class="icon-arrow-right"></a></p>
  </div>
  <div class="content-image__image">
    <img src="/assets/images/content/franciscogarvi.com_B7K3419.jpg" class="" alt="{{ __('home.FRANCISCOGARVI') }}" />
  </div>
</div>
        </div>
        <div class="swiper-slide">
          


<div class="content-image content-image--right">
  <div class="content-image__content">
    <p class="title-small">{{ __('home.INMEJORABLE') }}</p>
    <p class="title">{{ __('home.UBICACION') }}</p>
    <p class="text">{{ __('home.ESTE_NUEVO_COMPLEJO') }}</p>
  </div>
  <div class="content-image__image">
    <img src="/assets/images/content/slide-ubicacion.jpg" class="" alt="{{ __('home.SLIDE_UBICACION') }}" />
  </div>
</div>
        </div>
      </div>

      <div class="carousel-home__slider__controls">
        <div class="swiper-button-prev carousel-home__slider__prev"><span class="icon-arrow-left"></span></div>
        <div class="swiper-button-next carousel-home__slider__next"><span class="icon-arrow-right"></span></div>
      </div>
    </div>
  </div>
@endsection