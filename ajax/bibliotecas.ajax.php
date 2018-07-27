<?php

require_once "../controladores/bibliotecas.controlador.php";
require_once "../modelos/bibliotecas.modelo.php";

class AjaxBibliotecas{

  /*=============================================
  EDITAR BIBLIOTECA
  =============================================*/ 

  public $idBiblioteca;

  public function ajaxEditarBiblioteca(){

    $item = "id";
    $valor = $this->idBiblioteca;

    $respuesta = ControladorBibliotecas::ctrMostrarBibliotecas($item, $valor);

    echo json_encode($respuesta);

  }

}


/*=============================================
OBJETO EDITAR BIBLIOTECA
=============================================*/ 

if(isset($_POST["idBiblioteca"])){

  $editarBiblioteca = new AjaxBibliotecas();
  $editarBiblioteca -> idBiblioteca = $_POST["idBiblioteca"];
  $editarBiblioteca -> ajaxEditarBiblioteca();

}


