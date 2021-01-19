<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Alumno;
use App\Avance;


class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $avance=DB::table('avances')
        ->join('alumnos', 'alumnos.id', '=', 'avances.id')
        ->select('avances.id', 'alumnos.nombre as NombredeAlumno')
        ->get();
        
        $avance = Avance::all();
        
        //dd($pagos);
        return view('backend.avances.index',['alumnos'=>Alumno::all()]);
        $alumnos=Alumno::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $pagos=DB::table('avances')
        ->join('alumnos', 'alumnos.id', '=', 'avances.id')
        ->select('avances.id', 'alumnos.nombre as NombredeAlumno')
        ->get();
        $alumnos=Alumno::all();
       
        return view('backend.avances.create', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //dd($pagos);
        
            

          $input = $request->all();
   
       
          $rules = [
              //'Foto' => 'mimes:jpeg,png,jpg',// max 150kb
  
              'alumno_id' => 'required'
              
              
          
              //hacer validacion para tipo de datos
  
          ];
          $validator = Validator::make($input, $rules);
          if ($validator->fails()) {
           
              return redirect()->back()
              ->withErrors($validator)
              ->withInput();
          } else {
              $b = new Avance($input);
              $b->save();
          }
          //return view('backend.alumnos.index');	
          Alert::success('Exito!', 'Pago Registrado con Exito'); 
          //return view('backend.avances.index',['avances'=>Pago::all()]);
          //return view('backend.avances.index'); Este es el bueno

        /**
         * La siguiente linea es la que sustituyo a -> return view('backend.avances.index'); 
         * debido a un error que sugrio despues de haber hecho el cambio para que las tablas de avence se mostraran.
         * En caso de errores en la sección de avances consultar la linea anterior. */
          return view('backend.avances.index',['alumnos'=>Alumno::all()]);	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {


        
        $avance=DB::table('avances')
        ->join('alumnos', 'alumnos.id', '=', 'avances.id')
        ->select('avances.id', 'alumnos.nombre as NombredeAlumno')
        ->get();

        $avance = Avance::all();
        	
        return view('backend.avances.show', ['alumno' => Alumno::find($id)]);
       
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
