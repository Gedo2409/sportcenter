@extends('backend.layouts.app')
@section('title')
Alumnos - {{$alumnos->Nombre}}
@endsection

@section('content')
               
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="img/profile/1.jpg" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div>
                                   <center><h1>TARJETA DEL ALUMNO</h1></center>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Name </b><br /> {{$alumnos->Nombre}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Edad</b><br /> {{$alumnos->Edad}}</p>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Telefono</b><br /> {{$alumnos->Telefono}}</p>
                                        </div>
                                    </div>
                                </div>
                              {{--<div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <h3>500</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <h3>900</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="address-hr">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <h3>600</h3>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                        <div class="row"> <hr> </div>
                            {{--DATOS NUTRICIONALES --}}
                            <div class="profile-info-inner">
                                <div class="profile-img">
                                    <img src="img/profile/1.jpg" alt="" />
                                </div>
                                <div class="profile-details-hr">
                                    <div class="row">
                                        <div>
                                       <center><h1>MEDIDAS DE ENTRADA</h1></center>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                            <div class="address-hr">
                                                <p><b>Peso </b><br /> {{$alumnos->Peso}}</p>
                                            </div>
                                            <div class="address-hr">
                                                <p><b>Estatura </b><br /> {{$alumnos->Estatura}}</p>
                                            </div>
                                            <div class="address-hr">
                                                <p><b>Musculo </b><br /> {{$alumnos->Musculo}}</p>
                                            </div>
                                            <div class="address-hr">
                                                <p><b>Grasa viceral </b><br /> {{$alumnos->Grasavic}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                <p><b>Grasa Corporal</b><br /> {{$alumnos->Grasacorp}}</p>
                                            </div>
                                            
                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                <p><b>RM</b><br /> {{$alumnos ->RM}}</p>
                                            </div> 
                                            
                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                <p><b>VMI</b><br /> {{$alumnos ->VMI}}</p>
                                            </div>
                                            
                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                <p><b>VMI</b><br /> {{$alumnos ->cintura}}</p>
                                            </div> 
                                            
                                            
                                        </div>
                                    </div>
                                 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="address-hr">
                                                <p><b>Fecha de registro</b><br /> {{ $alumnos->created_at->format('d-m-Y')}} </p>
                                            </div>
                                        </div>
                                    </div>

                                  {{--<div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="address-hr">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <h3>500</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="address-hr">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <h3>900</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="address-hr">
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <h3>600</h3>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>  
                            <center>
                            <div> 
                                <form action="{{ route('alumnos.destroy', $alumnos->id) }}" method="POST" class="no-margin">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" >Eliminar alumno</button>
                            </form>
                                </div>
                            </center>

                    </div>
                    
                </div>
            </div>
            
        </div>
        
        

       
@endsection