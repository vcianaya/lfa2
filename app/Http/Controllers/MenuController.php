<?php
namespace lfa\Http\Controllers;

use View;
use Illuminate\Http\Request;
use experto\Http\Requests;
use lfa\Menu;
use Illuminate\Support\Facades\Auth;
use lfa\MenuItem;
use DB;

class MenuController extends Controller {

	public function index()
	{	
		$platos = DB::table('plato')->where('EST_PLA', '1')->get();
		return View::make('administrador.menu.menu',array('platos'=>$platos));
	}	
	public function __construct()
	{
		if(!\Session::has('cart'))\Session::put('cart', array());
	}

	public function show()
	{
		return \Session::get('cart');

	}
	public function listarmenu()
  	{
    
    $menus = Menu::get();
    return View::make('administrador.menu.listamenu',array('menus'=>$menus));
 	}

	public function menuLista()
	{	
		return View::make('administrador.menu.frmlistamenu');
	}

	public function quitarplato(Request $request)
	{
		$cart = \Session::get('cart');
	$id = $request->input('id'); 
	unset($cart[$id]); 	
	\Session::put('cart', $cart);
	}

	public function vaciarMenu()
	{
		\Session::forget('cart');
	}

	protected function guradarMemu(Request $request)
	{
		$menu= new Menu;
		$menu->NOM_MENU= $request->input('nom_menu');
		$menu->DES_MENU= $request->input('des_menu');
		$menu->CUENTA= Auth::user()->id;
		$menu->save();
			  
		$cart = \Session::get('cart');
		foreach ($cart as $plato) {
			$this->saveOrderItem($plato, $menu->ID_MENU);
		}
		\Session::forget('cart');
		return redirect()->route('menu');
	}

	protected function saveOrderItem($plato, $menu)
	{
	DB::table('menuitem')->insert(
    array('NOM_PLA' => $plato->NOM_PLA,
    	  'PRE_PLA' => $plato->PRE_PLA,
    	  'ID_PLA' => $plato->ID_PLA,
    	  'ID_MENU' => $menu,
    	  ));
	return redirect()->route('menu');
	}
}
