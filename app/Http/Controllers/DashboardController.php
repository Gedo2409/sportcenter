<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index()
  {
  
    return view('backend.index');
  }
}
