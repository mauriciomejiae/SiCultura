<?php

$item = null;
$valor = null;


$bibliotecas = ControladorBibliotecas::ctrMostrarBibliotecas($item, $valor);

 ?>


<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title"> Bibliotecas agregadas recientemente</h3>

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

        <span class="label label-default pull-left">'.$bibliotecas[$i]["id"].'</span>

        <div class="product-info">

          <a href="bibliotecas" class="product-title">'.$bibliotecas[$i]["nombre"].' 

            <span class="product-description">'.$bibliotecas[$i]["codigo"].'</span>
          
            <span class="label label-primary pull-right">'.$bibliotecas[$i]["estado"].'</span> 

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="bibliotecas" class="uppercase">Ver todos</a>
  
  </div>

</div>
