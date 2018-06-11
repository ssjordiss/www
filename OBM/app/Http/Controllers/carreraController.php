<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\liga;
use App\ligaprincipal;
use App\equipo;
use App\equipoprincipal;
use App\partido;

class carreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $carrera = DB::select('SELECT l.jornada,lp.nombre as nombreliga,e.nombre as nombreequipo,e.img FROM equipos as e
          LEFT JOIN ligas AS l
          ON  e.id_liga= l.id
          LEFT JOIN ligaprincipals as lp
          ON l.id_liga = lp.id
          where l.status=1 and e.id='.Auth::user()->id);
          return view('carrera.index',['carrera'=>$carrera]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //crear liga
        $ligaprin = ligaprincipal::find($request->idliga);
        $liga = new liga;
        $liga->id_liga = $ligaprin->id;

        //Crear equipo
        if($liga->save()){
            $equipprin = equipoprincipal::find($request->idequip);
            $equip=new equipo;
            $equip->nombre=$equipprin->nombre;
            $equip->cuenta=$equipprin->cuenta;
            $equip->img=$equipprin->img;
            $equip->id_usuario=Auth::user()->id;
            $equip->id_liga=$liga->id_liga;
            $equip->id_equipo=$equipprin->id_equipo;
            if($liga->save()){

            }
        }


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
        //
    }
}
