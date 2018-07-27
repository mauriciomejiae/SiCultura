<?php

$item = null;
$valor = null;


$salas = ControladorSalas::ctrMostrarSalas($item, $valor);

 ?>


<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title">Salas de cine agregadas recientemente</h3>

    <div class="box-tools pull-right">

      <button type="button" class="btn btn-box-tool" data-widget="collapse">

        <i class="fa fa-minus"></i>

      </button>

      <button type="button" class="btn btn-box-tool" data-widget="remove">

        <i class="fa fa-times"></i>

      </button>

    </div>

  </div>
  
  <div class="box-body">

    <ul class="products-list product-list-in-box">

    <?php

    for($i = 0; $i <3; $i++){

      echo '<li class="item">

        <span class="label label-default pull-left">'.$salas[$i]["id"].'</span>

        <div class="product-info">

          <a href="salas" class="product-title">'.$salas[$i]["nombre"].'

            <span class="product-description">'.$salas[$i]["departamento"].'</span>

            <span class="label label-primary pull-right">'.$salas[$i]["ciudad"].'</span> 

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="salas" class="uppercase">Ver todos</a>
  
  </div>

</div>
