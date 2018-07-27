<?php

require_once "../../controladores/bibliotecas.controlador.php";
require_once "../../modelos/bibliotecas.modelo.php";


$reporte = new ControladorBibliotecas();
$reporte -> ctrDescargarReporte();