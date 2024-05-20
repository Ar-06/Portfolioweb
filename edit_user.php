<?php

include('conection.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "UPDATE registro_usuario SET Nombre='$nombre', Apellido='$apellido', Correo='$correo', Mensaje='$mensaje' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};


?>