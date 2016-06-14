<?php

namespace lfa\Http\Controllers;

use Illuminate\Http\Request;
use lfa\Persona;
use lfa\Cuenta;
use lfa\Http\Requests;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
    	$cuenta= new Cuenta;
    	$cuenta->NICK=$request->input('nic_usu');
    	$cuenta->password=bcrypt($request->input('password'));
    	$cuenta->NIVEL=0;
    	$cuenta->save();
    	$persona = new Persona;
    	$persona->CI_PER= $request->input('ci_usu');
    	$persona->NOM_PER= $request->input('nom_usu');
    	$persona->APP_PER= $request->input('apa_usu');
    	$persona->APM_PER= $request->input('ama_usu');
    	$persona->TEL_PER= $request->input('tel_usu');
    	$persona->EMA_PER= $request->input('ema_usu');
    	$persona->DIR_PER= $request->input('dir_usu');
    	$persona->FEC_NAC= $request->input('fec_usu');
    	$persona->CUENTA= $cuenta->id;
    	$persona->save();
    	dd($persona);	
    	return redirect()->route('login');
    }
}
