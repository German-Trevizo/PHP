<?php

include "./coneccion.php";

$id = $_POST['id'];
$conexion->query("delete from usuarios where id=$id");  
header("Location: ./../users.php");
?>