<?php

//session_start();

require_once "conexion.php";
$nombre = $_GET['NOMBRE'];
$pais = $_GET['PAIS'];
$query = "INSERT INTO equipos(NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
if ($mysqli->query($query)) {

    $_SESSION['mensaje1'] = "Se ha agregardo el equipo: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
} else {

    $_SESSION['mensaje2'] = "Error, no se ha podido agregar el usuario: " . $nombre;

    header('Location: http://localhost/Web-UEFA/admin.php');
}
