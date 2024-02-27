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
  <title>3CPS Universidad agronoma</title>
  <!-- Agrega enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--- Google Font--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Sistema Escolar 3CPS</h1>
</div>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
<form class="container-fluid justify-content-start">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bienvenido <?php echo $_SESSION['Name']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <ul class="nav justify-content-end">
    <ul class="nav justify-content-end">
    <a class="nav-link active" aria-current="page" href="RegistroCali.php">Capturar</a>
  </li>
</ul>


  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Actions/SignOut.php">Cerrar sesión</a>
  </li>
</ul>
  </div>
</nav>

<?php
// Crear una instancia de la clase Database para obtener la conexión
$database = new Database();
$db = $database->getConnection();

// Consulta SQL para obtener los datos de la tabla "materias"
$query = "SELECT idMatricula, Matricula, matriculaReal, Materia, Calificacion FROM materias";

// Preparar y ejecutar la consulta
$stmt = $db->prepare($query);
$stmt->execute();

// Obtener los resultados de la consulta
$materias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h1 class="text-center">Tabla de Calificaciones</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Matrícula</th>
                <th scope="col">Materia</th>
                <th scope="col">Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $materia): ?>
                <tr>
                    <td><?php echo $materia['idMatricula']; ?></td>
                    <td><?php echo $materia['matriculaReal']; ?></td>
                    <td><?php echo $materia['Materia']; ?></td>
                    <td><?php echo $materia['Calificacion']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



  



  <!-- Agrega enlaces a los archivos de Bootstrap y jQuery (necesario para el funcionamiento del botón de navegación) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


