 <?php

require_once "conexion.php";

class ModeloActivos{

	/*=============================================
	MOSTRAR ACTIVOS
	=============================================*/

	static public function mdlMostrarActivos($tabla, $item, $valor){

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
	CREAR ACTIVO
	=============================================*/

	static public function mdlIngresarActivo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_categoria, id_activo, nombre, descripcion, idioma, medio, formato, infodisponible, infopublicada, ubicacion) VALUES (:id_categoria, :id_activo, :nombre, :descripcion, :idioma, :medio, :formato, :infodisponible, :infopublicada, :ubicacion)");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":id_activo", $datos["id_activo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":idioma", $datos["idioma"], PDO::PARAM_STR);
		$stmt->bindParam(":medio", $datos["medio"], PDO::PARAM_STR);
        $stmt->bindParam(":formato", $datos["formato"], PDO::PARAM_STR);
        $stmt->bindParam(":infodisponible", $datos["infodisponible"], PDO::PARAM_STR);
        $stmt->bindParam(":infopublicada", $datos["infopublicada"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR ACTIVO
	=============================================*/

	static public function mdlEditarActivo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla SET id_categoria = :id_categoria, nombre = :nombre,  descripcion = :descripcion,  idioma = :idioma,  medio = :medio,  formato = :formato,  infodisponible = :infodisponible, infopublicada = :infopublicada, ubicacion = :ubicacion WHERE id_activo = :id_activo");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":id_activo", $datos["id_activo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":idioma", $datos["idioma"], PDO::PARAM_STR);
		$stmt->bindParam(":medio", $datos["medio"], PDO::PARAM_STR);
        $stmt->bindParam(":formato", $datos["formato"], PDO::PARAM_STR);
        $stmt->bindParam(":infodisponible", $datos["infodisponible"], PDO::PARAM_STR);
        $stmt->bindParam(":infopublicada", $datos["infopublicada"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR ACTIVO
	=============================================*/

	static public function mdlEliminarActivo($tabla, $datos){

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

