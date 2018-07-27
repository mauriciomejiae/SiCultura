<?php

class ControladorActivos{


	/*=============================================
	MOSTRAR ACTIVOS
	=============================================*/

	static public function ctrMostrarActivos($item, $valor){

		$tabla = "activos";

		$respuesta = ModeloActivos::mdlMostrarActivos($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR ACTIVO
	=============================================*/

	static public function ctrCrearActivo(){

		if(isset($_POST["nuevoId_activo"])){

			if(preg_match('/^[^"]+$/', $_POST["nuevoId_activo"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevaDescripcion"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevoIdioma"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevaUbicacion"])){	   		

				$tabla = "activos";

				$datos = array("id_categoria" => $_POST["nuevaCategoria"],
							   "id_activo" => $_POST["nuevoId_activo"],
							   "nombre" => $_POST["nuevoNombre"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "idioma" => $_POST["nuevoIdioma"],
							   "medio" => $_POST["nuevoMedio"],
							   "formato" => $_POST["nuevoFormato"],
							   "medio" => $_POST["nuevoMedio"],
							   "infodisponible" => $_POST["nuevaInfodisponible"],
							   "infopublicada" => $_POST["nuevaInfopublicada"],
							   "ubicacion" => $_POST["nuevaUbicacion"]);


				$respuesta = ModeloActivos::mdlIngresarActivo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El activo ha sido guardado correctamente en el sistema",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "activos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "Opps! no se permite el uso de comillas dobles",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "activos";

							}
						})

			  	</script>';
			}
		}

	}


	/*=============================================
	EDITAR ACTIVO
	=============================================*/

	static public function ctrEditarActivo(){

		if(isset($_POST["editarId_activo"])){

			if(preg_match('/^[^"]+$/', $_POST["editarId_activo"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarDescripcion"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarIdioma"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarUbicacion"])){	   		

				$tabla = "activos";

				$datos = array("id_categoria" => $_POST["editarCategoria"],
							   "id_activo" => $_POST["editarId_activo"],
							   "nombre" => $_POST["editarNombre"],
							   "descripcion" => $_POST["editarDescripcion"],
							   "idioma" => $_POST["editarIdioma"],
							   "medio" => $_POST["editarMedio"],
							   "formato" => $_POST["editarFormato"],
							   "medio" => $_POST["editarMedio"],
							   "infodisponible" => $_POST["editarInfodisponible"],
							   "infopublicada" => $_POST["editarInfopublicada"],
							   "ubicacion" => $_POST["editarUbicacion"]);


				$respuesta = ModeloActivos::mdlEditarActivo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El activo ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "activos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "Opps! no se permite el uso de comillas dobles",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "activos";

							}
						})

			  	</script>';
			}
		}

	}

	/*=============================================
	ELIMINAR ACTIVO
	=============================================*/
	static public function ctrEliminarActivo(){

		if(isset($_GET["idActivo"])){

			$tabla ="activos";
			$datos = $_GET["idActivo"];

			$respuesta = ModeloActivos::mdlEliminarActivo($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El activo ha sido eliminado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "activos";

								}
							})

				</script>';

			}		
		}


	}

}





