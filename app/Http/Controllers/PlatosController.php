<?php
namespace lfa\Http\Controllers;

use View;
use Illuminate\Http\Request;
use experto\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;

class PlatosController extends Controller {

	public function administrarPlatos(){ 
        
        return View::make('administrador.platos.platos');
    }

 	public function guardarPlato(Request $request)
	{
    $_plato = array();
    $_plato['NOM_PLA'] = $request->input('nom_pla');
    $_plato['DES_PLA'] = $request->input('des_pla');
    $_plato['PRE_PLA'] = $request->input('pre_pla');
    $_plato['STO_PLA'] = $request->input('sto_pla');
    $_plato['EST_PLA'] = '1';
    $insert = DB::table('plato')->insert($_plato);
    return json_encode(array('plato'=>$_plato));
	}

    public function eguardarPlato(Request $request)
  {
    $id = $request->input('id_pla');  
    $_plato = array();
     $_plato['NOM_PLA'] = $request->input('nom_pla');
    $_plato['DES_PLA'] = $request->input('des_pla');
    $_plato['PRE_PLA'] = $request->input('pre_pla');
    $_plato['STO_PLA'] = $request->input('sto_pla');
    DB::table('plato')->where('ID_PLA','=',$id)->update($_plato);   
    return json_encode(array('plato'=>$_plato));
  }

  public function agregarPlato()
  {
    
    return View::make('administrador.plato.frmagregarplato');
  }
  public function listarPlatos()
  {
    

    $platos = DB::table('plato')->where('EST_PLA', '1')->get();
    return View::make('administrador.plato.administrarplato',array('platos'=>$platos));
  }

   public function editar(Request $request){
        $id = $request->input('id');
        $_plato = DB::table('plato')->where('ID_PLA','=',$id)->first();        
        $_datos = array();
        $_datos['id_pla'] = $id;
        $_datos['nom_pla'] = $_plato->NOM_PLA;
        $_datos['des_pla'] = $_plato->DES_PLA; 
        $_datos['pre_pla'] = $_plato->PRE_PLA;        
        $_datos['sto_pla'] = $_plato->STO_PLA; 
        return View::make('administrador.plato.frmeditarplato',array('datos'=>$_datos));
    }
        public function eliminar(Request $request){
        $id = $request->input('idplato');
         $_plato = array();
         $_plato['EST_PLA']='0';
        DB::table('plato')->where('ID_PLA','=',$id)->update($_plato);   
    return json_encode(array('plato'=>$_plato));
}

}
