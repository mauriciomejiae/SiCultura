<?php

$item = null;
$valor = null;


$lenguas = ControladorLenguas::ctrMostrarLenguas($item, $valor);

 ?>


<div class="box box-warning">

  <div class="box-header with-border">

    <h3 class="box-title">Lenguas nativas agregadas recientemente</h3>

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

        <span class="label label-default pull-left">'.$lenguas[$i]["id"].'</span>

        <div class="product-info">

          <a href="lenguas" class="product-title">'.$lenguas[$i]["nombre"].'

            <span class="product-description">'.$lenguas[$i]["departamento"].'</span>

            <span class="label label-warning pull-right">'.$lenguas[$i]["vitalidad"].'</span> 

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="lenguas" class="uppercase">Ver todos</a>
  
  </div>

</div>
