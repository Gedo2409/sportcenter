@extends('backend.layouts.app')
@section('title')
Alumnos · Todos
@endsection
@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase" style="width:360px !important">Registro de <b>pagos</b></h2>
                        </div>
                    </div>
                </div> 
                <table  class="w3-table-all">
                    <thead>
                        <tr>
                            <th class="col-1">id</th>
                            <th>Nombre</th>
                            {{--<th>Descripción</th>--}}
                            <th>Monto</th>
                            <th>Fecha de pago</th>
                            <th>Borrar</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagos as $c)
                        <tr>
                            <td class="col-1">{{ $c->id }}</td>
                            
                            <td class="col-1">{{$c->Alumno->Nombre}}</td>
                            
                            <td>$ {{$c->monto}}</td>
                            <td>{{$c->created_at}}</td>
                          
                           
                        
                            <td class="text-center col-1">
                                <form action="{{ route('Pagos.destroy', $c->id) }}" method="POST" class="no-margin">
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
   

           

    
@endsection