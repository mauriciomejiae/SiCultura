<?php

$item = null;
$valor = null;


$indices = ControladorIndices::ctrMostrarIndices($item, $valor);

 ?>


<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title"> Índices agregados recientemente</h3>

    <div class="box-tools pull-right>

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

        <span class="label label-default pull-left">'.$indices[$i]["id"].'</span>

        <div class="product-info">

          <a href="indices" class="product-title">'.$indices[$i]["nombre"].' 

            <span class="product-description">'.$indices[$i]["id_indice"].'</span>
          
            <span class="label label-success pull-right">'.$indices[$i]["medio"].'</span> 

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="indices" class="uppercase">Ver todos</a>
  
  </div>

</div>
