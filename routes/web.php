<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',                                        function ()        {App::setLocale('es');   return view('home',     ['section'=>'']);});
Route::get('/'.__('url.home'),                             function ()        {App::setLocale('es');   return view('home',     ['section'=>'']);});
Route::get('/'.__('url.sectores'),                         function ()        {App::setLocale('es');   return view('sectores', ['section'=>'sectores']);});
Route::get('/'.__('url.viviendas'),                        function ()        {App::setLocale('es');   return view('viviendas',['section'=>'viviendas']);});
Route::get('/'.__('url.ubicacion'),                        function ()        {App::setLocale('es');   return view('ubicacion',['section'=>'ubicacion']);});
Route::get('/'.__('url.aviso-legal'),                      function ()        {App::setLocale('es');   return view('aviso',    ['section'=>'static']);});
Route::get('/'.__('url.politica-de-privacidad'),           function ()        {App::setLocale('es');   return view('politica', ['section'=>'static']);});
Route::get('/'.__('url.contacto'),                         function ()        {App::setLocale('es');   return view('contacto', ['section'=>'contacto']);});
Route::get('/{locale}/'.__('url.home'),                    function ($locale) {App::setLocale($locale);return view('home',     ['section'=>'']);}           )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.sectores'),                function ($locale) {App::setLocale($locale);return view('sectores', ['section'=>'sectores']);}   )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.viviendas'),               function ($locale) {App::setLocale($locale);return view('viviendas',['section'=>'viviendas']);}  )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.ubicacion'),               function ($locale) {App::setLocale($locale);return view('ubicacion',['section'=>'ubicacion']);}  )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.contacto'),                function ($locale) {App::setLocale($locale);return view('contacto', ['section'=>'contacto']);}   )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.aviso-legal'),             function ($locale) {App::setLocale($locale);return view('aviso',    ['section'=>'static']);}     )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/'.__('url.politica-de-privacidad'),  function ($locale) {App::setLocale($locale);return view('politica', ['section'=>'static']);}     )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}',                                function ($locale) {App::setLocale($locale);return view('home',     ['section'=>'']);}           )->where( ['locale'=>'es|en|de']);

Route::post('/InfoRequest', 'InfoRequestController@information');
