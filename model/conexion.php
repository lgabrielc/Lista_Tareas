<?php

class Conexion{

	private $conexion;

	public function __construct(){
		$this->conexion = mysqli_connect("localhost","root","12345678","listatareas");
	}

	public function obtenerConexion(){
		return $this->conexion;
	}
	public function cerrarConexion(){
		mysqli_close($this->conexion);
	}

	public function consultar($sql){

        $query = mysqli_query($this->conexion,$sql);

		return $query;	
	}
}

 ?>