<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
class con_manager extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View('manager');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function log( Request $request)
	{
		
		$datos="";
		 if(!isset($_POST['correo'])){return Redirect('reguser?error=correo');}
		 if(!isset($_POST['pass'])){return Redirect('reguser?error=pass');}
		 $sql="
		 SELECT id, nombre, correo, clave,COUNT(id) AS contador 
		 FROM tbl_gestores 
		 WHERE correo = '".$_POST['correo']."' AND clave ='".$_POST['pass']."'";
		 
		 	try {
                 $datos=DB::select($sql);
            } catch (QueryException $e) {
            	return Redirect('error');
                //dd("Error: ".$e->getMessage());
            }
          if($datos[0]->contador)
          {
          	$request->session()->set('gestor_correo', $datos[0]->correo);
            $request->session()->set('gestor_nombre', $datos[0]->nombre);
            $request->session()->set('gestor_id', $datos[0]->id);
            return Redirect('dash');
          }
          else
          {
          	 return Redirect('manager?v=false');
          }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function dash()
	{
		return view('dash');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function close(Request $request)
	{
		$request->session()->forget('gestor_id'); 
        return redirect('manager');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function noticias()
	{
		return view('noticias_gestor');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
