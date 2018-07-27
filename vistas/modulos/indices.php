<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar índice de información clasificada y reservada

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active">Índices</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarIndice">

          Agregar indice

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaIndices" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>ID</th>
           <th>Categoría de información</th>
           <th>Nombre o título de la información</th>
           <th>Idioma</th>
           <th>Medio de conservación o soporte</th>
           <th>Fecha de generación de la información</th>
           <th>Nombre del responsable de la producción de la información (área)</th>
           <th>Nombre del responsable de la información (área)</th>
           <th>Objeto legítimo de la excepción (ley 1712)</th>
           <th>Fundamento de la exclusión - Constitucional o legal</th>
           <th>Información específica con el carácter de reservada o clasificada - Jurídico</th>
           <th>¿Excepción total o parcial?</th>
           <th>Fecha de calificación</th>
           <th>Plazo de clasificación o reserva</th>
           <th>Fecha agregado al sistema</th>
           <th>Acciones</th>

          </tr>

        </thead>

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilIndices">

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR INDICE
======================================-->

<div id="modalAgregarIndice" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar indice</h4>

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

                <input type="text" class="form-control input-lg" id="nuevoId_indice" name="nuevoId_indice" placeholder="Ingresar ID del indice"required>

              </div>

            </div>


            <!-- ENTRADA PARA EL NOMBRE O TÍTULO DE LA DESCRIPCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar nombre o título de la información" required>

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

                  <option value="">-Selecionar medio de conservación o soporte-</option>

                  <option value="Electrónico / Digital">Electrónico / Digital</option>

                  <option value="Físico">Físico</option>

                  <option value="Físico - Electrónico / Digital">Físico - Electrónico / Digital</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA FECHA DE GENERACIÓN DE LA INFORMACIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFecha_generacion" id="nuevaFecha_generacion" placeholder="Ingresar la fecha de generación" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DEL RESPONSABLE DE LA PRODUCCIÓN DE LA INFORMACIÓN (ÁREA) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoResponsable1" id="nuevoResponsable1" placeholder="Ingresar nombre del responsable de la producción de la información (área)" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DEL RESPONSABLE DE LA INFORMACIÓN (ÁREA) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoResponsable2" id="nuevoResponsable2" placeholder="Ingresar nombre del responsable de la información (área)" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL OBJETO LEGÍTIMO DE LA EXCEPCIÓN (LEY 1712) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-legal"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoObjeto" id="nuevoObjeto" placeholder="Ingresar el objeto legítimo de la excepción (ley 1712)" required>

              </div>

            </div>


            <!-- ENTRADA PARA EL FUNDAMENTO DE LA EXCLUSIÓN - CONSTITUCIONAL O LEGAL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-legal"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoFundamento" id="nuevoFundamento" placeholder="Ingresar el fundamento de la exclusión - constitucional o legal" required>

              </div>

            </div>



            <!-- ENTRADA PARA LA INFORMACIÓN ESPECÍFICA CON EL CARÁCTER DE RESERVADA O CLASIFICADA – JURÍDICO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaEspecifica" id="nuevaEspecifica" placeholder="Ingresar la información específica con el carácter de reservada o clasificada - jurídico" required>

              </div>

            </div>



            <!-- ENTRADA PARA ¿EXCEPCIÓN TOTAL O PARCIAL? -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                 <select class="form-control input-lg" name="nuevaExcepcion" id="nuevaExcepcion" required>

                   <option value="">-Información excepción-</option>

                   <option value="Parcial">Parcial</option>
                   <option value="Total">Total</option>
                   <option value="N/A">N/A</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA LA FECHA DE CALIFICACIÓN-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                  <input type="text" class="form-control input-lg" name="nuevaFecha_calificacion" id="nuevaFecha_calificacion"placeholder="Ingresar fecha de calificación" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA EL PLAZO DE CLASIFICACIÓN O RESERVA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoPlazo"  id="nuevoPlazo" placeholder="Ingresar el plazo de clasificación o reserva" required>

              </div>

            </div>


          </div>

         </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar indice</button>

        </div>

      </form>

      <?php 

        $crearIndice = new ControladorIndices();
        $crearIndice -> ctrCrearIndice();

       ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR INDICE
