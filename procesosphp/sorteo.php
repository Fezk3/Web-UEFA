<?php
require_once './conexion.php';

$query = "SELECT NOMBRE FROM uefa.equipos;";
$equipos = array();
$grupoA = array();
$grupoB = array();
$grupoC = array();
$grupoD = array();
$grupoE = array();
$grupoF = array();
$grupoG = array();
$grupoH = array();
$cantidadA = 0;
$cantidadB = 0;
$cantidadC = 0;
$cantidadD = 0;
$cantidadE = 0;
$cantidadF = 0;
$cantidadG = 0;
$cantidadH = 0;

$resultado = $mysqli->query($query);


while ($row = $resultado->fetch_array()) {
    $equipos[] = $row['NOMBRE'];
}

while ($equipos){
    $random = rand(1, 8);

    if ($random == 1) {
        if ($cantidadA < 4){
            $grupoA[] = array_pop($equipos);
            $cantidadA++;
            /*continue;*/
        }
    } else {
        $random = rand(2, 8);
    }

    if ($random == 2) {
        if ($cantidadB < 4){
            $grupoB[] = array_pop($equipos);
            $cantidadB++;
            /*continue;*/
        }
    } else {
        $random = rand(3, 8);
    }

    if ($random == 3) {
        if ($cantidadC < 4){
            $grupoC[] = array_pop($equipos);
            $cantidadC++;
            /*continue;*/
        }
    } else {
        $random = rand(4, 8);
    }

    if ($random == 4) {
        if ($cantidadD < 4){
            $grupoD[] = array_pop($equipos);
            $cantidadD++;
            /*continue;*/
        }
    } else {
        $random = rand(5, 8);
    }

    if ($random == 5) {
        if ($cantidadE < 4){
            $grupoE[] = array_pop($equipos);
            $cantidadE++;
            /*continue;*/
        }
    } else {
        $random = rand(6, 8);
    }

    if ($random == 6) {
        if ($cantidadF < 4){
            $grupoF[] = array_pop($equipos);
            $cantidadF++;
            /*continue;*/
        }
    } else {
        $random = rand(7, 8);
    }

    if ($random == 7) {
        if ($cantidadG < 4){
            $grupoG[] = array_pop($equipos);
            $cantidadG++;
            /*continue;*/
        }
    } else {
        $random = 8;
    }

    if ($random == 8) {
        if ($cantidadH < 4){
            $grupoH[] = array_pop($equipos);
            $cantidadH++;
        }
    }
}


foreach ($grupoA as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'A' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoB as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'B' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoC as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'C' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoD as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'D' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoE as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'E' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoF as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'F' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoG as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'G' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoH as $a){
    $update = "UPDATE uefa.equipos SET GRUPO = 'H' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}

header('Location: http://localhost:63342/Web-UEFA/');
?>
