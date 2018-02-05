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
		 SELECT id, nombre,pais, correo, clave,COUNT(id) AS contador 
		 FROM tbl_gestores 
		 WHERE correo = '".$_POST['correo']."' AND clave ='".$_POST['pass']."'";
		 
		 	try {
                $datos=DB::select($sql);
                if($datos[0]->contador)
		          { 
		          	$request->session()->set('gestor_correo', $datos[0]->correo);
		            $request->session()->set('gestor_nombre', $datos[0]->nombre);
		            $request->session()->set('gestor_id', $datos[0]->id);
		            $request->session()->set('gestor_pais', $datos[0]->pais);
		            return Redirect('dash');
		          }
		          else
		          {
		          	 return Redirect('manager?v=false');
		          }
               
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
	public function dash()
	{
		
			try {
					$sqlNoticial="SELECT count(id) as cantidad FROM tbl_noticias WHERE id_usuario = ".session()->get('gestor_id')." ORDER BY tmp DESC";
		            $datosNoticias=DB::select($sqlNoticial);

		            $vista=View::make('dash');
                 	$vista->datos=$datosNoticias;
                 	return $vista;
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

		try {
					$sqlNoticial="SELECT * FROM tbl_noticias WHERE id_usuario = ".session()->get('gestor_id')." AND estado <> 3 ORDER BY tmp DESC";
		            $datosNoticias=DB::select($sqlNoticial);

		            $cantidadNoticias="SELECT count(id) as cantidad FROM tbl_noticias WHERE id_usuario = ".session()->get('gestor_id')." AND estado <> 3 ORDER BY tmp DESC";
		            $cantidad=DB::select($cantidadNoticias);


		            $vista=View::make('noticias_gestor');
                 	$vista->datos=$datosNoticias;
                 	$vista->cantidad=$cantidad; 
                 	return $vista;
			} catch (QueryException $e) {
				return Redirect('error');
			} 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function estados()
	{
		try {
					$sql="UPDATE tbl_noticias SET estado = ".$_POST['valor']." WHERE id= ".$_POST['identificador']." ";
		            $datos=DB::select($sql);
  					echo $_POST['valor'];
			} catch (QueryException $e) {
					echo 0;
			}  
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
