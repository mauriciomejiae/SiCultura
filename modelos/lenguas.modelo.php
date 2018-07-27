<?php

require_once "conexion.php";

class ModeloLenguas{

	/*=============================================
	CREAR LENGUA
	=============================================*/

	static public function mdlIngresarLengua($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, descripcion, departamento, familia, habitantes, hablantes, vitalidad) VALUES (:nombre, :descripcion, :departamento, :familia, :habitantes, :hablantes, :vitalidad)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":familia", $datos["familia"], PDO::PARAM_STR);
		$stmt->bindParam(":habitantes", $datos["habitantes"], PDO::PARAM_INT);
		$stmt->bindParam(":hablantes", $datos["hablantes"], PDO::PARAM_INT);
		$stmt->bindParam(":vitalidad", $datos["vitalidad"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR LENGUAS
	=============================================*/

	static public function mdlMostrarLenguas($tabla, $item, $valor){

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
	EDITAR LENGUA
	=============================================*/

	static public function mdlEditarLengua($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, departamento =:departamento, familia = :familia, habitantes = :habitantes, hablantes =:hablantes, vitalidad =:vitalidad WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":familia", $datos["familia"], PDO::PARAM_STR);
		$stmt->bindParam(":habitantes", $datos["habitantes"], PDO::PARAM_STR);
		$stmt->bindParam(":hablantes", $datos["hablantes"], PDO::PARAM_STR);
	    $stmt->bindParam(":vitalidad", $datos["vitalidad"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR LENGUA
	=============================================*/

	static public function mdlEliminarLengua($tabla, $datos){

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


	/*=============================================
	SUMAR TOTAL HABITANTES
	=============================================*/

	static public function mdlSumaTotalHabitantes($tabla){	

		$stmt = Conexion::conectar()->prepare("SELECT SUM(habitantes) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	SUMAR TOTAL HABLANTES
	=============================================*/

	static public function mdlSumaTotalHablantes($tabla){	

		$stmt = Conexion::conectar()->prepare("SELECT SUM(hablantes) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

}