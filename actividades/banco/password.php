<?php
include "header.php";
?>
    <div class="caja-negra">
        <div class="numeracion">
            <span class="numero-activo">Convertir a Hash</span>
        </div>
    </div>
    <div class="caja-blanca">
        <h3>¡Averigua tu contraseña encriptada!</h3>
        <form action="" method="get" class="formulario">
            <div class="form-centrado">
                <input type="text" class="input" id="password" name="password" placeholder="Introduce tu contraseña"
                       required>
            </div>
            <p class="centrado">
                <input type="submit" class="btn" value="Encriptar" id="enviar" name="enviar">
                <input type="reset" class="btn" value="Limpiar" id="limpiar">
            </p>
        </form>
    </div>
<?php
if (isset($_GET['password'])) {
    $encriptar = password_hash($_GET['password'], PASSWORD_BCRYPT);
    echo "<br> El password encriptado " . $_GET['password'] . " es: " . $encriptar;
}