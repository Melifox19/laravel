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

// Route pour le choix de la langue
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes(['verify' => true]);

Route::get('/', function ()
{
  return redirect('login');
});

Route::group(['middleware' => ['auth', 'verified']],function()
{
  // Route pour les administrateurs ------------------------------------------------------

  Route::group(['middleware' => ['admin']], function()
  {
    Route::resource('users', 'UserController');
    Route::resource('mesures', 'MesureController');
Route::resource('alertes', 'AlerteController');
  });

  // Route pour tout les utilisateurs ----------------------------------------------------
  Route::resource('ruchers', 'RucherController');

  Route::resource('profile', 'ProfileController');

  Route::resource('melibornes', 'MeliborneController');

  Route::resource('ruches', 'RucheController');

  Route::resource('home', 'HomeController');

  Route::resource('mesures', 'MesureController');

  Route::resource('alertes', 'AlerteController');
});
