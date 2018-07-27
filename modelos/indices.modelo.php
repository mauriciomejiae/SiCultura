 <?php

require_once "conexion.php";

class ModeloIndices{

	/*=============================================
	MOSTRAR INDICES
	=============================================*/

	static public function mdlMostrarIndices($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
	

	/*=============================================
	CREAR INDICE
	=============================================*/

	static public function mdlIngresarIndice($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_categoria, id_indice, nombre, idioma, medio, fecha_generacion, responsable1, responsable2, objeto, fundamento, especifica, excepcion, fecha_calificacion, plazo) VALUES (:id_categoria, :id_indice, :nombre, :idioma, :medio, :fecha_generacion, :responsable1, :responsable2, :objeto, :fundamento, :especifica, :excepcion, :fecha_calificacion, :plazo)");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":id_indice", $datos["id_indice"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":idioma", $datos["idioma"], PDO::PARAM_STR);
		$stmt->bindParam(":medio", $datos["medio"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_generacion", $datos["fecha_generacion"], PDO::PARAM_STR);
        $stmt->bindParam(":responsable1", $datos["responsable1"], PDO::PARAM_STR);
        $stmt->bindParam(":responsable2", $datos["responsable2"], PDO::PARAM_STR);
		$stmt->bindParam(":objeto", $datos["objeto"], PDO::PARAM_STR);
		$stmt->bindParam(":fundamento", $datos["fundamento"], PDO::PARAM_STR);
		$stmt->bindParam(":especifica", $datos["especifica"], PDO::PARAM_STR);
		$stmt->bindParam(":excepcion", $datos["excepcion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_calificacion", $datos["fecha_calificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":plazo", $datos["plazo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR INDICE
	=============================================*/

	static public function mdlEditarIndice($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla SET id_categoria = :id_categoria, nombre = :nombre, idioma = :idioma,  medio = :medio,  fecha_generacion = :fecha_generacion,  responsable1 = :responsable1, responsable2 = :responsable2, objeto = :objeto, fundamento = :fundamento, especifica = :especifica, excepcion = :excepcion, fecha_calificacion = :fecha_calificacion, plazo = :plazo WHERE id_indice = :id_indice");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":id_indice", $datos["id_indice"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":idioma", $datos["idioma"], PDO::PARAM_STR);
		$stmt->bindParam(":medio", $datos["medio"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_generacion", $datos["fecha_generacion"], PDO::PARAM_STR);
        $stmt->bindParam(":responsable1", $datos["responsable1"], PDO::PARAM_STR);
        $stmt->bindParam(":responsable2", $datos["responsable2"], PDO::PARAM_STR);
		$stmt->bindParam(":objeto", $datos["objeto"], PDO::PARAM_STR);
	    $stmt->bindParam(":fundamento", $datos["fundamento"], PDO::PARAM_STR);
	    $stmt->bindParam(":especifica", $datos["especifica"], PDO::PARAM_STR);
	    $stmt->bindParam(":excepcion", $datos["excepcion"], PDO::PARAM_STR);
	    $stmt->bindParam(":fecha_calificacion", $datos["fecha_calificacion"], PDO::PARAM_STR);
	    $stmt->bindParam(":plazo", $datos["plazo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR INDICE
	=============================================*/

	static public function mdlEliminarIndice($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}



}

