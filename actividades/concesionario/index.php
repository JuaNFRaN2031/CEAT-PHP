<?php
include "header.php";

?>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="img/Quatre_Rodes.png" alt="Logo" width="800" class="d-inline-block align-text-top">
        </a>
    </div>
</nav>
<h2 class="text-center mt-2">REGISTRO VEHICULO</h2>
<form method="post" action="">
    <div class="card bg-light bg-gradient p-4 m-4">
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="matricula" class="form-label">Matricula *</label>
                <input type="text" class="form-control" id="matricula" placeholder="1111-EEE" name="matricula">
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="num_bastidor" class="form-label">Número Bastidor *</label>
                <input type="text" class="form-control" id="num_bastidor" placeholder="Nª bastidor del vehículo"
                       name="num_bastidor">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="id_marca" class="form-label">Marca *</label>
                <select class="form-select" aria-label="Select Marca" ID="id_marca" name="id_marca">
                    <option selected disabled>-- Selecciona una marca --</option>
                    <option value="1">Toyota</option>
                    <option value="2">Volkswagen</option>
                    <option value="3">Seat</option>
                </select>
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" placeholder="Modelo del vehículo"
                       name="modelo">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="cilindrada" class="form-label">Cilindrada</label>
                <input type="text" class="form-control" id="cilindrada" placeholder="Cilindrada del vehiculo"
                       name="cilindrada">
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="potencia" class="form-label">Potencia</label>
                <input type="number" class="form-control" id="potencia" placeholder="Potencia vehículo en CV"
                       name="potencia">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="id_color" class="form-label">Color</label>
                <select class="form-select" aria-label="Select Color" ID="id_color" name="id_color">
                    <option selected disabled>-- Selecciona un color --</option>
                    <option value="1">Azul Metalizado</option>
                    <option value="2">Gris</option>
                    <option value="3">Rojo Metalizado</option>
                    <option value="4">Negro</option>
                </select>
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" placeholder="Precio del vehículo"
                       name="precio">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="id_tipo_motor" class="form-label">Tipo Motor</label>
                <select class="form-select" aria-label="Select Tipo Motor" ID="id_tipo_motor" name="id_tipo_motor">
                    <option selected disabled>-- Selecciona un tipo de motor --</option>
                    <option value="1">Diesel</option>
                    <option value="2">Gasolina</option>
                    <option value="3">Híbrido</option>
                    <option value="4">Eléctrico</option>
                </select>
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="fecha_fabricacion" class="form-label">Fecha Fabricación</label>
                <input type="date" class="form-control" id="fecha_fabricacion" name="fecha_fabricacion">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mb-2">
            <div class="col-5 mb-2 ms-3">
                <label for="extras" class="form-label">Extras</label>
                <input type="text" class="form-control" id="extras" placeholder="Extras del vehículo" name="extras">
            </div>
            <div class="col-5 mb-2 mx-3">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" placeholder="Observaciones del vehículo"
                       name="observaciones">
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </div>
</form>

<div class="card m-4 p-4">
    <?php
    include "model/conexion.php";
    $link = connect();
    if (isset($_POST["matricula"]) && isset($_POST["num_bastidor"]) && isset($_POST["id_marca"])) {
        $matricula = $_POST['matricula'];
        $numBastidor = $_POST['num_bastidor'];
        $id_marca = $_POST['id_marca'];
        $modelo = $_POST['modelo'];
        $cilindrada = $_POST['cilindrada'];
        $potencia = $_POST['potencia'];
        $id_color = $_POST['id_color'];
        $precio = $_POST['precio'];
        $id_tipo_motor = $_POST['id_tipo_motor'];
        $fecha_fabricacion = $_POST['fecha_fabricacion'];
        $extras = $_POST['extras'];
        $observaciones = $_POST['observaciones'];
        $consultaInsert = "INSERT INTO coches (matricula, num_bastidor, id_marca, modelo, cilindrada, potencia, id_color, precio, id_tipo_motor, fecha_fabricacion, extras, observaciones) values ('" . $matricula . "','" . $numBastidor . "'," . $id_marca . ",'" . $modelo . "'," . $cilindrada . "," . $potencia . "," . $id_color . "," . $precio . "," . $id_tipo_motor . ",'" . $fecha_fabricacion . "','" . $extras . "','" . $observaciones . "');";
        $resultado = mysqli_query($link, $consultaInsert);
        if ($resultado) {
             echo "Registro insertado correctamente <br>";
        } else {
             echo "Error al insertar el vehículo <br>";
        }
    }
    $consulta = "SELECT * FROM coches";
    $resultado = mysqli_query($link, $consulta);
    while ($row = mysqli_fetch_array($resultado)) {
        echo "<li>" . $row['matricula'] . " - " . $row['num_bastidor'] . " - " . $row['id_marca'] . " - " . $row['modelo'] . " - " . $row['cilindrada'] . " - " . $row['potencia'] . " - " . $row['id_color'] . " - " . $row['precio'] . " - " . $row['id_tipo_motor'] . " - " . $row['fecha_fabricacion'] . " - " . $row['extras'] . " - " . $row['observaciones'] . "</li>";
    }
    mysqli_free_result($resultado);
    mysqli_close($link);
    ?>
</div>
