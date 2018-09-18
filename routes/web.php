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


Route::get('/es',                                                              function ()        { return redirect('/',301);});
Route::get('/',                                                                function ()        {App::setLocale('es');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/home',                                                            function ()        {App::setLocale('es');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/apartamentos-con-piscina-mallorca-venta',                         function ()        {App::setLocale('es');   return view('sectores', ['meta'=>'sectores', 'section'=>'sectores']);});
Route::get('/apartamentos-de-lujo-mallorca-venta',                             function ()        {App::setLocale('es');   return view('viviendas',['meta'=>'viviendas', 'section'=>'viviendas']);});
Route::get('/venta-viviendas-mallorca-es-trenc',                               function ()        {App::setLocale('es');   return view('ubicacion',['meta'=>'ubicacion', 'section'=>'ubicacion']);});
Route::get('/aviso-legal-urnova-mallorca',                                     function ()        {App::setLocale('es');   return view('aviso',    ['meta'=>'aviso', 'section'=>'static','static'=>'aviso-legal']);});
Route::get('/politica-de-privacidad-casas-es-trenc-ave-del-paraiso',           function ()        {App::setLocale('es');   return view('politica', ['meta'=>'politica', 'section'=>'static','static'=>'politica-de-privacidad']);});
Route::get('/proyectos-inmobiliarios-mallorca-compra-venta-obra-nueva',        function ()        {App::setLocale('es');   return view('contacto', ['meta'=>'contacto', 'section'=>'contacto']);});

Route::get('/en',                                                              function ()        {App::setLocale('en');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/en/home',                                                         function ()        {App::setLocale('en');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/en/houses-with-swimming-pool-mallorca-for-sale',                  function ()        {App::setLocale('en');   return view('sectores', ['meta'=>'sectores', 'section'=>'sectores']);});
Route::get('/en/luxury-apartments-for-sale-mallorca',                          function ()        {App::setLocale('en');   return view('viviendas',['meta'=>'viviendas', 'section'=>'viviendas']);});
Route::get('/en/homes-for-sale-es-trenc-mallorca',                             function ()        {App::setLocale('en');   return view('ubicacion',['meta'=>'ubicacion', 'section'=>'ubicacion']);});
Route::get('/en/legal-notice-urnova-mallorca',                                 function ()        {App::setLocale('en');   return view('aviso',    ['meta'=>'aviso', 'section'=>'static','static'=>'aviso-legal']);});
Route::get('/en/privacy-policy-casas-es-trenc-ave-del-paraiso',                function ()        {App::setLocale('en');   return view('politica', ['meta'=>'politica', 'section'=>'static','static'=>'politica-de-privacidad']);});
Route::get('/en/new-build-properties-for-sale-mallorca',                       function ()        {App::setLocale('en');   return view('contacto', ['meta'=>'contacto', 'section'=>'contacto']);});

Route::get('/de',                                                              function ()        {App::setLocale('de');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/de/home',                                                         function ()        {App::setLocale('de');   return view('home',     ['meta'=>'home', 'section'=>'']);});
Route::get('/de/verkauf-von-hauser-mit-pool-auf-mallorca',                     function ()        {App::setLocale('de');   return view('sectores', ['meta'=>'sectores', 'section'=>'sectores']);});
Route::get('/de/verkauf-von-luxusapartments-auf-mallorca',                     function ()        {App::setLocale('de');   return view('viviendas',['meta'=>'viviendas', 'section'=>'viviendas']);});
Route::get('/de/verkauf-von-wohnungen-auf-mallorca-es-trenc',                  function ()        {App::setLocale('de');   return view('ubicacion',['meta'=>'ubicacion', 'section'=>'ubicacion']);});
Route::get('/de/impressum-urnova-mallorca',                                    function ()        {App::setLocale('de');   return view('aviso',    ['meta'=>'aviso', 'section'=>'static','static'=>'aviso-legal']);});
Route::get('/de/datenschutzrichtlinie-casas-es-trenc-ave-del-paraiso',         function ()        {App::setLocale('de');   return view('politica', ['meta'=>'politica', 'section'=>'static','static'=>'politica-de-privacidad']);});
Route::get('/de/neubau-immobilien-verkauf-mallorca',                           function ()        {App::setLocale('de');   return view('contacto', ['meta'=>'contacto', 'section'=>'contacto']);});



Route::post('/InfoRequest', 'InfoRequestController@information');
