<?php
session_start();
require_once './conexion.php';

$queryCount = "SELECt count(*) as contador FROM uefa.partidos_a;";
$resultado = $mysqli->query($queryCount);
while ($row = $resultado->fetch_assoc()) {
    if ($row['contador'] != 0) {
        header('Location: http://54.242.69.39/Web-UEFA/index.php');
        exit();
    }
}

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

while ($equipos) {
    $random = rand(1, 8);

    if ($random == 1) {
        if ($cantidadA < 4) {
            $grupoA[] = array_pop($equipos);
            $cantidadA++;
            /*continue;*/
        }
    } else {
        $random = rand(2, 8);
    }

    if ($random == 2) {
        if ($cantidadB < 4) {
            $grupoB[] = array_pop($equipos);
            $cantidadB++;
            /*continue;*/
        }
    } else {
        $random = rand(3, 8);
    }

    if ($random == 3) {
        if ($cantidadC < 4) {
            $grupoC[] = array_pop($equipos);
            $cantidadC++;
            /*continue;*/
        }
    } else {
        $random = rand(4, 8);
    }

    if ($random == 4) {
        if ($cantidadD < 4) {
            $grupoD[] = array_pop($equipos);
            $cantidadD++;
            /*continue;*/
        }
    } else {
        $random = rand(5, 8);
    }

    if ($random == 5) {
        if ($cantidadE < 4) {
            $grupoE[] = array_pop($equipos);
            $cantidadE++;
            /*continue;*/
        }
    } else {
        $random = rand(6, 8);
    }

    if ($random == 6) {
        if ($cantidadF < 4) {
            $grupoF[] = array_pop($equipos);
            $cantidadF++;
            /*continue;*/
        }
    } else {
        $random = rand(7, 8);
    }

    if ($random == 7) {
        if ($cantidadG < 4) {
            $grupoG[] = array_pop($equipos);
            $cantidadG++;
            /*continue;*/
        }
    } else {
        $random = 8;
    }

    if ($random == 8) {
        if ($cantidadH < 4) {
            $grupoH[] = array_pop($equipos);
            $cantidadH++;
        }
    }
}


foreach ($grupoA as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'A' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoB as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'B' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoC as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'C' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoD as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'D' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoE as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'E' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoF as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'F' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoG as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'G' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}
foreach ($grupoH as $a) {
    $update = "UPDATE uefa.equipos SET GRUPO = 'H' WHERE NOMBRE = '{$a}'";
    $mysqli->query($update);
}


// creacion de partidos en tablas partido

// Grupo A partidos
$local = $grupoA[0];

$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[3]')";
$mysqli->query($query);

$local = $grupoA[1];

$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[3]')";
$mysqli->query($query);

$local = $grupoA[2];

$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[3]')";
$mysqli->query($query);

$local = $grupoA[3];

$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_a (LOCAL, VISITANTE) VALUES ('$local', '$grupoA[2]')";
$mysqli->query($query);

// Grupo B partidos

$local = $grupoB[0];

$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[3]')";
$mysqli->query($query);

$local = $grupoB[1];

$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[3]')";
$mysqli->query($query);

$local = $grupoB[2];

$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[3]')";
$mysqli->query($query);

$local = $grupoB[3];

$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_b (LOCAL, VISITANTE) VALUES ('$local', '$grupoB[2]')";
$mysqli->query($query);

// Grupo C partidos

$local = $grupoC[0];

$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[3]')";
$mysqli->query($query);

$local = $grupoC[1];

$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[3]')";
$mysqli->query($query);

$local = $grupoC[2];

$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[3]')";
$mysqli->query($query);

$local = $grupoC[3];

$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_c (LOCAL, VISITANTE) VALUES ('$local', '$grupoC[2]')";
$mysqli->query($query);

// Grupo D partidos

$local = $grupoD[0];

$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[3]')";
$mysqli->query($query);

$local = $grupoD[1];

$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[3]')";
$mysqli->query($query);

$local = $grupoD[2];

$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[3]')";
$mysqli->query($query);

$local = $grupoD[3];

$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_d (LOCAL, VISITANTE) VALUES ('$local', '$grupoD[2]')";
$mysqli->query($query);

// Grupo E partidos

$local = $grupoE[0];

$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[3]')";
$mysqli->query($query);

$local = $grupoE[1];

$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[3]')";
$mysqli->query($query);

$local = $grupoE[2];

$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[3]')";
$mysqli->query($query);

$local = $grupoE[3];

$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_e (LOCAL, VISITANTE) VALUES ('$local', '$grupoE[2]')";
$mysqli->query($query);

// Grupo F partidos

$local = $grupoF[0];

$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[3]')";
$mysqli->query($query);

$local = $grupoF[1];

$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[3]')";
$mysqli->query($query);

$local = $grupoF[2];

$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[3]')";
$mysqli->query($query);

$local = $grupoF[3];

$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_f (LOCAL, VISITANTE) VALUES ('$local', '$grupoF[2]')";
$mysqli->query($query);

// Grupo G partidos

$local = $grupoG[0];

$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[3]')";
$mysqli->query($query);

$local = $grupoG[1];

$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[3]')";
$mysqli->query($query);

$local = $grupoG[2];

$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[3]')";
$mysqli->query($query);

$local = $grupoG[3];

$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_g (LOCAL, VISITANTE) VALUES ('$local', '$grupoG[2]')";
$mysqli->query($query);

// Grupo H partidos

$local = $grupoH[0];

$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[3]')";
$mysqli->query($query);

$local = $grupoH[1];

$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[2]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[3]')";
$mysqli->query($query);

$local = $grupoH[2];

$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[3]')";
$mysqli->query($query);

$local = $grupoH[3];

$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[0]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[1]')";
$mysqli->query($query);
$query = "INSERT INTO partidos_h (LOCAL, VISITANTE) VALUES ('$local', '$grupoH[2]')";
$mysqli->query($query);


header('Location: http://54.242.69.39/Web-UEFA/partidos.php');
