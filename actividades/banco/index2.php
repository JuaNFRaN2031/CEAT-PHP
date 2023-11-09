<?php
session_start();
if (!empty($_POST["dni"]) && !empty($_POST["mail"]) && !empty($_POST["telefono"]) && !empty($_POST["mail2"])) {
    if ($_POST["mail"] == $_POST["mail2"]) {
        $_SESSION["dni"] = $_POST["dni"];
        $_SESSION["telefono"] = $_POST["telefono"];
        $_SESSION["mail"] = $_POST["mail"];
    } else {
        header("Location:http://localhost:63342/htdocs/actividades/banco/index.php?mns=Los Emails no son iguales");
    }
} else {
    header("Location:http://localhost:63342/htdocs/actividades/banco/index.php?mns=Tienes que rellenar todos los campos");
}
include 'header.php';
?>
<body>
<div class="caja-negra">
    <div class="numeracion">
        <span class="numero-inactivo">1</span>
        <span class="material-symbols-outlined">
                    arrow_forward
            </span>
        <span class="numero-activo">2</span>
        <span class="material-symbols-outlined">
                    arrow_forward
            </span>
        <span class="numero-inactivo">3</span>
    </div>
</div>
<div class="caja-blanca">
    <h3>¡Continuamos!</h3>
    <p>Por favor necesitamos tus últimos datos para terminar con el proceso de alta:</p>
    <form method="post" id="formulario2" class="formulario" action="index3.php">
        <div class="form-izquierda">
            <input type="text" name="nombre" id="nombre" required placeholder="Introduce tu nombre">
            <p>Ejemplo: María</p>

            <input type="number" name="edad" id="edad" required placeholder="Introduce tu edad" min="18" max="85">
            <p>Indica tu edad. Mínimo 18 años</p>
        </div>
        <div class="form-derecha">
            <input type="text" name="apellido1" id="apellido1" required placeholder="Introduce tu primer apellido">
            <p>Ejemplo: García</p>

            <input type="text" name="apellido2" id="apellido2" required placeholder="Introduce tu segundo apellido">
            <p>Ejemplo: Romero</p>
        </div>
        <div class="acciones">
            <p class="centrado">
                <input type="submit" class="btn" value="Siguiente" id="enviar2" name="enviar2">
                <input type="reset" class="btn" value="Limpiar" id="limpiar">
            </p>
        </div>
    </form>
</div>
<script src="../js/script.js"></script>
</body>