<?php

require_once ('conexion.php');

class Datos extends Conexion{

	public static function registroUsuarioModel($datos,$tabla){

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, documento, tipo_documento, correo, contrasena, rol) VALUES (:pn,:sn,:pa,:sa,:nd,:tidoc,:correo,:contra,:rol)");
		$stmt->bindParam(":pn",$datos["pn"], PDO::PARAM_STR);
		$stmt->bindParam(":sn",$datos["sn"], PDO::PARAM_STR);
		$stmt->bindParam(":pa",$datos["pa"], PDO::PARAM_STR);
		$stmt->bindParam(":sa",$datos["sa"], PDO::PARAM_STR);
		$stmt->bindParam(":nd",$datos["nd"], PDO::PARAM_INT);
		$stmt->bindParam(":tidoc",$datos["tidoc"], PDO::PARAM_INT);
		$stmt->bindParam(":correo",$datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":contra",$datos["contra"], PDO::PARAM_STR);
		$stmt->bindParam(":rol",$datos["rol"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}else{
			return "error";
		}

	}// funcion registroUsuarioModel

}//clase datod


?>