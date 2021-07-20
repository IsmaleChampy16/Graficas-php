<?php
/*Usuario, Password, Nombre base de datos*/

// $mysqli = mysqli_connect("localhost", "intercle_admin", "Soporte=2020-2", "intercle_intranet");
// if (mysqli_connect_errno($mysqli)) {
//     echo "Fallo al contenctar a MySQL: ".mysqli_connect_error();
// }

$servidor = "mysql:dbname=intercle_intranet;host=localhost";
$user = "intercle_admin";
$pass = "Soporte=2020-2";

// $servidor = "mysql:dbname=intercle_intranet;host=localhost";
// $user = "root";
// $pass = "";

try {
    $pdo = new PDO($servidor, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo "conexion fallida" .$e->getMessage();
}
