<?php

class ControladorBibliotecas{


	/*=============================================
	MOSTRAR BIBLIOTECAS
	=============================================*/

	static public function ctrMostrarBibliotecas($item, $valor){

		$tabla = "bibliotecas";

		$respuesta = ModeloBibliotecas::mdlMostrarBibliotecas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR BIBLIOTECA
	=============================================*/

	static public function ctrCrearBiblioteca(){

		if(isset($_POST["nuevoCodigo"])){

			if(preg_match('/^[^"]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoMunicipio"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoCentropoblado"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevaDireccion"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoBarrio"]) &&
			   preg_match('/^[^"]+$/', $_POST["nuevoTelefonos"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevaExtension"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevoFax"]) &&	
			   preg_match('/^[^"]+$/', $_POST["nuevaPagina"]) &&				
			   preg_match('/^[^"]+$/', $_POST["nuevaGeoreferencia"])){	   		

				$tabla = "bibliotecas";

				$datos = array("codigo"=> 			$_POST["nuevoCodigo"],
				               "departamento"=> 	$_POST["nuevoDepartamento"],
							   "municipio"=> 		$_POST["nuevoMunicipio"],
							   "centropoblado"=> 	$_POST["nuevoCentropoblado"],
							   "naturaleza"=> 		$_POST["nuevaNaturaleza"],
							   "tipo"=> 			$_POST["nuevoTipo"],
							   "nombre"=> 			$_POST["nuevoNombre"],
							   "direccion"=> 		$_POST["nuevaDireccion"],
							   "barrio"=> 			$_POST["nuevoBarrio"],
							   "telefonos"=> 		$_POST["nuevoTelefonos"],
							   "extension"=> 		$_POST["nuevaExtension"],
							   "fax"=> 				$_POST["nuevoFax"],
							   "pagina"=> 			$_POST["nuevaPagina"],
							   "estado"=> 			$_POST["nuevoEstado"],
							   "georeferencia" => 	$_POST["nuevaGeoreferencia"]);


				$respuesta = ModeloBibliotecas::mdlIngresarBiblioteca($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "la biblioteca ha sido guardada correctamente en el sistema",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "bibliotecas";

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

							window.location = "bibliotecas";

							}
						})

			  	</script>';
			}
		}

	}


	/*=============================================
	EDITAR BIBLIOTECA
	=============================================*/

	static public function ctrEditarBiblioteca(){

		if(isset($_POST["editarCodigo"])){

			if(preg_match('/^[^"]+$/', $_POST["editarCodigo"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarMunicipio"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarCentropoblado"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarNombre"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarDireccion"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarBarrio"]) &&
			   preg_match('/^[^"]+$/', $_POST["editarTelefonos"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarExtension"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarFax"]) &&	
			   preg_match('/^[^"]+$/', $_POST["editarPagina"]) &&				
			   preg_match('/^[^"]+$/', $_POST["editarGeoreferencia"])){	   		

				$tabla = "bibliotecas";

				$datos = array("codigo"=> 			$_POST["editarCodigo"],
							   "departamento"=> 	$_POST["editarDepartamento"],
							   "municipio"=> 		$_POST["editarMunicipio"],
							   "centropoblado"=> 	$_POST["editarCentropoblado"],
							   "naturaleza"=> 		$_POST["editarNaturaleza"],
							   "tipo"=> 			$_POST["editarTipo"],
							   "nombre"=> 			$_POST["editarNombre"],
							   "direccion"=> 		$_POST["editarDireccion"],
							   "barrio"=> 			$_POST["editarBarrio"],
							   "telefonos"=>		$_POST["editarTelefonos"],
							   "extension"=> 		$_POST["editarExtension"],
							   "fax"=> 				$_POST["editarFax"],
							   "pagina"=> 			$_POST["editarPagina"],
							   "estado"=> 			$_POST["editarEstado"],
							   "georeferencia" =>   $_POST["editarGeoreferencia"]);

				$respuesta = ModeloBibliotecas::mdlEditarBiblioteca($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La biblioteca ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "bibliotecas";

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

							window.location = "bibliotecas";

							}
						})

			  	</script>';
			}
		}

	}


	/*=============================================
	ELIMINAR BIBLIOTECA
	=============================================*/

	static public function ctrEliminarBiblioteca(){

		if(isset($_GET["idBiblioteca"])){

			$tabla ="bibliotecas";
			$datos = $_GET["idBiblioteca"];

			$respuesta = ModeloBibliotecas::mdlEliminarBiblioteca($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La biblioteca ha sido eliminada correctamente del sistema",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "bibliotecas";

								}
							})

				</script>';

			}		
		}

	}

	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporte(){

		if(isset($_GET["reporte"])){

			$tabla = "bibliotecas";

			$item = null;
			$valor = null;

			$bibliotecas = ModeloBibliotecas::mdlMostrarBibliotecas($tabla, $item, $valor);


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = $_GET["reporte"].'.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");

			echo utf8_decode("<table border='0'> 

					<tr> 
						<td style='font-weight:bold; border:1px solid #eee;'>#</td> 
						<td style='font-weight:bold; border:1px solid #eee;'>CÓDIGO DANE</td> 
						<td style='font-weight:bold; border:1px solid #eee;'>DEPARTAMENTO</td>
						<td style='font-weight:bold; border:1px solid #eee;'>MUNICIPIO</td>
						<td style='font-weight:bold; border:1px solid #eee;'>CENTRO POBLADO</td>
						<td style='font-weight:bold; border:1px solid #eee;'>NATURALEZA DE LA BIBLIOTECA</td>
						<td style='font-weight:bold; border:1px solid #eee;'>TIPO DE BIBLIOTECA</td>
						<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE DE LA BIBLIOTECA</td>		
						<td style='font-weight:bold; border:1px solid #eee;'>DIRECCIÓN DE LA BIBLIOTECA</td>	
						<td style='font-weight:bold; border:1px solid #eee;'>BARRIO</td	
						<td style='font-weight:bold; border:1px solid #eee;'>TELÉFONOS DE CONTACTO</td	
						<td style='font-weight:bold; border:1px solid #eee;'>EXTENSIÓN</td	
						<td style='font-weight:bold; border:1px solid #eee;'>FAX</td	
						<td style='font-weight:bold; border:1px solid #eee;'>PÁGINA WEB DE LA BIBLIOTECA</td
						<td style='font-weight:bold; border:1px solid #eee;'>ESTADO DE LA BIBLIOTECA</td	
						<td style='font-weight:bold; border:1px solid #eee;'>GEOREFERENCIA</td	
						<td style='font-weight:bold; border:1px solid #eee;'>FECHA AGREGADO AL SISTEMA</td>	
					</tr>"
				);

			foreach ($bibliotecas as $row => $valueBibliotecas){

			    echo utf8_decode(

			    	"<tr>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["id"]."</td> 
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["codigo"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["departamento"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["municipio"]."</td> 
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["centropoblado"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["naturaleza"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["tipo"]."</td> 
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["nombre"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["direccion"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["barrio"]."</td> 
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["telefonos"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["extension"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["fax"]."</td> 
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["pagina"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["estado"]."</td>
					 	<td style='border:1px solid #eee;'>".$valueBibliotecas["georeferencia"]."</td> 
					 	<td style='border:1px solid #eee;'>".substr($valueBibliotecas["fecha"],0,14)."</td>
				 	</tr>"
				 );
			}


			echo "</table>";

		}

	}




}









