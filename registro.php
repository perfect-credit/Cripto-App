<?php
class ConexionBD {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    public function insertarUsuario($Matricula, $psw) {
        try {
            // Hashear la contraseña usando bcrypt
            $psw_hash = password_hash($psw, PASSWORD_BCRYPT);

            $consulta = "INSERT INTO users (Matricula, psw) VALUES (?, ?)";
            $declaracion = $this->conexion->prepare($consulta);
            $declaracion->bindParam(1, $Matricula);
            $declaracion->bindParam(2, $psw_hash);

            $declaracion->execute();
            return true;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
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
    $psw = $_POST["psw"];

    // Insertar el nuevo usuario en la base de datos
    $registroExitoso = $conexionBD->insertarUsuario($Matricula, $psw);

    if ($registroExitoso) {
        // Registro exitoso, redirigir a la página de inicio de sesión
        header("Location: login.php");
        exit();
    } else {
        // Error en el registro, mostrar mensaje
        $mensajeError = "Error en el registro. Inténtalo de nuevo.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <h2>Registro</h2>

    <!-- Formulario de registro -->
    <form method="post">
        <label for="Matricula">Matrícula:</label>
        <input type="text" id="Matricula" name="Matricula" required>

        <br>

        <label for="psw">Contraseña:</label>
        <input type="password" id="psw" name="psw" required>

        <br>

        <input type="submit" value="Registrarse">
    </form>

    <!-- Muestra un mensaje de error si existe -->
    <?php if (isset($mensajeError)): ?>
        <p style="color: red;"><?php echo $mensajeError; ?></p>
    <?php endif; ?>

</body>
</html>
