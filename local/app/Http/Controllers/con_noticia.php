<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View;
use DB;
class con_noticia extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	return View('noticia');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

		 $datos=$request->all();
		  $sql="
		  INSERT INTO tbl_noticias  
		  VALUES(null,".session()->get('gestor_id').",".$datos["alcance"].",1,".$datos["categoria"].",'".$datos["titulo"]."','".$datos["detalle"]."','".$this->generarCodigo(8)."','".$datos["keywords"]."',null );";
			try {
                 $datos=DB::select($sql);  
                 /*$sql="SELECT t1.id_user as id,concat(t2.nombre,' ',t2.apellido) AS nombre,t1.tmp, t1.detalle FROM tbl_post t1 LEFT JOIN tbl_usuario t2 on t1.id_user = t2.id  WHERE t1.id_user=".session()->get('id')." ORDER BY t1.id DESC limit 0,1;";               
       
                 $datos=$datos=DB::select($sql);
                 echo json_encode($datos);*/
            } catch (QueryException $e) {
            	return Redirect('error');
                //dd("Error: ".$e->getMessage());
            }
	}

	public function detalle($id)
	{
		$sql="SELECT * FROM tbl_noticias WHERE url ='".$id."'";
			try {
                 $datos=DB::select($sql);  
                 $vista=View::make('detalle_noticia_gestor');
                 $vista->datos=$datos;
                 return $vista;
            } catch (QueryException $e) {
            	return Redirect('error'); 
            }
	}

	function generarCodigo($longitud, $tipo=0)
	{
	    //creamos la variable codigo
	    $codigo = "";
	    //caracteres a ser utilizados
	    $caracteres="0123456789";
	    //el maximo de caracteres a usar
	    $max=strlen($caracteres)-1;
	    //creamos un for para generar el codigo aleatorio utilizando parametros min y max
	    for($i=0;$i < $longitud;$i++)
	    {
	        $codigo.=$caracteres[rand(0,$max)];
	    }
	    //regresamos codigo como valor
	    return $codigo;
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
