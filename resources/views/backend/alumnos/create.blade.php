@extends('backend.layouts.app')
@section('title')
Alumnos · Registrar
@endsection
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <center> <h1>Registro de Alumnos </h1> </center>
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Información del alumno</a></li>
                    
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form   action="{{ route('alumnos.store') }}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="Nombre" value="{{ old('Nombre') }}" maxlength="50"   class="form-control" placeholder="Nombre" required >
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
                                                            <input name="Estatura" type="int" value="{{ old('Estatura') }}" maxlength="20" class="form-control" placeholder="Estatura">
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

                                                        <div class="form-group">
                                                            <input name="Grasacorp" type="number" value="{{ old('Grasacorp') }}" maxlength="20" class="form-control" placeholder="Grasa corporal">
                                                        </div>

                                                      
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



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
                                                        
                                                        <div class="form-group">
                                                            <select name="gender" class="form-control">
                                                                <option value="none" selected="" disabled="">Genero</option>
                                                                <option value="0">Male</option>
                                                                <option value="1">Female</option>
                                                            </select>
                                                        </div>
                                                       
                                                       {{--  <div class="form-group res-mg-t-15">
                                                            <textarea name="description" placeholder="Description"></textarea>
                                                        </div> --}}
                                                      
                                                       {{--  <div class="form-group">
                                                            <select name="country" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select country</option>
                                                                    <option value="0">India</option>
                                                                    <option value="1">Pakistan</option>
                                                                    <option value="2">Amerika</option>
                                                                    <option value="3">China</option>
                                                                    <option value="4">Dubai</option>
                                                                    <option value="5">Nepal</option>
                                                                </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <select name="state" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select state</option>
                                                                    <option value="0">Gujarat</option>
                                                                    <option value="1">Maharastra</option>
                                                                    <option value="2">Rajastan</option>
                                                                    <option value="3">Maharastra</option>
                                                                    <option value="4">Rajastan</option>
                                                                    <option value="5">Gujarat</option>
                                                                </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <select name="city" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select city</option>
                                                                    <option value="0">Surat</option>
                                                                    <option value="1">Baroda</option>
                                                                    <option value="2">Navsari</option>
                                                                    <option value="3">Baroda</option>
                                                                    <option value="4">Surat</option>
                                                                </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                        </div> --}}

                                                        
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