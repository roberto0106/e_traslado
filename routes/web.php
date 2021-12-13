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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
   

});



/*api*/ 


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('guias', GuiasController::class) ;
Route::resource('roteiros', RoteirosController::class);
Route::get('data_roteiros','RoteirosController@search_data_roteiros')->name('data_roteiro');
Route::get('get_roteiros','RoteirosController@get_roteiros');
Route::get('config','ConfigController@index')->name('config');
