<?php
    echo "<h2>Tabla FOREACH Productos Adidas</h2>";
    $adidas = array("Zapatilla Samba OG" => '120€', "Zapatilla Gazelle" => '110€', "Zapatilla Samba Humanrace" => '200€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Busenitz Pro" => '90€', "Zapatilla Grand Court Cloudfoam Comfort" => '80€', "Zapatilla Handball Spezial" => '110€', "Zapatilla Ultrabounce" => '90€', "Zapatilla Terrex Free Hiker Hiking 2.0" => '200€', "Zapatilla Stan Smith (Bebés)" => '55€');
    echo "<table class='adidas'>
            <thead class='adidas-thead'>
                <tr class='adidas-tr'>
                    <th class='adidas-th'>Producto</th>
                    <th class='adidas-th'>Precio</th>
                </tr>
            </thead>";
    foreach ($adidas as $adi => $adidasItem) {
        echo "
        <tbody class='adidas-tbody'>
            <tr class='adidas-tr'>
                <td class='adidas-td'>$adi</td>
                <td class='adidas-td'>$adidasItem</td>
            </tr>
        </tbody>";
    }
    echo "</table>";

    $productos=array(
        array('img/Zapatilla_Adizero_Boston_9.jpg',"Zapatilla Adizero Boston 9",150),
        array('img/Zapatilla_Basket_Profi.jpg',"Zapatilla Basket Profi",100),
        array('img/Zapatilla_Broomfield_Verde.jpg',"Zapatilla Broomfield Verde",100),
        array('img/Zapatilla_Continental_80.jpg',"Zapatilla Continental 80",100),
        array('img/Zapatilla_NMD_R1_Burgundy_.jpg',"Zapatilla NMD R1 Burgundy",70),
        array('img/Zapatilla_Stan_Smith.jpg',"Zapatilla Stan Smith",55),
        array('img/Zapatilla_Superstar.jpg',"Zapatilla Superstar",100),
        array('img/Zapatilla_Ultraboost_Clima_DNA_Naranja.jpg',"Zapatilla Ultraboost Clima DNA Naranja",150),
        array('img/Zapatilla_ZX_2K_Boost_Blanco.jpg',"Zapatilla ZX 2K Boost Blanco",100)
    );
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
        .adidas-thead, .adidas-th {
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        .adidas, .adidas-td{
            color: white;
            background-color: rgba(145, 145, 145, 0.5);
            border-collapse: collapse;
            text-align: center;
            width: 100px;
            border: 1px solid black;
            padding: 20px;
        }
        .adidas{
            width:90%;
            margin: auto;
        }
        .productos-thead, .productos-th {
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        .productos, .productos-td{
            border-collapse: collapse;
            text-align: center;
            width: 100px;
            border: 1px solid black;
            padding: 20px;
        }
        .productos{
            width:90%;
            margin: auto;
        }
        img {
            width: 250px;
            filter: brightness(1.1);
            mix-blend-mode: multiply;
        }
    </style>
</head>
<body>
    <h2>Array tridimensional</h2>
    <table class="productos">
        <thead class="productos-thead">
            <th class="productos-th">Producto</th>
            <th class="productos-th">Descripción</th>
            <th class="productos-th">Precio</th>
        </thead>
        <?php
            for($fila=0;$fila<9;$fila++){
                echo "<tr class='productos-tr'>";
                for ($col=0;$col<3;$col++){

                    if ($col==0){
                        echo "<td class='productos-td'><img src='".$productos[$fila][$col]."'></td>";
                    }else{
                        echo "<td class='productos-td'>".$productos[$fila][$col]."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>