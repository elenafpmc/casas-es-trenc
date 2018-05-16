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

Route::get('/',                      function ()        {App::setLocale('es');   return view('home',     ['section'=>'']);});
Route::get('/home',                  function ()        {App::setLocale('es');   return view('home',     ['section'=>'']);});
Route::get('/sectores',              function ()        {App::setLocale('es');   return view('sectores', ['section'=>'sectores']);});
Route::get('/viviendas',             function ()        {App::setLocale('es');   return view('viviendas',['section'=>'viviendas']);});
Route::get('/ubicacion',             function ()        {App::setLocale('es');   return view('ubicacion',['section'=>'ubicacion']);});
Route::get('/aviso-legal',           function ()        {App::setLocale('es');   return view('aviso',    ['section'=>'contacto']);});
Route::get('/contacto',              function ()        {App::setLocale('es');   return view('contacto', ['section'=>'static']);});
Route::get('/{locale}/home',         function ($locale) {App::setLocale($locale);return view('home');}                                )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/sectores',     function ($locale) {App::setLocale($locale);return view('sectores', ['section'=>'sectores']);}   )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/viviendas',    function ($locale) {App::setLocale($locale);return view('viviendas',['section'=>'viviendas']);}  )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/ubicacion',    function ($locale) {App::setLocale($locale);return view('ubicacion',['section'=>'ubicacion']);}  )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/contacto',     function ($locale) {App::setLocale($locale);return view('contacto', ['section'=>'contacto']);}   )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}/aviso-legal',  function ($locale) {App::setLocale($locale);return view('aviso',    ['section'=>'static']);}     )->where( ['locale'=>'es|en|de']);
Route::get('/{locale}',              function ($locale) {App::setLocale($locale);return view('home',     ['section'=>'']);}           )->where( ['locale'=>'es|en|de']);

Route::post('/InfoRequest', 'InfoRequestController@information');
