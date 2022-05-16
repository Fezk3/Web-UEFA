<?php
/*session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo "Esta página es solo para usuarios registrados. <br> <br>";
    echo "<a href='./index.php'>LOGIN</a>";
    exit();
}

$now = time();

if ($now > $_SESSION['expire']) {
    session_destroy();

    echo "Su sesión ha caducado";
    echo "<a href='./index.php'>NECESITA HACER LOGIN</a>";
    exit();
}

if ($_SESSION['tipo_usuario'] != 1) {
    //   header('Location: http://34.207.191.253/sistema_colegio_humanista/index.php');
    //    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion UEFA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styleadmin.css">
</head>

<body>

    <header>
        <?php include_once("navbar.php"); ?>
    </header>

    <?php
    if (isset($_SESSION['mensaje1'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
            <strong><?php echo $_SESSION['mensaje1'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['mensaje1']);
    }
    if (isset($_SESSION['mensaje2'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong><?php echo $_SESSION['mensaje2'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['mensaje2']);
    }
    if (isset($_SESSION['mensaje3'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
            <strong><?php echo $_SESSION['mensaje3'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['mensaje3']);
    }
    if (isset($_SESSION['mensaje4'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong><?php echo $_SESSION['mensaje4'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['mensaje4']);
    }
    ?>


    <di class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col col-md-8">
                <h1 class="text-center mt-4 mb-3">Administracion de Equipos Participantes</h1>
            </div>
        </div>
    </di>

    <div class="container">
        <div class="row">

            <form action="./procesosphp/agregaequipo.php" class="needs-validation" method="GET" novalidate>

                <div class="col-12 col-md-8 col-lg-6 m-auto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label ">Nombre del Equipo</label>
                        <input required class="form-control" name="NOMBRE" id="exampleFormControlInput1" />
                        <div class="invalid-feedback">
                            Ingrese un Nombre de equipo
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label ">Pais Origen del equipo</label>
                        <input required class="form-control" id="exampleFormControlInput1" name="PAIS" />
                        <div class="invalid-feedback">
                            Ingrese un Pais
                        </div>
                    </div>

                </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-5 col-md-2 col-lg-2 text-center">
            <button class="btn btn-success btn-block btn-lg mt-4" id="agrega" style="width: 100%;">Agregar</button>
        </div>
    </div>

    </form>

    <!-- tabla con los equipos -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <?php
                include_once("procesosphp/conexion.php");
                $query_verifica_32 = 'SELECT count(*) FROM equipos';
                $result_verifica_32 = $mysqli->query($query_verifica_32);
                $total =  $result_verifica_32->fetch_assoc()['count(*)'];
                ?>

                <h1 class="text-center mt-4 mb-3">Equipos Registrados <strong id="contador"><?php echo $total ?></strong></h1>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-11">
                    <table class="table table-primary table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Equipo</th>
                                <th scope="col">País Origen</th>
                                <th scope="col">Opcion</th>
                            </tr>
                        </thead>
                        <tbody id="info">
                            <?php
                            require_once "procesosphp/conexion.php";
                            $query = "SELECT NOMBRE, PAIS FROM equipos";
                            $consulta = $mysqli->query($query);
                            if ($consulta->num_rows >= 1) {
                                while ($fila = $consulta->fetch_array(MYSQLI_ASSOC)) {
                                    echo "<tr>
                                <td class='text-center op '>" . $fila['NOMBRE'] . "</td>
                                <td class='text-center op '>" . $fila['PAIS'] . "</td>
                               <td class='text-center op'>
                                    <a class='btn btn-danger editar' href=procesosphp/eliminaequipo.php?NOMBRE=" . $fila['NOMBRE'] . ">Eliminar</a>
                                </td>
                              </tr>";
                                }
                                echo "</tbody>
                        </table>";
                            } else {
                                echo "<h1 text-center>Error en la base de datos</h1>";
                            }
                            ?>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-4 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-3 col-lg-4 text-center">
                <a href="./procesosphp/sorteo.php" class="btn btn-lg btn-primary" id="sorteo"> Hacer Sorteo </a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <script src="./js/app.js"></script>

</body>

</html>