<?php

require_once "../controladores/indices.controlador.php";
require_once "../modelos/indices.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxIndices{

  /*=============================================
  EDITAR INDICE
  =============================================*/ 

  public $idIndice;

  public function ajaxEditarIndice(){

    $item = "id";
    $valor = $this->idIndice;

    $respuesta = ControladorIndices::ctrMostrarIndices($item, $valor);

    echo json_encode($respuesta);

  }

}


/*=============================================
OBJETO EDITAR INDICE
=============================================*/ 

if(isset($_POST["idIndice"])){

  $editarIndice = new AjaxIndices();
  $editarIndice -> idIndice = $_POST["idIndice"];
  $editarIndice -> ajaxEditarIndice();

}


