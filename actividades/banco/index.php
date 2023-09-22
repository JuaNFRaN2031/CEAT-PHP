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
        <form method="post" id="formulario" class="formulario" action="index2.php" novalidate>
            <div class="form-izquierda">
                <input type="text" class="input" id="dni" name="dni" placeholder="Introduce el DNI" required>
                <p>00000000A</p>

                <input type="email" class="input" id="mail" name="mail" placeholder="Introduce el Email" required>
                <p>usuario@dominio.ext</p>
            </div>
            <div class="form-derecha">
                <input type="text" datatype="tel" class="input" id="telefono" name="telefono" placeholder="Introduce el télefono" required>
                <p>999 99 99 99</p>

                <input type="email" class="input" id="mail2" name="mail2" placeholder="Confirma el Email" required>
                <p>usuario@dominio.ext</p>
            </div>
            <div class="acciones">
                <p>
                    <input type="checkbox" id="casilla">
                    He leído y acepto las <a href="https://aepd.es" target="_blank">políticas de privacidad y de protección de
                        datos</a>
                </p>
                <p class="centrado">
                    <input type="submit" class="btn" value="Siguiente" id="enviar" name="enviar" disabled style="cursor: not-allowed">
                    <input type="reset" class="btn" value="Limpiar" id="limpiar">
                </p>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>