======================================-->

<div id="modalEditarIndice" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar indice</h4>

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


            <!-- ENTRADA PARA EL ID ACTIVO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" id="editarId_indice" name="editarId_indice" readonly required>

              </div>

            </div>


            <!-- ENTRADA PARA EL NOMBRE O TÍTULO DE LA DESCRIPCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" placeholder="Ingresar nombre o título de la información" required>

              </div>

            </div>



             <!-- ENTRADA PARA EL IDIOMA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-language"></i></span>

                <input type="text" class="form-control input-lg" name="editarIdioma" id="editarIdioma" placeholder="Ingresar el idioma" required>

              </div>

            </div>


            <!-- ENTRADA PARA MEDIO DE CONSERVACIÓN-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarMedio" required>

                  <option id="editarMedio"></option>
                  <option value="">-Selecionar medio de conservación o soporte-</option>
                  <option value="Electrónico / Digital">Electrónico / Digital</option>
                  <option value="Físico">Físico</option>
                  <option value="Físico - Electrónico / Digital">Físico - Electrónico / Digital</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA FECHA DE GENERACIÓN DE LA INFORMACIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="editarFecha_generacion" id="editarFecha_generacion" placeholder="Ingresar la fecha de generación" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DEL RESPONSABLE DE LA PRODUCCIÓN DE LA INFORMACIÓN (ÁREA) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarResponsable1" id="editarResponsable1" placeholder="Ingresar nombre del responsable de la producción de la información (área)" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DEL RESPONSABLE DE LA INFORMACIÓN (ÁREA) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarResponsable2" id="editarResponsable2" placeholder="Ingresar nombre del responsable de la información (área)" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL OBJETO LEGÍTIMO DE LA EXCEPCIÓN (LEY 1712) -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-legal"></i></span>

                <input type="text" class="form-control input-lg" name="editarObjeto" id="editarObjeto" placeholder="Ingresar el objeto legítimo de la excepción (ley 1712)" required>

              </div>

            </div>


            <!-- ENTRADA PARA EL FUNDAMENTO DE LA EXCLUSIÓN - CONSTITUCIONAL O LEGAL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-legal"></i></span>

                <input type="text" class="form-control input-lg" name="editarFundamento" id="editarFundamento" placeholder="Ingresar el fundamento de la exclusión - constitucional o legal" required>

              </div>

            </div>



            <!-- ENTRADA PARA LA INFORMACIÓN ESPECÍFICA CON EL CARÁCTER DE RESERVADA O CLASIFICADA – JURÍDICO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarEspecifica" id="editarEspecifica" placeholder="Ingresar la información específica con el carácter de reservada o clasificada - jurídico" required>

              </div>

            </div>



            <!-- ENTRADA PARA ¿EXCEPCIÓN TOTAL O PARCIAL? -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-info"></i></span>

                 <select class="form-control input-lg" name="editarExcepcion" required>

                  <option id="editarExcepcion"></option>
                   <option value="">-Información excepción-</option>
                   <option value="Parcial">Parcial</option>
                   <option value="Total">Total</option>
                   <option value="N/A">N/A</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA LA FECHA DE CALIFICACIÓN-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                  <input type="text" class="form-control input-lg" name="editarFecha_calificacion" id="editarFecha_calificacion"placeholder="Ingresar fecha de calificación" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA EL PLAZO DE CLASIFICACIÓN O RESERVA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarPlazo"  id="editarPlazo" placeholder="Ingresar el plazo de clasificación o reserva" required>

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

        $editarIndice = new ControladorIndices();
        $editarIndice -> ctrEditarIndice();

       ?>

    </div>

  </div>

</div>

<?php

$eliminarIndice = new ControladorIndices();
$eliminarIndice -> ctrEliminarIndice();

?>      

