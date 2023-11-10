<?php
include "header.php";
?>
<div class="caja-negra">
    <div class="numeracion">
        <span class="numero-activo">Iniciar Sesión</span>
    </div>
</div>
<div class="caja-blanca">
    <h3>¡Bienvenido de nuevo!</h3>
    <p>Inicia sesión para ver los usuarios registrados en nuestro programa</p>
    <form method="post" id="login" class="formulario" action="validarLogin.php" novalidate>
        <div class="form-izquierda">
            <input type="email" class="input" id="email" name="email" placeholder="Introduce el Email" required>
        </div>
        <div class="form-derecha">
            <input type="password" class="input" id="password" name="password" placeholder="Introduce la contraseña"
                   required>
        </div>
        <div class="acciones">
            <p class="centrado">
                <input type="submit" class="btn" value="Entrar" id="enviar" name="enviar">
                <input type="reset" class="btn" value="Limpiar" id="limpiar">
            </p>
        </div>
        <div class="row"></div>
        <br><br>
        <div class="form-centrado">
            <?php
            if (isset($_GET['mensaje'])) {
                echo "<p class='errors'>" . $_GET['mensaje'] . "</p>";
            }
            ?>
        </div>
        <br>
        <div class="form-centrado">
            <p class="parrafos">¿Has olvidado la contraseña? <a href="password.php" class="numero-activo">Cambiar
                    Contraseña</a></p>
            <br>
            <p class="parrafos">¿No tienes una cuenta? Registrate: <a href="registro.php" class="numero-activo">Aquí</a>
            </p>
        </div>
    </form>
</div>
<script src="js/script.js"></script>