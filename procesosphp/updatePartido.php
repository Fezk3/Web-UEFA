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

/*----------LEER DE BASE-------------*/

$select = "SELECT * FROM uefa.equipos WHERE NOMBRE = '{$local}'";
$query = $mysqli->query($select);
$localPJ = 0;
$localPG = 0;
$localPP = 0;
$localPE = 0;
$localGF = 0;
$localGC = 0;
$localGD = 0;
$localPTS = 0;
while ($fila = $query->fetch_array()){
    $localPJ = $fila['PJ'];
    $localPG = $fila['PG'];
    $localPP = $fila['PP'];
    $localPE = $fila['PE'];
    $localGF = $fila['GF'];
    $localGC = $fila['GC'];
    $localGD = $fila['GD'];
    $localPTS = $fila['PTS'];
}

$select = "SELECT * FROM uefa.equipos WHERE NOMBRE = '{$visitante}'";
$query = $mysqli->query($select);
$visitantePJ = 0;
$visitantePG = 0;
$visitantePP = 0;
$visitantePE = 0;
$visitanteGF = 0;
$visitanteGC = 0;
$visitanteGD = 0;
$visitantePTS = 0;
while ($fila = $query->fetch_array()){
    $visitantePJ = $fila['PJ'];
    $visitantePG = $fila['PG'];
    $visitantePP = $fila['PP'];
    $visitantePE = $fila['PE'];
    $visitanteGF = $fila['GF'];
    $visitanteGC = $fila['GC'];
    $visitanteGD = $fila['GD'];
    $visitantePTS = $fila['PTS'];
}


/*----------UPDATES-------------*/

    $localPJ = $localPJ + 1;
    $localGF = $localGF + $Glocal;
    $localGC = $localGC + $Gvisitante;


    $visitantePJ = $visitantePJ + 1;
    $visitanteGF = $visitanteGF + $Gvisitante;
    $visitanteGC = $visitanteGC + $Glocal;

if ($Glocal > $Gvisitante){//GANA LOCAL Y PIERDE VISITANTE
    $localPG = $localPG + 1;
    $localGD = $localGD + ($Glocal - $Gvisitante);
    $localPTS = $localPTS + 3;

    $visitantePP = $visitantePP + 1;
    $visitanteGD = $visitanteGD - ($Glocal - $Gvisitante);

    $updatePartidosL = "UPDATE uefa.equipos SET PJ = {$localPJ}, PG = {$localPG}, GF = {$localGF}, GC = {$localGC}, GD = {$localGD}, PTS = {$localPTS} WHERE NOMBRE = '{$local}' ";
    $mysqli->query($updatePartidosL);

    $updatePartidosV = "UPDATE uefa.equipos SET PJ = {$visitantePJ}, PP = {$visitantePP}, GF = {$visitanteGF}, GC = {$visitanteGC}, GD = {$visitanteGD}, PTS = {$visitantePTS}  WHERE NOMBRE = '{$visitante}'";
    $mysqli->query($updatePartidosV);

}elseif ($Glocal < $Gvisitante){//PIERDE LOCAL Y GANA VISITANTE
    $localPP = $localPP + 1;
    $localGD = $localGD - ($Glocal - $Gvisitante);

    $visitantePG = $visitantePG + 1;
    $visitanteGD = $visitanteGD + ($Gvisitante - $Glocal);
    $visitantePTS = $visitantePTS + 3;

    $updatePartidosL = "UPDATE uefa.equipos SET PJ = {$localPJ}, PP = {$localPP}, GF = {$localGF}, GC = {$localGC}, GD = {$localGD}, PTS = {$localPTS} WHERE NOMBRE = '{$local}' ";
    $mysqli->query($updatePartidosL);

    $updatePartidosV = "UPDATE uefa.equipos SET PJ = {$visitantePJ}, PG = {$visitantePG}, GF = {$visitanteGF}, GC = {$visitanteGC}, GD = {$visitanteGD}, PTS = {$visitantePTS}  WHERE NOMBRE = '{$visitante}'";
    $mysqli->query($updatePartidosV);

}else{//EMPATARON
    $localPE = $localPE + 1;
    $localPTS = $localPTS + 1;

    $visitantePE = $visitantePE + 1;
    $visitantePTS = $visitantePTS + 1;

    $updatePartidosL = "UPDATE uefa.equipos SET PJ = {$localPJ}, PE = {$localPE}, GF = {$localGF}, GC = {$localGC}, GD = {$localGD}, PTS = {$localPTS} WHERE NOMBRE = '{$local}' ";
    $mysqli->query($updatePartidosL);

    $updatePartidosV = "UPDATE uefa.equipos SET PJ = {$visitantePJ}, PE = {$visitantePP}, GF = {$visitanteGF}, GC = {$visitanteGC}, GD = {$visitanteGD}, PTS = {$visitantePTS}  WHERE NOMBRE = '{$visitante}'";
    $mysqli->query($updatePartidosV);
}

header('Location: http://localhost:63342/Web-UEFA/partidos.php');
exit();
