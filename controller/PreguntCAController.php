<?php
    require '../model/modelo.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $MD = new Modelo_Grafico();
    $preg = $_POST["preg"];
    
    
    
    if ($preg === 'p1a') {
	  	 $DatosT = $MD -> TraerDatosFormCAP1a();     
        echo json_encode($DatosT);
	  	}
    
    if ($preg === 'p1b') {
	  	 $DatosT = $MD -> TraerDatosFormCAP1b();     
        echo json_encode($DatosT);
	  	}
	  	
	if ($preg === 'p1c') {
	  	 $DatosT = $MD -> TraerDatosFormCAP1c();     
        echo json_encode($DatosT);
	  	}
	
	if ($preg === 'p1d') {
	  	 $DatosT = $MD -> TraerDatosFormCAP1d();     
        echo json_encode($DatosT);
	  	}
	  	
	 if ($preg === 'p1e') {
	  	 $DatosT = $MD -> TraerDatosFormCAP1d();     
        echo json_encode($DatosT);
	  	}
	  	
    if ($preg === 'p2') {
	  	 $DatosT = $MD -> TraerDatosFormCAP2();     
        echo json_encode($DatosT);
	  	}

	if ($preg === 'p3') {
	     $DatosT = $MD -> TraerDatosFormCAP3();     
         echo json_encode($DatosT);
	  	}
	if ($preg === 'p4') {
	     $DatosT = $MD -> TraerDatosFormCAP4();     
         echo json_encode($DatosT);
	  	}
	if ($preg === 'p5') {
	     $DatosT = $MD -> TraerDatosFormCAP5();     
         echo json_encode($DatosT);
	}
		if ($preg === 'p6') {
	     $DatosT = $MD -> TraerDatosFormCAP6();     
         echo json_encode($DatosT);
	}
	

    
?>