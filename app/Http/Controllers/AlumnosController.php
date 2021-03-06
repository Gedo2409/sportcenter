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
use App\Avance;


class AlumnosController extends Controller
{
    public function __construct()
	{
        $this->middleware('auth');
    }
    
    public function index()
	{
		return view('backend.alumnos.index',['alumnos'=>Alumno::all()]);
    }

	public function create()
	{
		return view('backend.alumnos.create');
    }

    public function edit()
	{
		return view('backend.alumnos.edit');
    }

	public function show($id)
	{

		return view('backend.alumnos.show', ['alumnos' => Alumno::find($id)]);
		//return view('backend.alumnos.show', ['alumnos' => Alumno::find($id)]);
    }




    public function store(Request $request)
	{
		$input = $request->all();
		//dd( $input );

		$rules = [
			//'Foto' => 'mimes:jpeg,png,jpg',// max 150kb
			'Nombre' => 'required'
		
			//hacer validacion para tipo de datos

		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new Alumno($input);
			$b->save();
		}
		//return view('backend.alumnos.index');	
		Alert::success('Exito!', 'Alumno Registrado');  
		return view('backend.alumnos.index',['alumnos'=> Alumno::all()]);	
	}
	

	public function destroy($id)
    {
		Avance::where('alumno_id',$id)->delete();
		$s=Avance::where('alumno_id',$id)->get();
		Pago::where('alumno_id',$id)->delete();
		$s=Pago::where('alumno_id',$id)->get();
		$b =Alumno::find($id);
		$b->delete();
		Alert::success('Exito!', 'Alumno Eliminado');  
		return view('backend.alumnos.index',['alumnos'=> Alumno::all()]);

    }


}
