<?php

$item = null;
$valor = null;


$activos = ControladorActivos::ctrMostrarActivos($item, $valor);

 ?>


<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title">Activos agregados recientemente</h3>

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

        <span class="label label-default pull-left">'.$activos[$i]["id"].'</span>

        <div class="product-info">

          <a href="activos" class="product-title">'.$activos[$i]["nombre"].' 

            <span class="product-description">'.$activos[$i]["id_activo"].'</span>
          
            <span class="label label-success pull-right">'.$activos[$i]["formato"].'</span> 

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="activos" class="uppercase">Ver todos</a>
  
  </div>

</div>
