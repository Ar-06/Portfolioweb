<?php

include('conection.php');
$con = connection();

$id = $_GET['id'];


$sql = "SELECT * FROM registro_usuario WHERE id = '$id' ";  
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="users-form">
        <form class="col-md-6 col-lg-4 p-3" action="edit_user.php" method="POST">
            <h1>Editar Usuario</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Id</label>
                <input type="hidden" class="form-control" name="id" value="<?=$row['ID']?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?=$row['Nombre']?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?=$row['Apellido']?>">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" value="<?=$row['Correo']?>">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" class="form-control" id="mensaje" value = "<?=$row['Mensaje']?>"></textarea>
            </div>
            <div class="mb-3 btn-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="Actualizar Información">Actualizar</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>