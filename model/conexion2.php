<?php
$servidor = "mysql:dbname=intercle_intranet;host=localhost";
$user = "intercle_admin";
$pass = "Soporte=2020-2";

$conexion=mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");


	class conexion{
		private $servidor;
		private $usuario;
		private $contrasena;
		private $basedatos;
		public $conexion;
		public function __construct(){
		    $this->servidor = "localhost";
			$this->usuario = "intercle_admin";
			$this->contrasena = "Soporte=2020-2";
			$this->basedatos = "intercle_intranet";
		}
		function conectar(){
			$this->conexion = new mysqli($this->servidor,$this->usuario,$this->contrasena,$this->basedatos);
			$this->conexion->set_charset("utf8");
		}
		function cerrar(){
			$this->conexion->close();	
		}
	}
?> 