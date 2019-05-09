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

//Rotas para user
Route::get('users', 'UserController@index')->name('users.index');
Route::get('create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{user}', 'UserController@update')->name('users.update');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');


//--------------------------------------------------------------------------------
//Rotas para Aeronaves
Route::get('aeronaves', 'AeronaveController@index')->name('aeronaves.index');
Route::get('aeronaves/create', 'AeronaveController@create')->name('aeronaves.create');
Route::post('aeronaves', 'AeronaveController@store')->name('aeronaves.store');
Route::get('aeronaves/{aeronave}/edit', 'AeronaveController@edit')->name('aeronaves.edit');
Route::put('aeronaves/{aeronave}', 'AeronaveController@update')->name('aeronaves.update');
Route::delete('aeronaves/{aeronave}', 'AeronaveController@destroy')->name('aeronaves.destroy');

//-----------------------------------------------------------------------------------
//Rotas para Movimentos



//----------------------------------------------------------------------------------------------
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view ('dashboard');
});
Route::get('/add', function() {
    return view ('add');
});


/*Route::get('/home', function() {
    return redirect()->route('users.index');
});*/