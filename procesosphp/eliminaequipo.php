<?php

session_start();

require_once "conexion.php";

if (isset($_GET['NOMBRE'])) {
    $nombre = $_GET['NOMBRE'];
    $query = "DELETE FROM equipos WHERE NOMBRE = '$nombre'";
    if ($mysqli->query($query)) {

        $_SESSION['mensaje3'] = "Se ha eliminado el equipo:" . $nombre . ".";
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    } else {

        $_SESSION['mensaje4'] = "Error, no se ha podido eliminar el equipo: " . $nombre;
        header('Location: http://54.242.69.39/Web-UEFA/admin.php');
        exit();
    }
}
