<?php
    echo "<h2>Tabla FOREACH Productos Adidas</h2>";
    $adidas = array("Zapatilla Samba OG" => '120€', "Zapatilla Gazelle" => '110€', "Zapatilla Samba Humanrace" => '200€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Busenitz Pro" => '90€', "Zapatilla Grand Court Cloudfoam Comfort" => '80€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Ultrabounce" => '90€', "Zapatilla Terrex Free Hiker Hiking 2.0" => '200€', "Zapatilla Stan Smith (Bebés)" => '55€');
    echo "<table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>";
    foreach ($adidas as $adi => $adidasItem) {
        echo "
        <tbody>
            <tr>
                <td>$adi</td>
                <td>$adidasItem</td>
            </tr>
        </tbody>";
    }
    echo "</table>";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Productos Adidas</title>
    <style>
        h2 {
            text-align: center;
        }
        thead, th {
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        table, td{
            color: white;
            background-color: rgba(145, 145, 145, 0.5);
            border-collapse: collapse;
            text-align: center;
            width: 100px;
            border: 1px solid black;
            padding: 20px;
        }
        table{
            width:90%;
            margin: auto;
        }
    </style>
</head>
<body>
</body>
</html>