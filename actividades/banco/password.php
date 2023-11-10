<?php
include "header.php";
include "model/conexion.php";
global $link;
?>
    <div class="caja-negra">
        <div class="numeracion">
            <span class="numero-activo">Cambio de contraseña</span>
        </div>
    </div>
    <div class="caja-blanca">
        <h3>Comprobación de credenciales</h3>
        <form action="" method="get" class="formulario">
            <div class="form-centrado">
                <input type="text" class="input" id="email" name="email" placeholder="Introduce tu email"
                       required>
            </div>
            <div class="form-centrado">
                <input type="password" class="input" id="password" name="password" placeholder="Introduce tu contraseña"
                       required>
                <ul class="lista">
                    <li>Debe contener al menos 8 caractéres</li>
                    <li>Debe tener al menos una mayúscula</li>
                    <li>Debe tener al menos un número</li>
                </ul>
            </div>
            <div class="form-centrado">
                <input type="password" class="input" id="password2" name="password2" placeholder="Repite la contraseña"
                       required>
            </div>
            <p class="centrado">
                <input type="submit" class="btn" value="Comprobar" id="enviar" name="enviar">
                <input type="reset" class="btn" value="Limpiar" id="limpiar">
            </p>
            <br>
            <div class="form-centrado">
                <?php
                if (isset($_GET['email'])) {
                    $email = $_GET['email'];
                    $password = $_GET['password'];
                    $password2 = $_GET['password2'];
                    $link = connect();
                    $consultaEmail = "SELECT * FROM usuarios where email='" . $email . "';";
                    $resultadoEmail = mysqli_query($link, $consultaEmail);
                    $rowEmail = mysqli_num_rows($resultadoEmail);
                    if ($rowEmail != 0) {
                        $registroEmail = mysqli_fetch_assoc($resultadoEmail);
                        $emailBBDD = $registroEmail["email"];
                        echo "El email existe en la base de datos. <br>";
                        if (validarPassword($password)) {
                            echo "La password cumple los requisitos de complejidad <br>";
                            if ($password == $password2) {
                                echo "Las contraseñas coinciden. Vamos a actualizar la Base de datos. <br>";
                                $passwordEncriptada = password_hash($password, PASSWORD_BCRYPT);
                                $actualizar = "UPDATE usuarios SET password='$passwordEncriptada' where email='$email'";
                                $resultadoPassword = mysqli_query($link, $actualizar);
                                if ($resultadoPassword) {
                                    echo "<br> Registro actualizado correctamente <br>";
                                } else {
                                    echo "Error al actualizar el password <br>";
                                }
                            } else {
                                echo "Las contraseñas no son iguales. <br>";
                            }
                        } else {
                            echo "La password NO cumple los requisitos <br>";
                        }
                    } else {
                        echo "No existe ese email en la base de datos. <br>";
                    }
                }
                ?>
            </div>
        </form>
    </div>

<?php
function validarPassword($password)
{
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $password)) {
        return true;
    } else {
        return false;
    }
}