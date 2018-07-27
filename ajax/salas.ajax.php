<?php

require_once "../controladores/salas.controlador.php";
require_once "../modelos/salas.modelo.php";

class AjaxSalas{

	/*=============================================
	EDITAR SALA
	=============================================*/	

	public $idSala;

	public function ajaxEditarSala(){

		$item = "id";
		$valor = $this->idSala;

		$respuesta = ControladorSalas::ctrMostrarSalas($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR SALA
=============================================*/	

if(isset($_POST["idSala"])){

	$sala = new AjaxSalas();
	$sala -> idSala = $_POST["idSala"];
	$sala -> ajaxEditarSala();

}