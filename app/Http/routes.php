<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', function(){
  return view('index');
});

Route::group(['prefix' => '/'], function()
{
  Route::resource('cita','citacontroller');
});
/*
Route::group(['prefix' => 'admin'], function()
{
  Route::resource('users','userscontroller');
  //Las rutas se componen por el prefijo "prefix", el primer parametro en
  //este caso 'useres' y los metodos del controlador
});*/



Route::group(['prefix' => '/'], function()
{
  Route::resource('imp','impcontroller');/*llamado a vista por controlador*/
});


//Rutas de impresion controlador = impcontroller
//Route::get('/impresion','impcontroller@create');/*asi tambien jalo aqui no uso prefijos pongo la ruta manual que es /sol y por medio de ella llamo al metodo create del controlador impcontroller*/
//Route::post('/impresion','impcontroller@store');
