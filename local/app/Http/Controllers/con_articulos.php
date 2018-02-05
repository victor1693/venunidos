<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
class con_articulos extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function detalle($id)
	{
		$sql="SELECT * FROM tbl_articulos WHERE url ='".$id."'";
			try {
                 $datos=DB::select($sql);  
                 $vista=View::make('detalle_artiticulo_gestor');
                 $vista->datos=$datos;
                 return $vista;
            } catch (QueryException $e) {
            	return Redirect('error'); 
            }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create( Request $request)
	{
		 $datos=$request->all();
		  $sql="
		  INSERT INTO tbl_articulos  
		  VALUES(null,".session()->get('gestor_id').",".$datos["alcance"].",1,".$datos["categoria"].",'".$datos["titulo"]."','".$datos["detalle"]."','".$this->generarCodigo(8)."','".$datos["keywords"]."',null );";
			try {
                 $datos=DB::select($sql);  
                 echo "1"; 
            } catch (QueryException $e) {
            	return Redirect('error');
                //dd("Error: ".$e->getMessage());
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


}
