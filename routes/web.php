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
    //return view('welcome');
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('capturar','ArtigoController@retornarTelaCaptura')->name('capturar');
    Route::get('consultar','ArtigoController@consulta')->name('consultar');
    Route::post('fazer/capturar','ArtigoController@postCapturar');
    Route::get('/artigo/{id}','ArtigoController@destroy');
});


