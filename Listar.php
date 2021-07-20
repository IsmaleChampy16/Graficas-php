<?php

$data = file_get_contents("php://input");
require "conexion.php";

$consulta = $pdo->prepare("SELECT * FROM formularioca ORDER BY id ASC");
$consulta->execute();

if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM formularioca WHERE nombre LIKE '%".$data."%' OR estado LIKE '%".$data."%' OR fecha LIKE '%".$data."%' OR  puesto LIKE '%".$data."%'");
    $consulta->execute();
}

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['nombre'] . "</td>
            <td>" . $data['apellidop'] . "</td>
            <td>" . $data['apellidom'] . "</td>
            <td>" . $data['numerodecontacto'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['fecha'] . "</td>
            <td>" . $data['tienda'] . "</td>
            <td>" . $data['estado'] . "</td>
            <td>" . $data['puesto'] . "</td>
            
            
            
            <td>" . $data['Epp1'] . "</td>
            <td>" . $data['Epp2'] . "</td>
            <td>" . $data['Epp3'] . "</td>
            <td>" . $data['Epp4'] . "</td>
            <td>" . $data['Epp5'] . "</td>
            <td>" . $data['Ep2'] . "</td>
            <td>" . $data['Ep2p'] . "</td>
            <td>" . $data['Ep3'] . "</td>
            <td>" . $data['Ep3p'] . "</td>
            <td>" . $data['Ep4'] . "</td>
            <td>" . $data['Ep4p'] . "</td>
            <td>" . $data['Ep5'] . "</td>
            <td>" . $data['Ep5p'] . "</td>
            <td>" . $data['Ep6'] . "</td>  
        </tr>";
}
?>
