<?php

$data = file_get_contents("php://input");
require "conexion.php";

// $consulta = $pdo->prepare("SELECT * FROM formulariolala ORDER BY id ASC");
// $consulta->execute();

if ($data != "") {
    $consulta = $pdo->prepare("SELECT COUNT(puesto) FROM formulariolala WHERE puesto= ' Reclutador' ");
    $consulta->execute();
}


$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        echo $resultado

  
?>