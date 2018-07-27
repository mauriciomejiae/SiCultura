<?php

require_once "../controladores/lenguas.controlador.php";
require_once "../modelos/lenguas.modelo.php";

class AjaxLenguas{

	/*=============================================
	EDITAR LENGUA
	=============================================*/	

	public $idLengua;

	public function ajaxEditarLengua(){

		$item = "id";
		$valor = $this->idLengua;

		$respuesta = ControladorLenguas::ctrMostrarLenguas($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR LENGUA
=============================================*/	

if(isset($_POST["idLengua"])){

	$lengua = new AjaxLenguas();
	$lengua -> idLengua = $_POST["idLengua"];
	$lengua -> ajaxEditarLengua();

}