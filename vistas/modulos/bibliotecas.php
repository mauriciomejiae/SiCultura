<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar directorio de la red nacional de bibliotecas públicas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active">Bibliotecas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button  class="btn btn-primary "style="margin-top: 5px" data-toggle="modal" data-target="#modalAgregarBiblioteca"><i class="fa fa-plus-circle"></i>  Agregar biblioteca</button>

        <!--=====================================
        DESCARGAR REPORTE EXCEL
        ======================================-->

        <?php

          if($_SESSION["perfil"] == "Administrador"){

            echo'<a href="vistas/modulos/descargar-reporte.php?reporte=reporte"><button class="btn btn-success" style="margin-top: 5px"><i class="fa fa-download"></i>  Exportar a Excel</button></a>';
          }

        ?>


      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaBibliotecas" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Código DANE</th>
           <th>Departamento</th>
           <th>Municipio</th>
           <th>Centro poblado</th>
           <th>Naturaleza de la biblioteca</th>
           <th>Tipo de biblioteca</th>
           <th>Nombre de la biblioteca</th>
           <th>Dirección de la biblioteca</th>
           <th>Barrio</th>
           <th>Télefonos de contacto</th>
           <th>Extensión</th>
           <th>Fax</th>
           <th>Página web de la biblioteca</th>
           <th>Estado de la biblioteca</th>
           <th>Georeferencia</th>
           <th>Fecha agregado al sistema</th>
           <th>Acciones</th>

          </tr>

        </thead>

       </table>
       
       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilBibliotecas">

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR BIBLIOTECA
======================================-->

<div id="modalAgregarBiblioteca" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar biblioteca</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA EL CODIGO DANE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="number" min="0" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar el Código DANE"required>

              </div>

            </div>


            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="nuevoDepartamento" id="nuevoDepartamento"required>

                  <option value="">-Selecionar departamento-</option>

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


            <!-- ENTRADA PARA EL MUNICIPIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoMunicipio" id="nuevoMunicipio" placeholder="Ingresar municipio" required>

              </div>

            </div>



             <!-- ENTRADA PARA EL CENTRO POBLADO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCentropoblado" id="nuevoCentropoblado" placeholder="Ingresar el centro poblado" required>

              </div>

            </div>



            <!-- ENTRADA PARA LA NATURALEZA DE LA BIBLIOTECA -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                 <select class="form-control input-lg" name="nuevaNaturaleza" id="nuevaNaturaleza" required>

                   <option value="">-Seleccione naturaleza-</option>

                   <option value="COMUNITARIA">COMUNITARIA</option>
                   <option value="ESTATAL">ESTATAL</option>
                   <option value="PRIVADA">PRIVADA</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL TIPO DE BIBIOTECA-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                 <select class="form-control input-lg" name="nuevoTipo" id="nuevoTipo" required>

                   <option value="">-Seleccione tipo-</option>

                   <option value="CONSEJO COMUNITARIO (TCCN)">CONSEJO COMUNITARIO (TCCN)</option>
                   <option value="DEPARTAMENTAL">DEPARTAMENTAL</option>
                   <option value="MUNICIPAL">MUNICIPAL</option>
                   <option value="RESGUARDO INDÍGENA">RESGUARDO INDÍGENA</option>
                   <option value="RURAL">RURAL</option>

                 </select>

                </div>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DE LA BIBLIOTECA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar el nombre de la biblioteca" required>

              </div>

            </div>




            <!-- ENTRADA PARA LA DIRECCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" id="nuevaDireccion" placeholder="Ingresar la dirección" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL BARRIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoBarrio" id="nuevoBarrio" placeholder="Ingresar el barrio" required>

              </div>

            </div>



            <!-- ENTRADA PARA TELEFONOS DE CONTACTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefonos" id="nuevoTelefonos" placeholder="Ingresar télefonos de contacto" required>

              </div>

            </div>


            <!-- ENTRADA PARA LA EXTENSION -->

            <div class="form-group row">

              <div class="col-xs-6">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="nuevaExtension" id="nuevaExtension" placeholder="Ingresar la extensión">

              </div>

             </div>

             <!-- ENTRADA PARA EL FAX-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-fax"></i></span>

                  <input type="number" min="0" class="form-control input-lg" name="nuevoFax" id="nuevoFax" placeholder="Ingresar fax">

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA LA PAGINA WEB DE LA BIBLIOTECA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaPagina" id="nuevaPagina" placeholder="Ingresar página web de la biblioteca">

              </div>

            </div>



            <!-- ENTRADA PARA EL ESTADO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <select class="form-control input-lg" name="nuevoEstado" id="nuevoEstado"  required>

                  <option value="">-Selecionar estado-</option>

                  <option value="ABIERTA">ABIERTA</option>
                  <option value="CERRADA TEMPORALMENTE">CERRADA TEMPORALMENTE</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA GEOREFERENCIA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaGeoreferencia"  id="nuevaGeoreferencia" placeholder="Ingresar georeferencia" required>

              </div>

            </div>


          </div>

         </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar biblioteca</button>

        </div>

      </form>

      <<?php 

      $crearBiblioteca = new ControladorBibliotecas();
      $crearBiblioteca -> ctrCrearBiblioteca();

      ?> 

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR BIBLIOTECA
======================================-->


