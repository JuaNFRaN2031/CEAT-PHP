<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Cita Previa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Solicitud de Cita Previa</h1>
    <div class="formulario">
        <p class="parrafo-inicial col-12">Indique el servicio que desea solicitar la cita</p>
        <form action="index2.php" id="formulario" method="post" class="formulario2" novalidate>
            <div class="tipo-seguro">
                <div>
                    <label for="seguros">Seguros</label>
                    <input type="radio" id="seguros" name="departamento" value="Seguros">
                </div>
                <div>
                    <label for="juridica">Consultoría Jurídica</label>
                    <input type="radio" id="juridica" name="departamento" value="Juridica">
                </div>
                <div>
                    <label for="administracion">Administración de Comunidades</label>
                    <input type="radio" id="administracion" name="departamento" value="Administracion">
                </div>
            </div>
            <div class="horario col-12">
                <div>
                    <label for="fecha" class="label-horario">Seleccione la fecha: </label>
                    <input type="date" name="fecha" id="fecha" required>
                </div>
                <div>
                    <label for="hora" class="label-horario">Hora: </label>
                    <select name="hora" id="hora" required>
                        <!--9:00 a 14:30 y de 10:30 a 11:30 descanso-->
                        <option value="" disabled selected>Elija una hora</option>
                        <option value="9:00">9:00</option>
                        <option value="9:30">9:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                    </select>
                </div>
            </div>
            <div class="datos col-6">
                <label for="nombre">Nombre y Apellido:</label>
                <br>
                <input type="text" name="nombre" id="nombre" class="datos-input" required>
                <br>
                <label for="correo">Email:</label>
                <br>
                <input type="email" name="correo" id="correo" class="datos-input" required>
                <br>
                <label for="telefono">Teléfono:</label>
                <br>
                <input type="tel" name="telefono" id="telefono" class="datos-input" required>
                <br>
                <label for="mensaje" class="mns">Mensaje:</label>
                <br>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
            </div>
            <div class="botones col-12">
                <button class="button-27 casilla" id="enviar" type="submit">
                    Solicitar Cita
                </button>
                <button class="button-27" type="reset">Limpiar</button>
            </div>
            <div class="politics col-12">
                <div class="checkbox-wrapper-13">
                    <input id="c1-13" type="checkbox" class="casilla">
                    <label for="c1-13">Acepta la <span style="text-decoration: underline">Política de Protección de Datos</span></label>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>