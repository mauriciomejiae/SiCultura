<?php

require_once "conexion.php";

class ModeloSalas{

	/*=============================================
	CREAR SALA
	=============================================*/

	static public function mdlIngresarSala($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (departamento, ciudad, exhibidor, nombre, direccion) VALUES (:departamento, :ciudad, :exhibidor, :nombre, :direccion)");

		$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":exhibidor", $datos["exhibidor"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR SALAS
	=============================================*/

	static public function mdlMostrarSalas($tabla, $item, $valor){

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
	EDITAR SALA
	=============================================*/

	static public function mdlEditarSala($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET departamento = :departamento, ciudad = :ciudad, exhibidor =:exhibidor, nombre = :nombre, direccion = :direccion WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
	    $stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":exhibidor", $datos["exhibidor"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR SALA
	=============================================*/

	static public function mdlEliminarSala($tabla, $datos){

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