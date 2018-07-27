<?php

class ControladorIndices{


	/*=============================================
	MOSTRAR INDICES
	=============================================*/

	static public function ctrMostrarIndices($item, $valor){

		$tabla = "indices";

		$respuesta = ModeloIndices::mdlMostrarIndices($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR INDICE
	=============================================*/

	static public function ctrCrearIndice(){

		if(isset($_POST["nuevoId_indice"])){

			if(preg_match('/^[^"]+$/', $_POST["nuevoId_indice"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevoIdioma"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevaFecha_generacion"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoResponsable1"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevoResponsable2"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoObjeto"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevoFundamento"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevaEspecifica"]) &&		
			   preg_match('/^[^"]+$/', $_POST["nuevoPlazo"])){	   		

				$tabla = "indices";

				$datos = array("id_categoria" => $_POST["nuevaCategoria"],
							   "id_indice" => $_POST["nuevoId_indice"],
							   "nombre" => $_POST["nuevoNombre"],
							   "idioma" => $_POST["nuevoIdioma"],
							   "medio" => $_POST["nuevoMedio"],
							   "fecha_generacion" => $_POST["nuevaFecha_generacion"],
							   "responsable1" => $_POST["nuevoResponsable1"],
							   "responsable2" => $_POST["nuevoResponsable2"],
							   "objeto" => $_POST["nuevoObjeto"],
							   "fundamento" => $_POST["nuevoFundamento"],
							   "especifica" => $_POST["nuevaEspecifica"],
							   "excepcion" => $_POST["nuevaExcepcion"],
							   "fecha_calificacion" => $_POST["nuevaFecha_calificacion"],
							   "plazo" => $_POST["nuevoPlazo"]);


				$respuesta = ModeloIndices::mdlIngresarIndice($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El registro del índice ha sido guardado correctamente en el sistema",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "indices";

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

							window.location = "indices";

							}
						})

			  	</script>';
			}
		}

	}


	/*=============================================
	EDITAT INDICE
	=============================================*/

	static public function ctrEditarIndice(){

		if(isset($_POST["editarId_indice"])){

			if(preg_match('/^[^"]+$/', $_POST["editarId_indice"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarIdioma"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarFecha_generacion"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarResponsable1"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarResponsable2"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarObjeto"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarFundamento"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarEspecifica"]) &&		
			   preg_match('/^[^"]+$/', $_POST["editarPlazo"])){	

				$tabla = "indices";

				$datos = array("id_categoria" => $_POST["editarCategoria"],
							   "id_indice" => $_POST["editarId_indice"],
							   "nombre" => $_POST["editarNombre"],
							   "idioma" => $_POST["editarIdioma"],
							   "medio" => $_POST["editarMedio"],
							   "fecha_generacion" => $_POST["editarFecha_generacion"],
							   "responsable1" => $_POST["editarResponsable1"],
							   "responsable2" => $_POST["editarResponsable2"],
							   "objeto" => $_POST["editarObjeto"],
							   "fundamento" => $_POST["editarFundamento"],
							   "especifica" => $_POST["editarEspecifica"],
							   "excepcion" => $_POST["editarExcepcion"],
							   "fecha_calificacion" => $_POST["editarFecha_calificacion"],
							   "plazo" => $_POST["editarPlazo"]);


				$respuesta = ModeloIndices::mdlEditarIndice($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El índice de información  ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "indices";

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

							window.location = "indices";

							}
						})

			  	</script>';
			}
		}

	}


	/*=============================================
	ELIMINAR INDICE
	=============================================*/

	static public function ctrEliminarIndice(){

		if(isset($_GET["idIndice"])){

			$tabla ="indices";
			$datos = $_GET["idIndice"];

			$respuesta = ModeloIndices::mdlEliminarIndice($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El índice ha sido eliminado correctamente del sistema",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "indices";

								}
							})

				</script>';

			}		
		}


	}

}





