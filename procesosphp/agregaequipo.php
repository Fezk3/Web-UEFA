<?php

//session_start();

require_once "conexion.php";
$nombre = $_GET['NOMBRE'];
$pais = $_GET['PAIS'];

$query_verifica_32 = 'SELECT count(*) FROM equipos';
$result_verifica_32 = $mysqli->query($query_verifica_32);

$query_verifica_pais = "SELECT count(*) FROM equipos WHERE PAIS = '$pais'";
$result_verifica_pais = $mysqli->query($query_verifica_pais);

if ($result_verifica_32 <= 32) {

    if ($result_verifica_pais == 4) {

        $_SESSION['mensaje5'] = "Error, no se pueden agregar mas de 4 equipos de un mismo pais";
        header('Location: http://localhost/Web-UEFA/admin.php');
    }

    $query = "INSERT INTO equipos (NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
    if ($mysqli->query($query)) {
        $_SESSION['mensaje3'] = "Se ha agregado el equipo: " . $nombre . ".";
        header('Location: http://localhost/Web-UEFA/admin.php');
    } else {
        $_SESSION['mensaje4'] = "Error, no se ha podido agregar el equipo: " . $nombre;
        header('Location: http://localhost/Web-UEFA/admin.php');
    }
} else {

    $_SESSION['mensaje5'] = "Error, no se pueden agregar mas quipos, ya estan los 32";
    header('Location: http://localhost/Web-UEFA/admin.php');
}


/*$query = "INSERT INTO equipos(NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
if ($mysqli->query($query)) {

    $_SESSION['mensaje1'] = "Se ha agregardo el equipo: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
} else {

    $_SESSION['mensaje2'] = "Error, no se ha podido agregar el equipo: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
}*/
