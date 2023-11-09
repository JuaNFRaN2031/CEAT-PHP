<?php
session_start();
if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"]) && !empty($_POST["edad"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["apellido1"] = $_POST["apellido1"];
    $_SESSION["apellido2"] = $_POST["apellido2"];
    $_SESSION["edad"] = $_POST["edad"];
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
        <span class="numero-inactivo">2</span>
        <span class="material-symbols-outlined">
                    arrow_forward
            </span>
        <span class="numero-activo">3</span>
    </div>
</div>
<div class="caja-blanca">
    <h3>¡Terminamos!</h3>
    <p>El alta en <span style="color: #FFB600">BANCA ONLINE</span> se ha realizado exitosamente. Recibirá en
        breves un Email, para realizar una Videollamada para confirmar los datos.</p>
    <h4>¡Gracias por dejarnos ser tu banco!</h4>
    <div class="acciones">
        <p class="centrado">
            <a href="login.php">
                <input type="button" class="btn" value="Siguiente" id="finalizar" name="finalizar">
            </a>
        </p>
    </div>
</div>
<script src="js/script.js"></script>
</body>