<?php
session_start();
require_once './procesosphp/conexion.php';

/*$queryCount = "SELECt count(*) as contador FROM uefa.equipos;";
$resultado = $mysqli->query($queryCount);
while ($row = $resultado->fetch_assoc()) {
    if (!$row['contador'] == 32){
        header('Location: http://localhost:63342/Web-UEFA/index.php');
    }
}*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>POSICIONES UEFA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="../js/script.js" defer></script>
</head>
<body>

<header>
    <?php
    include_once './navbar.php';
    ?>
</header>

<main>
    <div class="container mt-3 md-mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <h3 class="text-center text-black">Información UEFA</h3>
                <br>
                <br>
                <ul class="tabs">
                    <li data-tab-target="#GRUPOA" class="active tab">GRUPO A</li>
                    <li data-tab-target="#GRUPOB" class="tab">GRUPO B</li>
                    <li data-tab-target="#GRUPOC" class="tab">GRUPO C</li>
                    <li data-tab-target="#GRUPOD" class="tab">GRUPO D</li>
                    <li data-tab-target="#GRUPOE" class="tab">GRUPO E</li>
                    <li data-tab-target="#GRUPOF" class="tab">GRUPO F</li>
                    <li data-tab-target="#GRUPOG" class="tab">GRUPO G</li>
                    <li data-tab-target="#GRUPOH" class="tab">GRUPO H</li>
                </ul>

                <br><br>


                <div class="tab-content">
                    <div id="GRUPOA" data-tab-content class="active">
                        <?php
                        $_GET['GRUPO'] = 'A';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOB" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'B';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOC" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'C';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOD" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'D';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOE" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'E';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOF" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'F';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOG" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'G';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                    <div id="GRUPOH" data-tab-content>
                        <?php
                        $_GET['GRUPO'] = 'H';
                        include './procesosphp/tabla_posiciones.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
