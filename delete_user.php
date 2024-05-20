<?php

include('conection.php');
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM registro_usuario WHERE id='$id'";   

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>