<div id="modalEditarBiblioteca" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar biblioteca</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA EL CODIGO DANE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="number" min="0" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>



            <!-- ENTRADA PARA EL DEPARTAMENTO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-list"></i></span>

                <select class="form-control input-lg" name="editarDepartamento" required>

                  <option id="editarDepartamento"></option>
                  <option value="">-Selecionar departamento-</option>

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


            <!-- ENTRADA PARA EL MUNICIPIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarMunicipio" id="editarMunicipio" placeholder="Ingresar municipio" required>

              </div>

            </div>



             <!-- ENTRADA PARA EL CENTRO POBLADO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarCentropoblado" id="editarCentropoblado" placeholder="Ingresar el centro poblado" required>

              </div>

            </div>



            <!-- ENTRADA PARA LA NATURALEZA DE LA BIBLIOTECA -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                 <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                 <select class="form-control input-lg" name="editarNaturaleza"  required>

                   <option id="editarNaturaleza"></option>
                   <option value="">-Seleccione naturaleza-</option>

                   <option value="COMUNITARIA">COMUNITARIA</option>
                   <option value="ESTATAL">ESTATAL</option>
                   <option value="PRIVADA">PRIVADA</option>

                 </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL TIPO DE BIBIOTECA-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                 <select class="form-control input-lg" name="editarTipo"  required>

                   <option id="editarTipo"></option>
                   <option value="">-Seleccione tipo-</option>

                   <option value="CONSEJO COMUNITARIO (TCCN)">CONSEJO COMUNITARIO (TCCN)</option>
                   <option value="DEPARTAMENTAL">DEPARTAMENTAL</option>
                   <option value="MUNICIPAL">MUNICIPAL</option>
                   <option value="RESGUARDO INDÍGENA">RESGUARDO INDÍGENA</option>
                   <option value="RURAL">RURAL</option>

                 </select>

                </div>

              </div>

            </div>



            <!-- ENTRADA PARA EL NOMBRE DE LA BIBLIOTECA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" placeholder="Ingresar el nombre de la biblioteca" required>

              </div>

            </div>




            <!-- ENTRADA PARA LA DIRECCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" placeholder="Ingresar la dirección" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL BARRIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <input type="text" class="form-control input-lg" name="editarBarrio" id="editarBarrio" placeholder="Ingresar el barrio" required>

              </div>

            </div>



            <!-- ENTRADA PARA TELEFONOS DE CONTACTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="editarTelefonos" id="editarTelefonos" placeholder="Ingresar télefonos de contacto" required>

              </div>

            </div>


            <!-- ENTRADA PARA LA EXTENSION -->

            <div class="form-group row">

              <div class="col-xs-6">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="editarExtension" id="editarExtension" placeholder="Ingresar la extensión">

              </div>

             </div>

             <!-- ENTRADA PARA EL FAX-->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-fax"></i></span>

                  <input type="number" min="0" class="form-control input-lg" name="editarFax" id="editarFax" placeholder="Ingresar fax">

                </div>

              </div>

            </div>


            <!-- ENTRADA PARA LA PAGINA WEB DE LA BIBLIOTECA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg" name="editarPagina" id="editarPagina" placeholder="Ingresar página web de la biblioteca">

              </div>

            </div>



            <!-- ENTRADA PARA EL ESTADO-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <select class="form-control input-lg" name="editarEstado" required>

                  <option  id="editarEstado"></option>
                  <option value="">-Selecionar estado-</option>

                  <option value="ABIERTA">ABIERTA</option>
                  <option value="CERRADA TEMPORALMENTE">CERRADA TEMPORALMENTE</option>

                </select>

              </div>

            </div>



            <!-- ENTRADA PARA LA GEOREFERENCIA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="editarGeoreferencia"  id="editarGeoreferencia" placeholder="Ingresar georeferencia" required>

              </div>

            </div>


          </div>

         </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar biblioteca</button>

        </div>

      </form>

      <?php 

      $editarBiblioteca = new ControladorBibliotecas();
      $editarBiblioteca -> ctreditarBiblioteca();

      ?>

    </div>

  </div>

</div>


<?php

$eliminarBiblioteca = new ControladorBibliotecas();
$eliminarBiblioteca -> ctrEliminarBiblioteca();

?>
