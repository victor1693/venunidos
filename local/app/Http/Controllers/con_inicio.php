<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View;
use DB;
class con_inicio extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

		 $datos=$request->all();
		$sql="INSERT INTO tbl_post (id_user, detalle) VALUES(".session()->get('id').",'".$datos['detalle']."' );";
			try {
                 $datos=DB::select($sql);  
                 $sql="SELECT t1.id_user as id,concat(t2.nombre,' ',t2.apellido) AS nombre,t1.tmp, t1.detalle FROM tbl_post t1 LEFT JOIN tbl_usuario t2 on t1.id_user = t2.id  WHERE t1.id_user=".session()->get('id')." ORDER BY t1.id DESC limit 0,1;";               
       
                 $datos=$datos=DB::select($sql);
                 echo json_encode($datos);
            } catch (QueryException $e) {
            	return Redirect('error');
                //dd("Error: ".$e->getMessage());
            }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function listar(Request $request)
	{
		 $datos=$request->all();
		try {
                  
                 $sql="SELECT t1.id_user AS id,concat(t2.nombre,' ',t2.apellido) AS nombre,t1.tmp, t1.detalle 
                 FROM tbl_post t1 
                 LEFT JOIN tbl_usuario t2 ON t1.id_user = t2.id 
                 ORDER BY t1.id 
                 DESC 
                 limit ".$datos['detalle']." ,10;";                 
                 $datos=$datos=DB::select($sql);
                 echo json_encode($datos);
            } catch (QueryException $e) {
            	return Redirect('error'); 
            }
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
