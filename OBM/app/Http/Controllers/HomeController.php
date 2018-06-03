<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\participa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function carrera(){
      $id=Auth::user()->id;

      $carrera=DB::SELECT('SELECT e.img,l.nombre as nombreliga,e.nombre as nombreequipo FROM participa AS p
        left join users as u
        ON u.id=p.id_usuario
		    LEFT JOIN ligas AS l
			  ON p.id_liga=l.id
        LEFT JOIN equipos AS e
        ON u.id=e.id_usuario
        and l.id=e.id_liga
        WHERE u.id=1');
      return view('carrera',['carrera'=>$carrera]);
    }
}
