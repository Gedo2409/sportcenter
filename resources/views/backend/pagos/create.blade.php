@extends('backend.layouts.app')
@section('title')
Registro de pagos
@endsection
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <center> <h1>Regitro de Pagos </h1> </center>
                <div class="product-payment-inner-st">
                    
                    <div class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form   action="{{ route('Pagos.store') }}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Nombre del Alumno</label> 
                                                           <select name="alumno_id" class="form-control"> 
                                                          
                                                            <option value="">Seleccione al alumno</option>
                                                            @foreach ($alumnos as $alumno)
                                                               <option value="{{$alumno->id}}">{{$alumno->Nombre}}</option>
                                                            @endforeach                                                        
                                                            </select>                                                                                 
                                                            {{--<input type="text" name="Nombre" /*value="{{ old('id') }}" maxlength="50"*/   class="form-control" placeholder="Nombre" required > --}}
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Monto</label>
                                                            <input name="monto" type="number" value="{{ old('monto') }}" maxlength="11" class="form-control" placeholder="Monto">
                                                        </div>
                                                       
                                                  
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTRAR PAGO</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>
                                                    
                                                </div>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    
                    </div>
                </div>
               
            </div>
        </div>
        @include('sweetalert::alert')
    </div>
   
</div>
@endsection