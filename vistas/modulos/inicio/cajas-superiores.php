<?php

$item = null;
$valor = null;

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$activos = ControladorActivos::ctrMostrarActivos($item, $valor);
$totalActivos = count($activos);

$indices = ControladorIndices::ctrMostrarIndices($item, $valor);
$totalIndices = count($indices);

$lenguas = ControladorLenguas::ctrMostrarLenguas($item, $valor);
$totalLenguas = count($lenguas);

$salas = ControladorSalas::ctrMostrarSalas($item, $valor);
$totalSalas = count($salas);

$bibliotecas = ControladorBibliotecas::ctrMostrarBibliotecas($item, $valor);
$totalBibliotecas = count($bibliotecas);


$habitantes = ControladorLenguas::ctrSumaTotalHabitantes();

$hablantes = ControladorLenguas::ctrSumaTotalHablantes();

?>



<!--=====================================
CAJA SUPERIOR CATEGORIAS
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-green"><i class="icon ion-ios-list-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Categorías de activos de información</span>

      <span class="info-box-number"><?php echo number_format($totalCategorias); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR ACTIVOS
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-green"><i class="icon ion-android-laptop"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Activos de información</span>

      <span class="info-box-number"><?php echo number_format($totalActivos); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR INDICES
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-green"><i class="icon ion ion-stats-bars"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Índice de inf. clasificada y reservada</span>

      <span class="info-box-number"><?php echo number_format($totalIndices); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR SALAS
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-blue"><i class="icon ion-ios-film-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Salas de cine registradas</span>

      <span class="info-box-number"><?php echo number_format($totalSalas); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR LENGUAS NATIVAS
======================================-->


<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-orange"><i class="icon ion-ios-world-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Lenguas nativas de Colombia</span>

      <span class="info-box-number"><?php echo number_format($totalLenguas); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR LENGUAS NATIVAS - HABITANTES
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-orange"><i class="icon ion-ios-people-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Total habitantes de lenguas nativas</span>

      <span class="info-box-number"><?php echo number_format($habitantes["total"]); ?></span>

    </div>

  </div>

</div>



<!--=====================================
CAJA SUPERIOR LENGUAS NATIVAS - HABLANTES
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-yellow"><i class=" icon ion-ios-mic-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Total hablantes de lenguas nativas</span>

      <span class="info-box-number"><?php echo number_format($hablantes["total"]); ?></span>

    </div>

  </div>

</div>


<!--=====================================
CAJA SUPERIOR BIBLIOTECAS
======================================-->

<div class="col-lg-3 col-xs-12">

  <div class="info-box">

    <span class="info-box-icon bg-blue"><i class="icon ion-ios-book-outline"></i></span>

    <div class="info-box-content">

      <span class="info-box-text">Directorio nacional de bibliotecas</span>

      <span class="info-box-number"><?php echo number_format($totalBibliotecas); ?></span>

    </div>

  </div>

</div>
