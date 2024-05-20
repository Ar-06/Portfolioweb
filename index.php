<?php
include('conection.php');

$con = connection();

$sql = "SELECT * FROM registro_usuario";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
       <!--menu de navegacion-->

       <nav class=" menu navbar navbar-expand-lg position-sticky top-0 z-3">
        <div class="container-fluid">
          <img class="rounded-circle" width="50px" src="img/2d9349f78af14ae282110ac69185d7cc.png" alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#seccion_2">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#seccion_3">Sobre Mi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#footer">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!--seccion 1-->

      <section class="seccion_1 d-flex flex-column justify-content-center align-items-center gap-3">
        <img class="img rounded-circle" src="img/img.jpeg" alt="profile">
        <h2 class="text-primary">Ernesto Fabián Montero Rivas</h2>
        <h4>Estudiante de Ingenieria de Sistemas e Informatica</h4>
      </section>

      <!--seccion 2-->
      <section class="seccion_2 p-2 d-flex flex-column bg-primary bg-gradient" id="seccion_2">
        <h2 class="text-white m-4 text-center">Proyectos</h2>

        <div class="cards d-flex flex-wrap gap-5 justify-content-center align-items-center">
            
          <div class="card" style="width: 18rem;">
            <img src="img/algoritmo.jpg" class="card-img-top" alt="algoritmo">
            <div class="card-body">
              <h5 class="card-title">Algoritmo de Interrupcion de Procesos</h5>
              <p class="card-text">Estructura de algoritmo realizado en lenguaje Python
                simulando una Interrupcion de procesos.
              </p>
              <a href="https://github.com/Ar-06/C-digos-SO.git" class="btn btn-primary">Ir</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/blog.png" class="card-img-top" alt="blog">
            <div class="card-body">
              <h5 class="card-title">Blog</h5>
              <p class="card-text">Pequeño perfil usando HTML y CSS.</p>
              <a href="https://ar-06.github.io/Dise-oAr.github.io/" class="btn btn-primary">Go</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/captura.png" class="card-img-top" alt="QR">
            <div class="card-body">
              <h5 class="card-title">Diseño de QR</h5>
              <p class="card-text">Diseño de QR usando HTML y CSS.</p>
              <a href="https://ar-06.github.io/" class="btn btn-primary">Ir</a>
            </div>
          </div>
      </section>


      <!--Seccion 3-->

      <section class="seccion_3 d-flex justify-content-center align-items-center flex-wrap gap-3" id="seccion_3">
        <img class="img rounded-circle" src="img/profile1.avif" alt="profile2">
        <p class="parrafo">
          Hola! soy Ernesto Montero, un estudiante cursando la carrera de Ingenieria de Sistemas 
          e Informatica en la Universidad Nacional de Moquegua, a lo largo de mi carrera he podido
          mejorar mis habilidades. Aprendiendo lenguajes como Python y Java o creación de aplicaciones
          de Web usando HTML y CSS, de la misma manera conocimiento en Base de Datos con SQL.
          Mi meta es ser un gran desarrollador Web :D.
        </p>
      </section>

      <!--Seccion 4-->

      <section class="tecno d-flex justify-content-center align-items-center gap-3 flex-wrap bg-primary">
        <div>
          <img width="90px" src="img/html.svg" alt="html">
        </div>
        <div>
          <img width="90px" src="img/css.svg" alt="html">
        </div>
        <div>
          <img width="170px" src="img/sql.webp" alt="html">
        </div>
      </section>

      <footer class="footer d-flex justify-content-center align-items-center gap-3" id="footer">
        <h2>&copy; Ernesto Montero - 2024</h2>

        <a href="https://github.com/Ar-06">
          <img width="30px" src="img/github.svg" alt="github">
        </a>

        <a href="https://www.instagram.com/ar_monterooo/">
          <img width="30px" src="img/instagram.svg" alt="instagram">
        </a>
      </footer>

    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <form class="col-md-6 col-lg-4 p-3" action="insert_user.php" method="POST">
            <h3 class="text-center text-secondary">Contactame</h3>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" class="form-control" id="mensaje"></textarea>
            </div>
            <div class="mb-3 btn-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </div>
        </form>
        <div class="col-8 p-4">
            
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['ID']?></td>
                        <td><?=$row['Nombre']?></td>
                        <td><?=$row['Apellido']?></td>
                        <td><?=$row['Correo']?></td>
                        <td><?=$row['Mensaje']?></td>
                        <td>
                            <a href="update.php?id=<?=$row['ID']?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="delete_user.php?id=<?=$row['ID']?>" class="btn btn-small btn-danger"><i class="fa fa-solid fa-trash"></i></a>  
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>


</body>
</html>
