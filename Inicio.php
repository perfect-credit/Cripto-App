<?php
ini_set('session.cookie_lifetime', 0); //Se define el tiempo de vida de la sesion iniciada, al momento que pasa el tiempo o cierras la ventana se cerrara la sesion
session_start(); //Reanuda la sesion existente
if (!isset($_SESSION['Matricula'])) { //Si la variable esta definida el usuario puede permanecer en el sitio, si la variable de sesion de "NumeroEmpleado" no esta iniciada lo devuelve a la pagina de inicio
  header("Location: login.php"); //Ubicacion que redirrecciona si la sesion no esta iniciada
  exit(); //Termina el script actual
}
require_once('Connection/cdb.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3CPS Sistema escolar</title>
  <!-- Agrega enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Sistema Escolar</h1>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bienvenido <?php echo $_SESSION['Matricula']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Maestros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Captura de calificaciones</a></li>
            <li><a class="dropdown-item" href="#">Asignaturas</a></li>
            <li><a class="dropdown-item" href="#">Horarios</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Alumnos 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Calificaciones</a></li>
            <li><a class="dropdown-item" href="#">Horarios y materias</a></li>
            <li><a class="dropdown-item" href="#">Evaluaciones</a></li>
          </ul>          
        </li>
      </ul>
      
    </div>
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Actions/SignOut.php">Cerrar sesión</a>
  </li>
</ul>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


