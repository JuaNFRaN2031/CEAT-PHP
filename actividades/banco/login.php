<?php
include "header.php";
?>
<div class="caja-negra">
</div>
<div class="caja-blanca">
    <h3>¡Bienvenido!</h3>
    <p>Inicia sesión para ver los usuarios registrados en nuestro programa</p>
    <form method="post" id="formulario" class="formulario" action="../model/Administrador.php" novalidate>
        <div class="form-izquierda">
            <input type="email" class="input" id="mail" name="mail" placeholder="Introduce el Email" required>
        </div>
        <div class="form-derecha">
            <input type="password" class="input" id="input_password" name="password" placeholder="Introduce la contraseña"
                   required>
        </div>
        <div class="acciones">
            <p class="centrado">
                <input type="submit" class="btn" value="Siguiente" id="enviar" name="enviar">
                <input type="reset" class="btn" value="Limpiar" id="limpiar">
            </p>
        </div>
    </form>
</div>