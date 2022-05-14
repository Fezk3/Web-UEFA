<?php

$mysqli = new mysqli("db-progra4-2022.cmalncukfeas.us-east-1.rds.amazonaws.com", "root", "root123456789", "colegio_humanista");
if (mysqli_connect_errno()) {
    die("Este sitio esta presentando problemas");
}
$mysqli->set_charset("utf8");
