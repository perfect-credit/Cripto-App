<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- CDN Bootstrap--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--- CSS--->
    <link rel="stylesheet" href="css/login.css">
    <!--- Google Font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--- Favicon --->
    <link rel="icon" type="image/x-icon" href="img/user.png">
    <title>Portal Us</title>
</head>

<body>
<div class="container login shadow-lg p-3 mb-5 bg-body-tertiary rounded">
<div class="card text-center border border-success p-2 border-opacity-10">
  <div class="card-header">
  <img src="img/UTC_LOGO.png" class="img-fluid" alt="alternative" width="100px" height="100px">
  </div>
  <div class="card-body">
  <form name="loginForm">
    <div class="mb-3">
       <input type="number" class="form-control poppins-semibold" id="matricula" placeholder="Matricula escolar">
    </div>
   <div class="mb-3">
       <input type="password" class="form-control poppins-semibold" id="psw" placeholder="Contraseña">
    </div>
  <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn btn-primary btn-sm" type="submit"><h6>Iniciar sesion</h6></button>
  </div>
  </form>
  </div>
  <div class="card-footer text-body-secondary">
  <h6>Desarrollado por el grupo 3CPS</h6>
  <br>
  <h6>Universidad Tecnológica de Coahuila © 2024</h6>
  </div>
</div>
</body>
</html>