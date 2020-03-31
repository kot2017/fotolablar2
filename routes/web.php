<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('foto.foto');
});

Route::get('/blade', function () {
    return view('child');
});

Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/foto/producent', function () {
    return view('foto.producent.producent', ['tytul' => 'PRODUCENCI']);
});

Route::get('/foto/producent/index', 'ProducentWebController@allProducent');
Route::get('/foto/producent/create', 'ProducentWebController@create');
Route::get('/foto/producent/detail/{id}', 'ProducentWebController@detail');
Route::post('/foto/producent/save', 'ProducentWebController@save');
Route::get('/foto/producent/edit/{id}', 'ProducentWebController@edit');
Route::put('/foto/producent/update', 'ProducentWebController@update');
Route::get('/foto/producent/delete/{id}', 'ProducentWebController@delete');

Route::get('/foto/film', function () {
    return view('foto.filmy.filmy');
});


Route::get('/foto/chemikalia', function () {
    return view('foto.chemikalia.chemikalia');
});


// REST
Route::resource('filmy', 'FilmyController');
