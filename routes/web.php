<?php

use GuzzleHttp\Client;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('registros', function () {
		return view('tablas.registros');
	})->name('registros');

	Route::get('sensores', function () {
		return view('tablas.sensores');
	})->name('sensores');

	
	Route::get('ventas', function () {
		return view('tablas.ventas');
	})->name('ventas');

	// Route::get('clientes',function(){
	// 	return view('tablas.clientes');
	// })->name('clientes');

});



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::resource('clientes', '\App\Http\Controllers\ClientController');

Route::get('/clientes/{cliente}/edit', '\App\Http\Controllers\ClientController@edit')->name('clientes.edit');

Route::get('/clientes/{cliente}/delete', '\App\Http\Controllers\ClientController@delete')->name('clientes.delete');


Route::get('/obtener-json', function () {
	$client = new Client([
		'verify' => false,
	]);
	$response = $client->get('https://proyecto6prueba.000webhostapp.com/consultaProducto.php');
	$data = json_decode($response->getBody(), true);
	
	return view('json-view')->with('data', $data);
});
