<?php
	class Modelo_Grafico{
		private $conexion;
		function __construct()
		{
			require_once('conexion2.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
        }		
		
		function TraerDatosFormCAP1a(){
		    $sql = "CALL `FormCAP1A`();";
		    $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	
	function TraerDatosFormCAP1b(){
		    $sql = "CALL `FormCAP1B`();";
		    $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	
	function TraerDatosFormCAP1c(){
		    $sql = "CALL `FormCAP1C`();";
		    $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	
	function TraerDatosFormCAP1d(){
		    $sql = "CALL `FormCAP1D`();";
		    $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	
		function TraerDatosFormCAP1e(){
		    $sql = "CALL `FormCAP1E`();";
		    $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
		
		function TraerDatosFormCAP2(){
		    $sql = "CALL `FormCAP2`();";
			 $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	  
	}
	   function TraerDatosFormCAP3(){
		    $sql = "CALL `FormCAP3`();";	
			 $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	   function TraerDatosFormCAP4(){
		    $sql = "CALL `FormCAP4`();";	
			 $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	   
		
	 	function TraerDatosFormCAP5(){
		    $sql = "CALL `FormCAP5`();";	
			 $arreglo1 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo1[] = $consulta_VU;
			 	}

				return $arreglo1;
				$this->conexion->cerrar();	
		}
	}
	   
	   function TraerDatosFormCAP6(){
		    $sql = "CALL `FormCAP6`();";	
			 $arreglo2 = array();
			 if ($consulta = $this->conexion->conexion->query($sql)) {

			 	while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo2[] = $consulta_VU;
			 	}

				return $arreglo2;
				$this->conexion->cerrar();	
		}
	}
	   	
	}
?>
