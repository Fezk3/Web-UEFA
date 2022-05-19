<?php

session_start();

require_once "conexion.php";
$nombre = $_GET['NOMBRE'];
$nombre = strtoupper($nombre);


$pais = $_GET['PAIS'];
$pais = strtoupper($pais);

$query_verifica_32 = 'SELECT count(*) FROM equipos';
$result_verifica_32 = $mysqli->query($query_verifica_32);
$total =  $result_verifica_32->fetch_assoc()['count(*)']; // total de equipos

$query_verifica_pais = "SELECT count(*) FROM equipos WHERE PAIS = '$pais'";
$result_verifica_pais = $mysqli->query($query_verifica_pais);
$total2 =  $result_verifica_pais->fetch_assoc()['count(*)']; // numero de equipos con el pais especificado

if ($total < 32) {

    $query_existe = "SELECT count(*) FROM equipos WHERE NOMBRE = '{$nombre}';";
    $res_existe = $mysqli->query($query_existe);
    $total_existe =  $res_existe->fetch_assoc()['count(*)']; // total de equipos

    if ($total_existe > 0) {
        $_SESSION['mensajeExiste'] = "¡Error! El equipo que desea agregar ya existe.";
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    }

    if ($total2 == 4) {
        $_SESSION['mensaje5'] = "Error, no se pueden agregar mas de 4 equipos de un mismo pais";
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    }

    $query = "INSERT INTO equipos (NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
    if ($mysqli->query($query)) {
        $_SESSION['mensaje3'] = "Se ha agregado el equipo: " . $nombre . ".";
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    } else {
        $_SESSION['mensaje4'] = "Error, no se ha podido agregar el equipo: " . $nombre;
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    }
} else {
    $_SESSION['mensaje5'] = "Error, no se pueden agregar mas quipos, ya estan los 32";
    header('Location: http://54.242.69.39/Web-UEFA/admin.php');
    exit();
}


/*$query = "INSERT INTO equipos(NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
if ($mysqli->query($query)) {

    $_SESSION['mensaje1'] = "Se ha agregardo el equipo: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
} else {

    $_SESSION['mensaje2'] = "Error, no se ha podido agregar el equipo: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
}*/
