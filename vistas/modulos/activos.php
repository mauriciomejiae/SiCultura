<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar activos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active">Activos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarActivo">

          Agregar activo

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaActivos" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>ID Activo</th>
           <th>Categoría de información</th>
           <th>Nombre o título de la información</th>
           <th>Descripciónde la información</th>
           <th>Idioma</th>
           <th>Medio de conservación o soporte</th>
           <th>Formato</th>
           <th>Información Disponible</th>
           <th>Información Publicada</th>
           <th>Ubicación</th>
           <th>Fecha agregado al sistema</th>
           <th>Acciones</th>

          </tr>

        </thead>

       </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilActivos">

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR ACTIVO
======================================-->

<div id="modalAgregarActivo" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar activo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>

                  <option value="">Selecionar categoría</option>

                  <?php

                    $item  = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {

                      echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                    }

                  ?>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL ID ACTIVO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" id="nuevoId_activo" name="nuevoId_activo" placeholder="Ingresar ID del activo"required>

              </div>

            </div>


            <!-- ENTRADA PARA EL NOMBRE O TÍTULO DE LA DESCRIPCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar nombre o título de la información" required>

              </div>

            </div>


            <!-- ENTRADA PARA LA DESCRIPCIÓN DE LA INFORMACIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" id="nuevaDescripcion" placeholder="Ingresar la descripción de la información" required>

              </div>

            </div>


             <!-- ENTRADA PARA EL IDIOMA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-language"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoIdioma" id="nuevoIdioma" placeholder="Ingresar el idioma" required>

              </div>

            </div>


            <!-- ENTRADA PARA MEDIO DE CONSERVACIÓN-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevoMedio" id="nuevoMedio" required>

                  <option value="">Selecionar medio de conservación o soporte</option>

                  <option value="Electrónico / Digital">Electrónico / Digital</option>

                  <option value="Físico">Físico</option>

                  <option value="Físico - Electrónico / Digital">Físico - Electrónico / Digital</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL FORMATO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevoFormato" id="nuevoFormato"  required>

                  <option value="">Selecionar formato</option>

                  <option value="Base de datos">Base de datos</option>

                  <option value="Documentos gráficos">Documentos gráficos</option>

                  <option value="Físico">Físico</option>

                  <option value="Físico / Digital">Físico / Digital</option>

                  <option value="Hoja de cáculo">Hoja de cáculo</option>

                  <option value="Mixto">Mixto</option>

                  <option value="Portal">Portal</option>

                  <option value="Portal / Sistema de información">Portal / Sistema de información</option>

                  <option value="Presentación">Presentación</option>

                  <option value="Sistema de información">Sistema de información</option>

                  <option value="Sitio web">Sitio web</option>

                  <option value="Texto">Texto</option>

                  <option value="Vídeo">Vídeo</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA INFORMACIÓN DISPONIBLE -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                 <select class="form-control input-lg" name="nuevaInfodisponible" id="nuevaInfodisponible" required>

                   <option value="">Información disponible</option>

                   <option value="Si">SI</option>

                   <option value="NO">NO</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA INFORMACIÓN PUBLICADA-->

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                  <select class="form-control input-lg" name="nuevaInfopublicada" id="nuevaInfopublicada" required>

                    <option value="">Información publicada</option>

                    <option value="SI">SI</option>

                    <option value="NO">NO</option>

                  </select>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA LA UBICACION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaUbicacion"  id="nuevaUbicacion" placeholder="Ingresar la ubicación" required>

              </div>

            </div>


          </div>

         </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar activo</button>

        </div>

      </form>

      <?php 

        $crearActivo = new ControladorActivos();
        $crearActivo -> ctrCrearActivo();

       ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR ACTIVO
======================================-->

<div id="modalEditarActivo" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar activo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg"  name="editarCategoria"  readonly required>

                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL ID ACTIVO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" id="editarId_activo" name="editarId_activo" readonly required>

              </div>

            </div>


            <!-- ENTRADA PARA EL NOMBRE O TÍTULO DE LA DESCRIPCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre"  required>

              </div>

            </div>


            <!-- ENTRADA PARA LA DESCRIPCIÓN DE LA INFORMACIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion"required>

              </div>

            </div>


             <!-- ENTRADA PARA EL IDIOMA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-language"></i></span>

                <input type="text" class="form-control input-lg" name="editarIdioma" id="editarIdioma"required>

              </div>

            </div>


            <!-- ENTRADA PARA MEDIO DE CONSERVACIÓN-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarMedio" required>

                  <option id="editarMedio"></option>

                  <option value="Electrónico / Digital">Electrónico / Digital</option>

                  <option value="Físico">Físico</option>

                  <option value="Físico - Electrónico / Digital">Físico - Electrónico / Digital</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL FORMATO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarFormato" required>

                  <option id="editarFormato"></option>

                  <option value="Base de datos">Base de datos</option>

                  <option value="Documentos gráficos">Documentos gráficos</option>

                  <option value="Físico">Físico</option>

                  <option value="Físico / Digital">Físico / Digital</option>

                  <option value="Hoja de cáculo">Hoja de cáculo</option>

                  <option value="Mixto">Mixto</option>

                  <option value="Portal">Portal</option>

                  <option value="Portal / Sistema de información">Portal / Sistema de información</option>

                  <option value="Presentación">Presentación</option>

                  <option value="Sistema de información">Sistema de información</option>

                  <option value="Sitio web">Sitio web</option>

                  <option value="Texto">Texto</option>

                  <option value="Vídeo">Vídeo</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA INFORMACIÓN DISPONIBLE -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                 <select class="form-control input-lg" name="editarInfodisponible"  required>

                   <option id="editarInfodisponible"></option>

                   <option value="Si">SI</option>

                   <option value="NO">NO</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA INFORMACIÓN PUBLICADA-->

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                  <select class="form-control input-lg" name="editarInfopublicada" required>

                    <option id="editarInfopublicada"></option>

                    <option value="SI">SI</option>

                    <option value="NO">NO</option>

                  </select>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA LA UBICACION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="editarUbicacion"  id="editarUbicacion" required>

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

      $editarActivo = new ControladorActivos();
      $editarActivo -> ctrEditarActivo();

      ?>      

    </div>

  </div>

</div>

<?php

$eliminarActivo = new ControladorActivos();
$eliminarActivo -> ctrEliminarActivo();

?>      

