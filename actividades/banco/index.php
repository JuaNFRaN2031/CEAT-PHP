<?php
    include 'header.php';
?>
<body>
    <div class="caja-negra">
        <div class="numeracion">
            <span class="numero-activo">1</span>
            <span class="material-symbols-outlined">
                arrow_forward
            </span>
            <span class="numero-inactivo">2</span>
            <span class="material-symbols-outlined">
                arrow_forward
            </span>
            <span class="numero-inactivo">3</span>
        </div>
    </div>
    <div class="caja-blanca">
        <h3>¡Comencemos!</h3>
        <p>Por favor necesitamos estos datos para iniciar tu proceso de alta:</p>
        <form method="post" id="formulario" class="formulario">
            <div class="form-izquierda">
                <label for="dni">DNI</label>
                <input type="text" class="input" id="dni" name="dni" placeholder="Introduce el DNI">
                <p>00000000A</p>
                <label for="mail">EMAIL</label>
                <input type="email" class="input" id="mail" name="mail" placeholder="Introduce el Email">
                <p>usuario@dominio.ext</p>
            </div>
            <div class="form-derecha">
                <label for="telefono">TELÉFONO</label>
                <input type="text" datatype="tel" class="input" id="telefono" name="telefono" placeholder="Introduce el télefono">
                <p>999 99 99 99</p>
                <label for="mail2">CONFIRMACIÓN EMAIL</label>
                <input type="email" class="input" id="mail2" name="mail2" placeholder="Confirma el Email">
                <p>usuario@dominio.ext</p>
            </div>
            <div class="acciones">
                <p>
                    <input type="checkbox" id="casilla">
                    He leído y acepto las <a href="https://aepd.es" target="_blank">políticas de privacidad y de protección de
                        datos</a>
                </p>
                <p>
                    <input type="submit" class="btn" value="Siguiente" name="enviar" disabled>
                    <input type="reset" class="btn" value="Limpiar">
                </p>
            </div>
        </form>
    </div>
</body>