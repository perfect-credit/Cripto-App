<?php
class ConexionBD {
    private $conexion;
    private $publicKey;
    private $privateKey;

    public function __construct($db) {
        $this->conexion = $db;
        
        // Generar un par de claves
        $keyPair = sodium_crypto_box_keypair();
        $this->publicKey = sodium_crypto_box_publickey($keyPair);
        $this->privateKey = sodium_crypto_box_secretkey($keyPair);
    }

    public function insertarUsuario($Matricula, $Materia, $Calificacion, $matriculaReal) {
        try {
            // Cifrar la matrícula usando la clave pública
            $Matricula_encrypted = sodium_crypto_box_seal($Matricula, $this->publicKey);
            
            // Descifrar la matrícula encriptada para obtener la matrícula real
            $matriculaReal_decrypted = sodium_crypto_box_seal_open($Matricula_encrypted, sodium_crypto_box_keypair_from_secretkey_and_publickey($this->privateKey, $this->publicKey));
    
            $consulta = "INSERT INTO materias (Matricula, Materia, Calificacion, matriculaReal) VALUES (?, ?, ?, ?)";
            $declaracion = $this->conexion->prepare($consulta);
            $declaracion->bindParam(1, $Matricula_encrypted);
            $declaracion->bindParam(2, $Materia);
            $declaracion->bindParam(3, $Calificacion);
            $declaracion->bindParam(4, $matriculaReal_decrypted);
    
            $declaracion->execute();
            return true;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    

    // Método para obtener la clave pública
    public function getPublicKey() {
        return $this->publicKey;
    }

    // Método para obtener la clave privada
    public function getPrivateKey() {
        return $this->privateKey;
    }
}

// Incluir la clase de conexión a la base de datos
require_once('Connection/cdb.php');

// Crear una instancia de la clase Database
$database = new Database();

// Obtener la conexión a la base de datos
$db = $database->getConnection();

// Crear una instancia de la clase ConexionBD y pasarle la conexión
$conexionBD = new ConexionBD($db);

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Matricula = $_POST["Matricula"];
    $Materia = $_POST["Materia"];
    $Calificacion = $_POST["Calificacion"];
    $matriculaReal = $_POST["matriculaReal"];

    // Insertar el nuevo usuario en la base de datos
    $registroExitoso = $conexionBD->insertarUsuario($Matricula, $Materia, $Calificacion, $matriculaReal);

    if ($registroExitoso) {
        // Registro exitoso, redirigir a la página de inicio de sesión
        header("Location: inicio.php");
        exit();
    } else {
        // Error en el registro, mostrar mensaje
        $mensajeError = "Error en el registro. Inténtalo de nuevo.";
    }
}

// Obtener la clave pública y privada para usar en la aplicación
$publicKey = $conexionBD->getPublicKey();
$privateKey = $conexionBD->getPrivateKey();
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- CDN Bootstrap--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--- CSS--->
    <link rel="stylesheet" href="css/registro.css">
    <!--- Google Font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--- Favicon --->
    <link rel="icon" type="image/x-icon" href="img/user.png">
    <title>Registrar materias</title>
</head>
<body>
<div class="container login shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="card text-center border border-success p-2 border-opacity-10">
        <div class="card-header">
            <img src="img/UTC_LOGO.png" class="img-fluid" alt="alternative" width="100px" height="100px">
        </div>
        <div class="card-body">
        <form name="loginForm" method="POST">
    <div class="mb-3">
        <input type="text" class="form-control poppins-semibold" id="Matricula" name="Matricula" placeholder="Matricula escolar" autofocus required>
    </div>
       
    <div class="mb-3">
        <input type="text" class="form-control poppins-semibold" id="Materia" name="Materia"  placeholder="Registrar Materia" required>
    </div>
    
    <div class="mb-3">
        <input type="text" class="form-control poppins-semibold" id="Calificacion" name="Calificacion" placeholder="Registrar calificacion" required >
    </div>
    
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary btn-sm" type="submit" name="enviar"><h6>Registrar materia</h6></button>
    </div>
</form>
<hr>
<form action="inicio.php">
<div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary btn-sm" href="inicio.php" type="submit" name="enviar"><h6>Volver al inicio</h6></button>
    </div>
</form>



    <!-- Muestra un mensaje de error si existe -->
    <?php if (isset($mensajeError)): ?>
        <p style="color: red;"><?php echo $mensajeError; ?></p>
    <?php endif; ?>

    </div>
        <div class="card-footer text-body-secondary text-center">
            <h6>Desarrollado por el grupo 3CPS</h6>
            <br>
            <h6>Universidad Tecnológica de Coahuila ©2024</h6>
        </div>
    </div>
</div>
</body>
</html>