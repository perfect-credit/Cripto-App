<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Borra las cookies de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Evita el almacenamiento en caché en el lado del cliente
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");

// Redirecciona a la página de inicio de sesión
header("Location: /Cripto-App/login.php");
exit;
?>