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


Auth::routes();

//Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);


require_once "backend_routes.php";
require_once "frontend_routes.php";

