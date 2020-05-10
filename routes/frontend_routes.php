<?php 

//Route::prefix('frontend')->group(function () {
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);