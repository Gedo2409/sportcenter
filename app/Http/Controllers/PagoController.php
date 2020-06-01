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
use App\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos=DB::table('pagos')
        ->join('alumnos', 'alumnos.id', '=', 'pagos.id')
        ->select('pagos.id','pagos.monto', 'alumnos.nombre as NombredeAlumno')
        ->get();

        $pagos = Pago::all();

        //dd($pagos);
        return view('backend.Pagos.index',['pagos'=>Pago::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pagos=DB::table('pagos')
        ->join('alumnos', 'alumnos.id', '=', 'pagos.id')
        ->select('pagos.id','pagos.monto', 'alumnos.nombre as NombredeAlumno')
        ->get();
        $alumnos=Alumno::all();
        return view('backend.Pagos.create', compact('alumnos'));
       


        /**$pagos=DB::table('pagos')
        ->join('alumnos', 'alumnos.id', '=', 'pagos.alumno.id')**/
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
			$b = new Pago($input);
			$b->save();
		}
		//return view('backend.alumnos.index');	
		Alert::success('Exito!', 'Pago Registrado con Exito');  
        return view('backend.Pagos.index',['pagos'=>Pago::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
      /*  Alumno::where('id', $id)->delete();
		$s=Alumno::where('id',$id)->get();
		$b =Pago::find($id);
		$b->delete();
		return view('backend.alumnos.index',['alumnos'=>alumnos::all()]);*/
    }
}
