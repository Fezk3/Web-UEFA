<?php

session_start();

require_once "conexion.php";

if (isset($_GET['NOMBRE'])) {
    $nombre = $_GET['NOMBRE'];
    echo $cedula;
    $query = "DELETE FROM EQUIPOS WHERE NOMBRE = '$nombre'";
    if ($mysqli->query($query)) {

        $_SESSION['mensaje5'] = "Se ha eliminado el equipo" . $nombre . ".";

        header('Location: http://34.207.191.253/sistema_colegio_humanista/menu_admin.php');
    } else {

        $_SESSION['mensaje6'] = "Error, no se ha podido eliminar el admin.";

        header('Location: http://34.207.191.253/sistema_colegio_humanista/menu_admin.php');
    }
}
