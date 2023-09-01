<?php
    echo "<br>";
    $paises = ["Italia","España","Alemania","Andorra","Francia"];
    echo "Mi array \$paises tiene " . count($paises) . " países <br>";
    $consulta = in_array('Alemania',$paises);
    echo "¿Alemania esta en el array? " . ($consulta==1?"Si, esta":"No, esta");
    echo "<br>";
    $indice = array_search('Francia',$paises);
    echo "La posición de Francia en mi array es $indice <br>";
    $indice = array_search('Andorra',$paises);
    echo "La posición de Andorra en mi array es $indice <br>";
    $indice = array_search('España',$paises);
    echo "La posición de España en mi array es $indice <br>";
    $indice = array_search('Italia',$paises);
    echo "La posición de Italia en mi array es $indice <br>";
    $indice = array_search('Nueva Zelanda',$paises);
    echo "La posición de Nueva Zelanda en mi array es " . ($indice == false?" ERROR\ No esta en el array":"$indice");
    echo "<br><br>";
    echo "<h2>Tabla FOREACH Comunidades Autónomas</h2>";
    $comunidades = array("Andalucía" => 'Sevilla', "Aragón" => 'Zaragoza', "Canarias" => 'Santa Cruz de Tenerife / Las Palmas de Gran Canaria	',
        "Cantabria" => 'Santander', "Castilla y León" => 'Valladolid', "Castilla-La Mancha" => 'Toledo', "Cataluña" => 'Barcelona', "Ceuta" => 'Ceuta', "Comunidad Valenciana" => 'Valencia', "Comunidad de Madrid" => 'Madrid', "Extremadura" => 'Mérida', "Galicia" => 'Santiago de Compostela', "Islas Baleares" => 'Palma de Mallorca', "La Rioja" => 'Logroño', "Melilla" => 'Melilla', "Navarra" => 'Pamplona', "País Vasco" => 'Vitoria', "Principado de Asturias" => 'Oviedo', "Región de Murcia" => 'Murcia');
    echo "<table style='border: 2px solid black; width: 90%; margin: auto; text-align: center'><thead><tr><th>Comunidad Autónoma</th><th>Capital</th></tr></thead>";
    foreach ($comunidades as $com => $comunidadesItem) {
        echo "<tbody><tr><td>$com</td><td>$comunidadesItem</td></tr></tbody>";
    }
    echo "</table>";
    echo "<br>";
    echo "<h2>Tabla FOREACH Productos Adidas</h2>";
    $adidas = array("Zapatilla Samba OG" => '120€', "Zapatilla Gazelle" => '110€', "Zapatilla Samba Humanrace" => '200€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Busenitz Pro" => '90€', "Zapatilla Grand Court Cloudfoam Comfort" => '80€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Ultrabounce" => '90€', "Zapatilla Terrex Free Hiker Hiking 2.0" => '200€', "Zapatilla Stan Smith (Bebés)" => '55€');
    echo "<table><thead><tr><th>Producto</th><th>Precio</th></tr></thead>";
    foreach ($adidas as $adi => $adidasItem) {
        echo "<tbody><tr><td>$adi</td><td>$adidasItem</td></tr></tbody>";
    }
    echo "</table>";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Cuarto PHP</title>
</head>
<body>
</body>
</html>