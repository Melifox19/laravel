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

Route::get('/', function () {
  return redirect('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']],function()
{
  // Route pour les administrateurs ------------------------------------------------------

  Route::group(['middleware' => ['admin']], function()
  {
    Route::resource('users', 'UserController');
  });

  // Route pour tout les utilisateurs ----------------------------------------------------
  
  Route::resource('ruchers', 'RucherController');

  Route::resource('profile', 'ProfileController');

  Route::resource('melibornes', 'MeliborneController');

  Route::resource('ruches', 'RucheController');

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/home', 'HomeController@index');
});
