@extends('backend.layouts.app')
@section('title')
Detalle de avance
@endsection
@section('content')
<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
         

<div class="row">                                                        
    <center> <h3> <b>Sugerencia alimentaria para {{$alumno->Nombre}}</b></h3> </center>



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <div class="container">
        @foreach ($alumno->avance as $aa )
        @endforeach
                <p>Aqui va tu dieta</p>

                <p><b>Estatura </b><br /> {{$aa->Estatura}}</p>
                
                <p><b>Peso actual </b><br /> {{$aa->Peso}}</p>

                <p><b>Peso incio </b><br /> {{$alumno->Peso}}</p>
               
               
                @php
                   if ($aa->Peso==66){

                    echo "Tu peso esta chido";
                   }else
                    echo "Nel, come menos"; 
                
               @endphp 

        </div>
  //Agregar parametros del pseudocodigo

            
            
    </div>
    <div>
        <hr>
    </div>
   







      
       
@endsection