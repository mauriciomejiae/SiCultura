<?php

class ControladorSalas{

	/*=============================================
	CREAR SALA
	=============================================*/

	static public function ctrCrearSala(){

		if(isset($_POST["nuevoDepartamento"])){

			if(preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCiudad"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ \.\-]+$/', $_POST["nuevoExhibidor"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ \.\-]+$/', $_POST["nuevoNombre"])){

			   	$tabla = "salas";

			   	$datos = array("departamento"=>$_POST["nuevoDepartamento"],
					           "ciudad"=>$_POST["nuevaCiudad"],
					           "exhibidor"=>$_POST["nuevoExhibidor"],
					           "nombre"=>$_POST["nuevoNombre"],
					           "direccion"=>$_POST["nuevaDireccion"]);

			   	$respuesta = ModeloSalas::mdlIngresarSala($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title:"La sala de cine ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "salas";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro de la sala no puede ir vacío o llevar carácteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "salas";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR SALAS
	=============================================*/

	static public function ctrMostrarSalas($item, $valor){

		$tabla = "salas";

		$respuesta = ModeloSalas::mdlMostrarSalas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR SALA
	=============================================*/

	static public function ctrEditarSala(){

		if(isset($_POST["editarCiudad"])){

			if(preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCiudad"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ \.\-]+$/', $_POST["editarExhibidor"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ \.\-]+$/', $_POST["editarNombre"])){

			   	$tabla = "salas";

			   	$datos = array("id"=>$_POST["idSala"],
						   	   "departamento"=>$_POST["editarDepartamento"],
					           "ciudad"=>$_POST["editarCiudad"],
					           "exhibidor"=>$_POST["editarExhibidor"],
					           "nombre"=>$_POST["editarNombre"],
					           "direccion"=>$_POST["editarDireccion"]);

			   	$respuesta = ModeloSalas::mdlEditarSala($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro de la sala de cine ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "salas";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro de la sala no puede ir vacío o llevar carácteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "salas";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR SALA
	=============================================*/

	static public function ctrEliminarSala(){

		if(isset($_GET["idSala"])){

			$tabla ="salas";
			$datos = $_GET["idSala"];

			$respuesta = ModeloSalas::mdlEliminarSala($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La sala de cine ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "salas";

								}
							})

				</script>';

			}		

		}

	}

}

