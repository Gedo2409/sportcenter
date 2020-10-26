@extends('backend.layouts.app')
@section('title')
Detalle de avance
@endsection
@section('content')


<div class="row">                                                        
    <center> <h3> <b>Ficha de {{$alumno->Nombre}}</b></h3> </center>



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase" style="width:360px !important">Tabla General de avances</h2>
                    </div>
                </div>
            </div> 
            <table  class="w3-table-all">
                <thead>
                   
                    <tr>
                        
                        <th>Peso</th>
                        {{--<th>Descripción</th>--}}
                        <th>Estatura</th>
                        <th>Musculo</th>
                        <th>Graasa Viceral</th>
                        <th>Graasa Corporal</th>
                        <th>RM</th>
                        <th>VMI</th>
                        <th>Cintura</th>
                        <th>Borrar</th>
                      
                    </tr>
                </thead>
                <tbody>
                  @foreach ($alumno->avance as $aa )
                      
                
                        
                   
                    <tr>
                        <td class="col-1">{{$aa->Peso}}</td>
                    
                        <td class="col-1">{{$aa->Estatura}}</td>
                        
                        <td>{{$aa->Musculo}}</td>
                        <td>{{$aa->Grasavic}}</td>
                        <td>{{$aa->Grasacorp}}</td>
                        <td>{{$aa->RM}}</td>
                        <td>{{$aa->VMI}}</td>
                        <td>{{$aa->cintura}}</td>
                        
                       
                    
                        <td class="text-center col-1">
                            <form action="" method="POST" class="no-margin">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn" style="background-color:transparent">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('sweetalert::alert')

            

    </div>
    <div>
        <hr>
    </div>



</div>








      
       
@endsection