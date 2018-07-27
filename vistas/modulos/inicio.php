<div class="content-wrapper">

  <section class="content-header">
    
    <h1>

      Inicio
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Panel de control</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

      include "inicio/cajas-superiores.php";

    ?>

    </div> 

     <div class="row">
       
        <div class="col-lg-6">

          <?php
          
           include "inicio/activos-recientes.php";

          ?>

        </div>

        <div class="col-lg-6">

          <?php
          
           include "inicio/lenguas-recientes.php";

          ?>

        </div>

         <div class="col-lg-6">

          <?php
          
           include "inicio/indices-recientes.php";

          ?>

        </div>

        <div class="col-lg-6">

          <?php
          
          include "inicio/salas-recientes.php";

          ?>

        </div>

        <div class="col-lg-6">

          <?php
          
          include "inicio/bibliotecas-recientes.php";

          ?>

        </div>

     </div>

  </section>
 
</div>


