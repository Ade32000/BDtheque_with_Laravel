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
    return view('layout');
});

Route::get('/Accueil','AccueilController@show');
Route::get('/Nouveautes','NouveautesController@show');
Route::get('/BDtheque','AccueilController@show');
Route::get('/Admin','AdminController@show');
Route::get('/Fiche','AccueilController@fiche');
// Route::get('Fiche/{id}', function ($id) {
//     return 'Product '.$id;
// });
