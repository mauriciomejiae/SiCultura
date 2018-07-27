<?php

require_once "../controladores/activos.controlador.php";
require_once "../modelos/activos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxActivos{

  /*=============================================
  EDITAR ACTIVO
  =============================================*/ 

  public $idActivo;

  public function ajaxEditarActivo(){

    $item = "id";
    $valor = $this->idActivo;

    $respuesta = ControladorActivos::ctrMostrarActivos($item, $valor);

    echo json_encode($respuesta);

  }

}


/*=============================================
OBJETO EDITAR ACTIVO
=============================================*/ 

if(isset($_POST["idActivo"])){

  $editarActivo = new AjaxActivos();
  $editarActivo -> idActivo = $_POST["idActivo"];
  $editarActivo -> ajaxEditarActivo();

}



