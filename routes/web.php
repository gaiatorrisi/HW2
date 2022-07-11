<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ServiziController;
use App\Http\Controllers\CollectionController;


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
    return redirect('home');
});

//CONTROLLER per gestione : LOGIN,LOGOUT,SIGN UP
//-->LOGIN
Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');
//-->SIGN UP
Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');
//-->LOGOUT
Route::get('logout', 'App\Http\Controllers\LoginController@logout');
//-->AREAPERSONALE
Route::get('myaccount', 'App\Http\Controllers\CollectionController@area');


//CONTROLLER per gestione : HOME e LOAD DINAMICO della lista trattamenti
Route::get('home', 'App\Http\Controllers\CollectionController@home');
Route::get('load_dinamico', "App\Http\Controllers\CollectionController@list");


//CONTROLLER per gestione API
//-->SPOTIFY
Route::get('spotify/{canzone}', 'App\Http\Controllers\APIController@search');
//-->NEWSLETTER
Route::get('newsletter/{email}', "App\Http\Controllers\APIController@check");



//CONTROLLER per gestione: RICERCA REGALI,SPAZIO RECENSIONI e SPAZIO APPUNTAMENTI
//-->RICERCA REGALI
Route::get('gift-card/{gift}', 'App\Http\Controllers\ServiziController@find_gift');
Route::get('gift-card', 'App\Http\Controllers\ServiziController@gift_card');

//-->MOSTRA RECENSIONI
Route::get('about', 'App\Http\Controllers\ServiziController@review');
Route::get('about/mostra', 'App\Http\Controllers\ServiziController@show_review');

//-->AGGIUNGI RECENSIONI
Route::get('recensioni/{commento}', 'App\Http\Controllers\ServiziController@add_review');

//-->RICHIESTA APPUNTAMENTO
Route::get('contact-us','App\Http\Controllers\ServiziController@appointment');
Route::post('contact','App\Http\Controllers\ServiziController@book_appointment');



