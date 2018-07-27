 <?php

require_once "conexion.php";

class ModeloBibliotecas{

	/*=============================================
	MOSTRAR BIBLIOTECAS
	=============================================*/

	static public function mdlMostrarBibliotecas($tabla, $item, $valor){

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
	CREAR BIBLIOTECA
	=============================================*/

	static public function mdlIngresarBiblioteca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (codigo, departamento, municipio, centropoblado, naturaleza, tipo, nombre, direccion, barrio, telefonos, extension, fax, pagina,estado, georeferencia) VALUES (:codigo, :departamento, :municipio, :centropoblado, :naturaleza, :tipo, :nombre, :direccion, :barrio, :telefonos, :extension, :fax, :pagina, :estado, :georeferencia)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
		$stmt->bindParam(":centropoblado", $datos["centropoblado"], PDO::PARAM_STR);
        $stmt->bindParam(":naturaleza", $datos["naturaleza"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":barrio", $datos["barrio"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonos", $datos["telefonos"], PDO::PARAM_STR);
		$stmt->bindParam(":extension", $datos["extension"], PDO::PARAM_STR);
		$stmt->bindParam(":fax", $datos["fax"], PDO::PARAM_STR);
		$stmt->bindParam(":pagina", $datos["pagina"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":georeferencia", $datos["georeferencia"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR BIBLIOTECA
	=============================================*/

	static public function mdlEditarBiblioteca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla SET departamento = :departamento, municipio = :municipio,  centropoblado = :centropoblado,  naturaleza = :naturaleza,  tipo = :tipo, nombre = :nombre, direccion = :direccion, barrio = :barrio, telefonos = :telefonos, extension = :extension, fax = :fax, pagina = :pagina, estado = :estado, georeferencia = :georeferencia WHERE codigo = :codigo");

		$stmt->bindParam(":codigo",        $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":departamento",  $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":municipio",     $datos["municipio"], PDO::PARAM_STR);
		$stmt->bindParam(":centropoblado", $datos["centropoblado"], PDO::PARAM_STR);
        $stmt->bindParam(":naturaleza",    $datos["naturaleza"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo",          $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre",        $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion",     $datos["direccion"], PDO::PARAM_STR);
	    $stmt->bindParam(":barrio",        $datos["barrio"], PDO::PARAM_STR);
	    $stmt->bindParam(":telefonos",     $datos["telefonos"], PDO::PARAM_STR);
	    $stmt->bindParam(":extension",     $datos["extension"], PDO::PARAM_STR);
	    $stmt->bindParam(":fax",           $datos["fax"], PDO::PARAM_STR);
	    $stmt->bindParam(":pagina",        $datos["pagina"], PDO::PARAM_STR);
	    $stmt->bindParam(":estado",        $datos["estado"], PDO::PARAM_STR);
	    $stmt->bindParam(":georeferencia", $datos["georeferencia"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR BIBLIOTECA
	=============================================*/

	static public function mdlEliminarBiblioteca($tabla, $datos){

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

