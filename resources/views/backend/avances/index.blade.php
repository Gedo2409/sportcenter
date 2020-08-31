@extends('backend.layouts.app')
@section('title')
Avances · Todos
@endsection
@section('content')
{{--<div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="img/student/1.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                 
                  
                
                </div>
                
            </div>
        </div>--}}

        <div class="contacts-area mg-b-15">
            <center><h1>Avances Registrados</h1></center>
            <div class="container-fluid">
                <div class="row">
                        {{--@foreach ($alumnos as $c)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="student-inner-std res-mg-b-30">
                                <div class="student-img">
                                    <img src="img/student/1.jpg" alt="" />
                                </div>
                                <div class="student-dtl">
                                    <h2>NOMBRE: {{$c->Nombre}}</h2>
                                    <p class="dp">Edad: {{$c->Edad}} años</p>

                                   <p class="dp">Telefono: {{$c->Telefono}}</p>
                                   
                                    <center>

                                       <a href="{{ route('alumnos.show', $c->id) }}"> <button type="button" class="btn btn-primary waves-effect waves-light">Más información</button></a>
                                        </center>
                                </div>
                             
                            </div>
                            <div><hr></div>
                        </div> 
                       @endforeach--}}
                </div>  
            </div>
        
        </div> 
@endsection