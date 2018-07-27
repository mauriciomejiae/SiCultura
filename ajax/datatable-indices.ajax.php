<?php

require_once "../controladores/indices.controlador.php";
require_once "../modelos/indices.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";


class TablaIndices{

 	/*=============================================
 	 MOSTRAR LA TABLA DE INDICES
  	=============================================*/ 

	public function mostrarTablaIndices(){

		$item = null;
    	$valor = null;

  		$indices = ControladorIndices::ctrMostrarIndices($item, $valor);	
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($indices); $i++){

		  	/*=============================================
 	 		TRAEMOS LA CATEGORÍA
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $indices[$i]["id_categoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);


		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilIndices"]) && $_GET["perfilIndices"] == "Especial"){

  				$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarIndice' idIndice='".$indices[$i]["id"]."' data-toggle='modal' data-target='#modalEditarIndice'><i class='fa fa-pencil'></i></button></div>"; 
  			}else{

  				$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarIndice' idIndice='".$indices[$i]["id"]."' data-toggle='modal' data-target='#modalEditarIndice'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarIndice' idIndice='".$indices[$i]["id"]."' id_indice='".$indices[$i]["id_indice"]."'><i class='fa fa-times'></i></button></div>"; 
  			}

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$indices[$i]["id_indice"].'",
			      "'.$categorias["categoria"].'",
			      "'.$indices[$i]["nombre"].'",
			      "'.$indices[$i]["idioma"].'",
			      "'.$indices[$i]["medio"].'",
			      "'.$indices[$i]["fecha_generacion"].'",
			      "'.$indices[$i]["responsable1"].'",
			      "'.$indices[$i]["responsable2"].'",
			      "'.$indices[$i]["objeto"].'",
			      "'.$indices[$i]["fundamento"].'",
			      "'.$indices[$i]["especifica"].'",
			      "'.$indices[$i]["excepcion"].'",
			      "'.$indices[$i]["fecha_calificacion"].'",
			      "'.$indices[$i]["plazo"].'",
			      "'.$indices[$i]["fecha"].'",
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
ACTIVAR TABLA DE INDICES
=============================================*/ 
$activarIndices = new TablaIndices();
$activarIndices -> mostrarTablaIndices();



