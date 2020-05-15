<?php 
use RealRashid\SweetAlert\Facades\Alert;
//Route::prefix('frontend')->group(function () {
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
Route::post('/backend', ['uses' => 'DashboardController@index', 'as' => 'backend.index']);



