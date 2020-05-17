<?php

use RealRashid\SweetAlert\Facades\Alert;


Route::prefix('backend')->group(function () {
    //El route::resource simplifica las operaciones de index, create, store, show, edit, update y destroy
    //Cualquier otra operación declarada aparte de estas, se declara en la parte inferior
    Route::resource('/', 'DashboardController');

    Route::resource('/alumnos', 'AlumnosController');
    Route::resource('/Pagos', 'PagoController');
    Route::resource('/Eventos', 'EventosController');
    Route::resource('/Blog', 'BlogController'); 

    //Esta ruta ayudara a guardar el avance desde la vista del alumno. 
    //   Route::get('/alumnos/{id}', ['uses' => 'AlumnosController', 'as' => 'alumnos.pagoalumno' ]);



    //Cualquier otra operación declarada aparte de estas, se declara en la parte inferior
   
    //Vista de las fotos y formulario para servicio
    Route::get('/servicios/fotos/{id}', ['uses' => 'ServicioController@fotos', 'as' => 'servicios.fotos']);
    //Envio de datos para registro de fotos del servicio
    Route::post('/servicios/subir-fotos/{id}',['uses' => 'ServicioController@subirFotos','as' => 'servicios.subir']);

    //Vista de las fotos y formulario para proyecto
    Route::get('/proyectos/fotos/{id}', ['uses' => 'ProyectoController@fotos', 'as' => 'proyectos.fotos']);
    //Envio de datos para registro de fotos del proyecto
    Route::post('/proyectos/subir-fotos/{id}',['uses' => 'ProyectoController@subirFotos','as' => 'proyectos.subir']);

});