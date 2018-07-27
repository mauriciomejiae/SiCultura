<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/activos.controlador.php";
require_once "controladores/indices.controlador.php";
require_once "controladores/lenguas.controlador.php";
require_once "controladores/salas.controlador.php";
require_once "controladores/bibliotecas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/activos.modelo.php";
require_once "modelos/indices.modelo.php";
require_once "modelos/lenguas.modelo.php";
require_once "modelos/salas.modelo.php";
require_once "modelos/bibliotecas.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();