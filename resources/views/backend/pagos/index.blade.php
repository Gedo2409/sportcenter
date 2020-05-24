@extends('backend.layouts.app')
@section('title')
Alumnos · Todos
@endsection
@section('content')





        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase" style="width:360px !important">Registro de <b>pagos</b></h2>
                        </div>
                    </div>
                </div> 
                <table id="example" class=" table table-responsive-sm">
                    <thead>
                        <tr>
                            <th class="col-1">id</th>
                            <th>Nombre</th>
                            {{--<th>Descripción</th>--}}
                            <th>Monto</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagos as $c)
                        <tr>
                            <td class="col-1">{{ $c->id }}</td>
                            <td class="col-1">{{ $c->alumno_id }}</td>
                            {{--<td>{!!$c->Descripcion!!}</td>--}}
                            <td>{{$c->monto}}</td>
                          
                           
                        
                            <td class="text-center col-1">
                                <form action="{{ route('Pagos.destroy', $c->id) }}" method="POST" class="no-margin">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn" style="background-color:transparent"><i class="fas fa-trash-alt fa-2x text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('sweetalert::alert')
        </div>
@endsection