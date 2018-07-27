<?php

require_once "../controladores/activos.controlador.php";
require_once "../modelos/activos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";


class TablaActivos{

 	/*=============================================
 	 MOSTRAR LA TABLA DE ACTIVOS
  	=============================================*/ 

	public function mostrarTablaActivos(){

		$item = null;
    	$valor = null;

  		$activos = ControladorActivos::ctrMostrarActivos($item, $valor);	
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($activos); $i++){

		  	/*=============================================
 	 		TRAEMOS LA CATEGORÍA
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $activos[$i]["id_categoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);


		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 
  			if(isset($_GET["perfilActivos"]) && $_GET["perfilActivos"] == "Especial"){

			  	$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarActivo' idActivo='".$activos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarActivo'><i class='fa fa-pencil'></i></button></div>";

			}else{

			  	$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarActivo' idActivo='".$activos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarActivo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarActivo' idActivo='".$activos[$i]["id"]."' id_activo='".$activos[$i]["id_activo"]."'><i class='fa fa-times'></i></button></div>"; 
			}

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$activos[$i]["id_activo"].'",
			      "'.$categorias["categoria"].'",
			      "'.$activos[$i]["nombre"].'",
			      "'.$activos[$i]["descripcion"].'",
			      "'.$activos[$i]["idioma"].'",
			      "'.$activos[$i]["medio"].'",
			      "'.$activos[$i]["formato"].'",
			      "'.$activos[$i]["infodisponible"].'",
			      "'.$activos[$i]["infopublicada"].'",
			      "'.$activos[$i]["ubicacion"].'",
			      "'.$activos[$i]["fecha"].'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}

/*=============================================
ACTIVAR TABLA DE ACTIVOS
=============================================*/ 
$activarActivos = new TablaActivos();
$activarActivos -> mostrarTablaActivos();



