<?php
$mysqli = new mysqli("progra4db.cmzh0m6dfbbz.us-east-1.rds.amazonaws.com", "root", "lain*-330*", "uefa");
if (mysqli_connect_errno()) {
    die("Este sitio esta presentando problemas");
}
$mysqli->set_charset("utf8");
