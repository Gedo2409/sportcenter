<?php 

//Route::prefix('frontend')->group(function () {
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
Route::post('/backend', ['uses' => 'DashboardController@index', 'as' => 'backend.index']);