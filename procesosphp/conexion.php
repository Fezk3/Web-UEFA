<?php
$mysqli = new mysqli("localhost", "root", "12345UNA", "uefa");
if (mysqli_connect_errno()) {
    die("Este sitio esta presentando problemas");
}
$mysqli->set_charset("utf8");
