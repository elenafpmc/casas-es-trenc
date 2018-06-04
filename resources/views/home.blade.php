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
          <div class="hero__slider__bg" style="background-image: url('/assets/images/content/hero-home-01.jpg');"></div>
        </div>
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url('/assets/images/content/hero-home-02.jpg');"></div>
        </div>
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url('/assets/images/content/hero-home-03.jpg');"></div>
        </div>
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url('/assets/images/content/hero-home-04.jpg');"></div>
        </div>
        <div class="swiper-slide">
          <div class="hero__slider__bg" style="background-image: url('/assets/images/content/hero-home-05.jpg');"></div>
        </div>
    </div>

    <div class="hero__slider__pagination swiper-pagination"></div>
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
  <form action="/InfoRequest" method="POST" class="hero_form-info__form">
  {{ csrf_field() }}
    <div class="form-item">
      
<div class="input ">
  <input type="text" id="hero_name" name="hero_name" placeholder="{{ __('common.NOMBRE_Y_APELLIDOS') }}" value="{{ old('hero_name') }}{{ old('modal_name') }}" class="input__field">
</div>

    </div>
    <div class="form-item">

      
<div class="select ">
  <select id="hero_phone-prefix" name="hero_phone-prefix" class="select__field">
    <option value="+34"{{ ( old('modal_phone-prefix')=='+34' || old('hero_phone-prefix')=='+34' )?' selected':'' }}>+34</option>
    <option value="+23"{{ ( old('modal_phone-prefix')=='+23' || old('hero_phone-prefix')=='+23' )?' selected':'' }}>+23</option>
    <option value="+43"{{ ( old('modal_phone-prefix')=='+43' || old('hero_phone-prefix')=='+43' )?' selected':'' }}>+43</option>
  </select>
</div>



      
<div class="input ">
  <input type="text" id="hero_phone" name="hero_phone" placeholder="{{ __('common.NUMERO') }}" value="{{ old('hero_phone') }}{{ old('modal_phone') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="email" id="hero_mail" name="hero_mail" placeholder="{{ __('common.MAIL') }}" value="{{ old('hero_mail') }}{{ old('modal_mail') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="input ">
  <input type="text" id="hero_message" name="hero_message" placeholder="{{ __('common.MENSAJE') }}" value="{{ old('hero_message') }}{{ old('modal_message') }}" class="input__field">
</div>

    </div>

    <div class="form-item">
      
<div class="checkbox ">
  <input type="checkbox" id="hero_lega" name="hero_lega" class="checkbox__field"{{ old('hero_lega')?'checked':'' }}>
  <label for="hero_lega" class="checkbox__label">{{ __('common.ACEPTO_LA') }} <a href='/build/politica-de-privacidad/' target="_blank">{{ __('common.POLITICA_DE_PRIVACIDAD') }}.</a></label>
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
    <!-- <p class="title-small">{{ __('home.LOS_SECTORES_DE') }}</p> -->
    <!-- <p class="title">{{ __('home.CASAS_ES_TRENC') }}</p> -->

<!--     <div class="slide-sectores-content ave-paraiso">
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
</div> -->

    <p class="title-small">los sectores de</p>
    <p class="title">Casas es Trenc</p>
    <div class="slide-sectores-content ave-paraiso">
      <a class="logos-home-link" href="/sectores/">
        <img src="/assets/images/content/logo-avedelparaiso.png" class="logos-home" alt="Logo avedelparaiso" />
      </a>
      <p class="text">{{ __('home.DESDE_219') }}</p>
    </div>
    <div class="slide-sectores-content buganvilla">
      <a class="logos-home-link" href="/sectores/">
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
          

<div class="content-image content-image--right">
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
    <!-- TRADUCCIÓN -->
    <p class="text"><a href="/ubicacion/" class="link">Ver ubicación<span class="icon-arrow-right"></a></p>
    <!-- /TRADUCCIÓN -->
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