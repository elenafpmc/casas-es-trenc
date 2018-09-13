@extends('layouts.app')
@if($meta='home')
@endif
@if($section='static')
@endif
@if($static='error_404')
@endif


@section ('title')
error 404
@endsection

@section ('module_content')
@endsection
@section ('content')

      <p class="error__content__error">404</p>
      <p class="error__content__title">{{ __('error_404.LO_SENTIMOS') }}</p>

@endsection
