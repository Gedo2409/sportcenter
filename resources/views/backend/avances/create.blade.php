@extends('backend.layouts.app')
@section('title')
Alumnos · Registrar
@endsection
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <center> <h1>Registro de Avance </h1> </center>
                <div class="product-payment-inner-st">
                  
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form   action="{{ route('Avance.store') }}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors">
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
                                                            <input name="Edad" type="text" value="{{ old('Edad') }}" maxlength="11" class="form-control" placeholder="Edad">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="Peso" type="text" value="{{ old('Peso') }}" maxlength="11" class="form-control" placeholder="Peso">
                                                        </div>
                                                      {{--  <div class="form-group">
                                                            <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                        </div> --}} 
                                                        <div class="form-group">
                                                            <input name="Estatura" type="number" value="{{ old('Estatura') }}" maxlength="20" class="form-control" placeholder="Estatura">
                                                        </div>
                                                      {{--<div class="form-group alert-up-pd">
                                                            <div class="dz-message needsclick download-custom">
                                                                <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                </p>
                                                                <input name="imageico" class="hd-pro-img" type="text">
                                                            </div>
                                                        </div> --}}

                                                        <div class="form-group"> 
                                                            <input name="Musculo" type="number" value="{{ old('Musculo') }}" maxlength="20" class="form-control" placeholder="Musculo">
                                                        </div>

                                                        <div class="form-group">
                                                            <input name="Grasavic" type="number" value="{{ old('Grasavic') }}" maxlength="20" class="form-control" placeholder="Grasa Viceral">
                                                        </div>

                                                        
                                                      
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div> <br> </div>

                                                        <div class="form-group">
                                                            <input name="Grasacorp" type="number" value="{{ old('Grasacorp') }}" maxlength="20" class="form-control" placeholder="Grasa corporal">
                                                        </div>


                                                        <div class="form-group">
                                                            <input name="RM" type="number" value="{{ old('RM') }}" maxlength="20" class="form-control" placeholder="RM">
                                                        </div>

                                                        <div class="form-group">
                                                            <input name="VMI" type="number" value="{{ old('VMI') }}" maxlength="20" class="form-control" placeholder="VMI">
                                                        </div>

                                                        <div class="form-group">
                                                            <input name="cintura" type="text" value="{{ old('cintura') }}" maxlength="20" class="form-control" placeholder="cintura">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <input name="Telefono" type="text" value="{{ old('Telefono')}}" maxlength="20" class="form-control" placeholder="Telefono">
                                                        </div>
                                                        
                                                        
                                                       
                                                  

                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTRAR ALUMNO</button>
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
    </div>
</div>
@endsection