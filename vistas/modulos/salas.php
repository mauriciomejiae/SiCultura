<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar salas de cine
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Administrar salas de cine</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSala">
          
          Agregar sala

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Departamento</th>
           <th>Ciudad</th>
           <th>Nombre del exhibidor</th>
           <th>Nombre</th>
           <th>Dirección</th>
           <th>Fecha de ingreso</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $salas = ControladorSalas::ctrMostrarSalas($item, $valor);

          foreach ($salas as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>
                    <td>'.$value["departamento"].'</td>
                    <td class="text-uppercase">'.$value["ciudad"].'</td>
                    <td>'.$value["exhibidor"].'</td>
                    <td>'.$value["nombre"].'</td>         
                    <td>'.$value["direccion"].'</td>
                    <td>'.$value["fecha"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarSala" data-toggle="modal" data-target="#modalEditarSala" idSala="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                        if($_SESSION["perfil"] == "Administrador"){

                          echo'<button class="btn btn-danger btnEliminarSala" idSala="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                        }

                      echo'</div>  

                    </td>

                  </tr>';
          
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR SALA
======================================-->

<div id="modalAgregarSala" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar sala</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevoDepartamento" id="nuevoDepartamento"  required>

                  <option value="">-Selecionar departamento del complejo-</option>

                  <option value="AMAZONAS">AMAZONAS</option>
                  <option value="ANTIOQUIA">ANTIOQUIA</option>
                  <option value="ARAUCA">ARAUCA</option>
                  <option value="BOLIVAR">BOLIVAR</option>
                  <option value="BOYACA">BOYACA</option>
                  <option value="CALDAS">CALDAS</option>
                  <option value="CAQUETA">CAQUETA</option>
                  <option value="CASANARE">CASANARE</option>
                  <option value="CAUCA">CAUCA</option>
                  <option value="CESAR">CESAR</option>
                  <option value="CHOCO">CHOCO</option>
                  <option value="CORDOBA">CORDOBA</option>
                  <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                  <option value="GUAINIA">GUAINIA</option>
                  <option value="GUAJIRA">GUAJIRA</option>
                  <option value="GUAVIARE">GUAVIARE</option>
                  <option value="HUILA">HUILA</option>
                  <option value="MAGDALENA">MAGDALENA</option>
                  <option value="META">META</option>
                  <option value="N SANTANDER">N SANTANDER</option>
                  <option value="NARINO">NARINO</option>
                  <option value="PUTUMAYO">PUTUMAYO</option>
                  <option value="RISARALDA">RISARALDA</option>
                  <option value="SAN ANDRES">SAN ANDRES</option>
                  <option value="SANTANDER">SANTANDER</option>
                  <option value="SUCRE">SUCRE</option>
                  <option value="TOLIMA">TOLIMA</option>
                  <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                  <option value="VAUPES">VAUPES</option>
                  <option value="VICHADA">VICHADA</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA CIUDAD  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCiudad" id="nuevaCiudad" placeholder="Ingresar ciudad del complejo" required>

              </div>

            </div>




            <!-- ENTRADA PARA EL EXHIBIDOR  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-industry"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoExhibidor" id="nuevoExhibidor"  placeholder="Ingresar nombre del exhibidor" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar nombre del complejo" required>

              </div>

            </div>




            <!-- ENTRADA PARA LA DIRECCIÓN  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-signs"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" id="nuevaDireccion" placeholder="Ingresar dirección del complejo" required>

              </div>

            </div>


 
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar sala</button>

        </div>

      </form>


      <?php

        $crearSala = new ControladorSalas();
        $crearSala -> ctrCrearSala();

      ?>


    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR SALA
======================================-->

<div id="modalEditarSala" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar sala</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarDepartamento" required>

                  <option id="editarDepartamento"></option>
                  <option value="">-Selecionar departamento del complejo-</option>
                  <option value="AMAZONAS">AMAZONAS</option>
                  <option value="ANTIOQUIA">ANTIOQUIA</option>
                  <option value="ARAUCA">ARAUCA</option>
                  <option value="BOLIVAR">BOLIVAR</option>
                  <option value="BOYACA">BOYACA</option>
                  <option value="CALDAS">CALDAS</option>
                  <option value="CAQUETA">CAQUETA</option>
                  <option value="CASANARE">CASANARE</option>
                  <option value="CAUCA">CAUCA</option>
                  <option value="CESAR">CESAR</option>
                  <option value="CHOCO">CHOCO</option>
                  <option value="CORDOBA">CORDOBA</option>
                  <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                  <option value="GUAINIA">GUAINIA</option>
                  <option value="GUAJIRA">GUAJIRA</option>
                  <option value="GUAVIARE">GUAVIARE</option>
                  <option value="HUILA">HUILA</option>
                  <option value="MAGDALENA">MAGDALENA</option>
                  <option value="META">META</option>
                  <option value="N SANTANDER">N SANTANDER</option>
                  <option value="NARINO">NARINO</option>
                  <option value="PUTUMAYO">PUTUMAYO</option>
                  <option value="RISARALDA">RISARALDA</option>
                  <option value="SAN ANDRES">SAN ANDRES</option>
                  <option value="SANTANDER">SANTANDER</option>
                  <option value="SUCRE">SUCRE</option>
                  <option value="TOLIMA">TOLIMA</option>
                  <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                  <option value="VAUPES">VAUPES</option>
                  <option value="VICHADA">VICHADA</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA CIUDAD  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCiudad" id="editarCiudad" placeholder="Ingresar ciudad del complejo" required>

              </div>

            </div>




            <!-- ENTRADA PARA EL EXHIBIDOR  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-industry"></i></span> 

                <input type="text" class="form-control input-lg" name="editarExhibidor" id="editarExhibidor" placeholder="Ingresar nombre del exhibidor" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" placeholder="Ingresar nombre del complejo" required>

                <input type="hidden" id="idSala" name="idSala">

              </div>

            </div>




            <!-- ENTRADA PARA LA DIRECCIÓN  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-signs"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" placeholder="Ingresar dirección del complejo" required>

              </div>

            </div>


  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>


      <?php

      $editarSala = new ControladorSalas();
      $editarSala -> ctrEditarSala();

      ?>


    </div>

  </div>

</div>

<?php

  $eliminarSala = new ControladorSalas();
  $eliminarSala -> ctrEliminarSala();

?>