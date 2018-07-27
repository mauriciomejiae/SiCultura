<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar lenguas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      
      <li class="active">Lenguas nativas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarLengua">
          
          Agregar lengua

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Descripción</th>
           <th>Departamento</th>
           <th>Familia</th>
           <th>Habitantes</th>
           <th>Hablantes</th> 
           <th>Vitalidad</th>
           <th>Fecha de ingreso</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $lenguas = ControladorLenguas::ctrMostrarLenguas($item, $valor);

          foreach ($lenguas as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["descripcion"].'</td>
                    <td>'.$value["departamento"].'</td>
                    <td>'.$value["familia"].'</td>
                    <td>'.number_format($value["habitantes"],0).'</td>   
                    <td>'.number_format($value["hablantes"],0).'</td>          
                    <td>'.$value["vitalidad"].'</td>
                    <td>'.$value["fecha"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarLengua" data-toggle="modal" data-target="#modalEditarLengua" idLengua="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                        if($_SESSION["perfil"] == "Administrador"){

                        echo '<button class="btn btn-danger btnEliminarLengua" idLengua="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                      }

                      echo '</div>  

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
MODAL AGREGAR LENGUA
======================================-->

<div id="modalAgregarLengua" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar lengua</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>


            <!-- ENTRADA PARA LA DESCRIPCION  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

              </div>

            </div>


            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevoDepartamento" id="nuevoDepartamento"  required>

                  <option value="">Selecionar departamento</option>

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


            <!-- ENTRADA PARA FAMILIA LINGÜISTICA  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFamilia" placeholder="Ingresar familia lingüistica" required>

              </div>

            </div>


            <!-- ENTRADA PARA NUMERO DE HABITANTES  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoHabitantes" min="0" placeholder="Ingresar número de habitantes" required>

              </div>

            </div>


            <!-- ENTRADA PARA NUMERO DE HABLANTES  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoHablantes" min="0" placeholder="Ingresar número de hablantes" required>

              </div>

            </div>


            <!-- ENTRADA PARA VITALIDAD-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevaVitalidad" id="nuevaVitalidad" required>

                  <option value="">Selecionar vitalidad</option>

                  <option value="En peligro">En peligro</option>
                  <option value="En peligro de extinción">En peligro de extinción</option>
                  <option value="En situación crítica">En situación crítica</option>
                  <option value="Vulnerable">Vulnerable</option>

                </select>

              </div>

            </div>


  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar lengua</button>

        </div>

      </form>


      <?php

        $crearLengua = new ControladorLenguas();
        $crearLengua -> ctrCrearLengua();

      ?>


    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR LENGUA
======================================-->

<div id="modalEditarLengua" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar lengua</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" required>
                <input type="hidden" id="idLengua" name="idLengua">

              </div>

            </div>


            <!-- ENTRADA PARA LA DESCRIPCION  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion"  required>

              </div>

            </div>


            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarDepartamento" required>

                  <option id="editarDepartamento"></option>

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


            <!-- ENTRADA PARA FAMILIA LINGÜISTICA  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <input type="text" class="form-control input-lg" name="editarFamilia" id="editarFamilia" required>

              </div>

            </div>


            <!-- ENTRADA PARA NUMERO DE HABITANTES  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span> 

                <input type="number" class="form-control input-lg" name="editarHabitantes" min="0"  id="editarHabitantes" required>

              </div>

            </div>


            <!-- ENTRADA PARA NUMERO DE HABLANTES  -->
            
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span> 

                <input type="number" class="form-control input-lg" name="editarHablantes" min="0"  id="editarHablantes" required>

              </div>

            </div>


            <!-- ENTRADA PARA VITALIDAD-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarVitalidad" required>

                  <option id="editarVitalidad"></option>

                  <option value="En peligro">En peligro</option>
                  <option value="En peligro de extinción">En peligro de extinción</option>
                  <option value="En situación crítica">En situación crítica</option>
                  <option value="Vulnerable">Vulnerable</option>

                </select>

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

        $editarLengua = new ControladorLenguas();
        $editarLengua -> ctrEditarLengua();

      ?>


    </div>

  </div>

</div>

<?php

  $eliminarLengua = new ControladorLenguas();
  $eliminarLengua -> ctrEliminarLengua();

?>