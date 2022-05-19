<?php
session_start();

if (empty($_POST)) {
    header('Location: http://54.242.69.39/Web-UEFA/index.php');
    exit();
}

require_once './conexion.php';

$userID = $_POST['cedula'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM admins WHERE CEDULA = '$userID'";

$result = $mysqli->query($sql);

if ($result->num_rows <= 0) {
    echo "Username o Password incorrectos. <br>";
    echo "<a href='../login.php'>VOLVER A INTENTARLO</a> ";
    exit();
}
$row = $result->fetch_array(MYSQLI_ASSOC);

if ($password == $row['PASSWORD']) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $userID;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

    $_SESSION['mensajeBienvenida'] = "Bienvenido de nuevo " . $userID;;

    header('Location: http://54.242.69.39/Web-UEFA/index.php');
    exit();
} else {
    echo "Username o Password incorrectos. <br>";
    echo "<a href='../login.php'>VOLVER A INTENTARLO</a> ";
}
mysqli_close($conexion);
