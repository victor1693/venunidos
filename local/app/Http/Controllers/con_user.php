<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use View;
use DB;
use Redirect;
class con_user extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View('register');
	}
	public function index_sesion()
	{
		return View('sesion');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		 
		if($_POST['p1']!=$_POST['p2'])
		{
			return Redirect('reguser?error=1');
		}
		$sql="
		INSERT INTO tbl_usuario 
		VALUES(null,'".$_POST['nombre']."','','','".$_POST['correo']."','".$_POST['p1']."','11111111')";
		
		 	try {
                DB::insert($sql);
                $sql="
				 SELECT id, nombre, correo, clave,COUNT(id) AS contador 
				 FROM tbl_usuario 
				 WHERE correo = '".$_POST['correo']."' AND clave ='".$_POST['p1']."'";
				 
				 	try {
		                 $datos=DB::select($sql);
		                 $request->session()->set('correo', $datos[0]->correo);
			             $request->session()->set('nombre', $datos[0]->nombre);
			             $request->session()->set('id', $datos[0]->id);
			             return Redirect('inicio');
		            } catch (QueryException $e) {
		            	return Redirect('error'); 
		            } 
            } catch (QueryException $e) {
            	return Redirect('error');
                //dd("Error: ".$e->getMessage());
            }

		//return Redirect('reguser?error=1');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function perfil()
	{
		dd('perfil');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
