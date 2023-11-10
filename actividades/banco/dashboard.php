<?php
include "model/conexion.php";
$link = connect();
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location:http://localhost:63342/banco/actividades/banco/login.php?mensaje=Usuario no autorizado");
}
$consultaClientes = "SELECT * FROM clientes;";
$resultado = mysqli_query($link, $consultaClientes);
?>
<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Clientes</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>
<body class="pb-4 bg-body-secondary bg-gradient bg-opacity-10">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost:63342/banco/actividades/banco/dashboard.php"><img
                    src="img/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Ir al Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Ir a registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="password.php">Actualizar contraseña</a>
                </li>
            </ul>
            <span class="navbar-text enfasis">
                <?php
                echo $_SESSION['nombre'];
                ?>
            </span>
        </div>
    </div>
</nav>
<br>
<div class="ms-4">
    <h2>Clientes registrados en la aplicación</h2>
</div>
<br>
<div class="card p-2 m-4 mt-0">
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="col-2">ID</th>
                <th scope="col" class="col-5">Nombre</th>
                <th scope="col" class="col-5">Correo Electrónico</th>
            </tr>
            </thead>
            <tbody>
<!--            --><?php
//            foreach ($resultado as $resultadoItem) {
//                echo "<tr>";
//                echo "<th scope=row class='col-2'>" . $resultadoItem['id'] . "</th>";
//                echo "<td class='col-2'>" . $resultadoItem['nombre'] . "</td>";
//                echo "<td class='col-2'>" . $resultadoItem['email'] . "</td>";
//                echo "</tr>";
//            }
//            ?>
            <tr>
                <th scope="row" class="col-2">1</th>
                <td class="col-5">Mark</td>
                <td class="col-5">Otto</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
