<?php

/*session_start();*/

/*if (!isset($_GET['IDPARTIDO']) || !isset($_GET['LOCAL']) || !isset($_GET['VISITANTE'])){
    header('Location: http://localhost:/Web-UEFA/index.php');
    exit();
}*/

$id  = $_GET['ID'];
$local = $_GET['L'];
$visitante = $_GET['V'];
$Glocal = $_GET['GL'];
$Gvisitante = $_GET['GV'];
$grupo = $_GET['GR'];

require_once "conexion.php";

$updatePartidos = "UPDATE {$grupo} SET GOLES_LOCAL = {$Glocal}, GOLES_VISITANTE = {$Gvisitante} WHERE ID_PARTIDO = {$id}";
$mysqli->query($updatePartidos);






/*if (isset($_GET['NOMBRE'])) {
    $nombre = $_GET['NOMBRE'];
    $query = "DELETE FROM equipos WHERE NOMBRE = '$nombre'";
    if ($mysqli->query($query)) {

        $_SESSION['mensaje3'] = "Se ha eliminado el equipo:" . $nombre . ".";
        header('Location: http://localhost/Web-UEFA/admin.php');
        exit();
    } else {

        $_SESSION['mensaje4'] = "Error, no se ha podido eliminar el equipo: " . $nombre;
        header('Location: http://localhost/Web-UEFA/admin.php');
        exit();
    }
}*/

header('Location: http://localhost:63342/Web-UEFA/partidos.php');
exit();
