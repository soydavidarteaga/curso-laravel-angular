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

Route::get('saludo', function () {
    return '<h1>Hola Bienvenidos al curso de laravel</h1>';
});

Route::get('cliente/{id}',function($id){
    return "Cliente #".$id;
})->where('id','[0-9]+');

Route::get('proveedor/{id}/vendedor/{nombre}',function($id,$nombre){
    return "<h2>Proveedor nro. ".$id." Vendedor:".$nombre."</h2>";
})->where(['id' => '[0-9]+','nombre' => '[a-zA-Z]+']);  

Route::resource('/formacion','FormacionController');

Route::get('/registro','FormacionController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/usuarios','UsuarioController');
