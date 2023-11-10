<?php
include "header.php";
?>
<div class="caja-negra">
    <div class="numeracion">
        <span class="numero-activo">Registrarse</span>
    </div>
</div>
<div class="caja-blanca">
    <h3>¡Bienvenido!</h3>
    <p>Registrate en nuestro programa</p>
    <form method="post" id="login" class="formulario" action="alta.php" novalidate>
        <div class="form-centrado">
            <input type="text" class="input" id="nombre" name="nombre" placeholder="Introduce tu nombre y apellidos"
                   required>
        </div>
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
    </form>
</div>
<script src="js/script.js"></script>