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

Route::get('/', function()
{
return View::make('accueil');
});
Route::get('affiche','etudiantsController@index');
Route::get('insererabsences','etudiantsController@abse');
Route::get('accueil','absencesController@inserer');
Route::get('affiche','etudiantsController@ab');
