<?php

session_start();

require_once "conexion.php";
$nombre = $_POST['NOMBRE'];
$pais = $_POST['PAIS'];
$query = "INSERT INTO EQUIPOS(NOMBRE, PAIS) VALUES ('$nombre', '$pais')";
if ($mysqli->query($query)) {

    $_SESSION['mensaje1'] = "Se ha agregardo el usuario: " . $nombre;

    header('Location: http://34.207.191.253/sistema_colegio_humanista/menu_admin.php');
} else {

    $_SESSION['mensaje2'] = "Error, no se ha podido agregar el usuario: " . $nombre;

    header('Location: http://34.207.191.253/sistema_colegio_humanista/menu_admin.php');
}
