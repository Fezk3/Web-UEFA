<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./imgs/uefa.png" width="80" alt="" class="d-inline-block align-middle mr-2" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./posiciones.php">Tabla con Posiciones</a>
                </li>
                <li class="nav-item">
                    <?php
                    require_once './procesosphp/conexion.php';

                    $queryCount = "SELECt count(*) as contador FROM uefa.partidos_a;";
                    $resultado = $mysqli->query($queryCount);
                    while ($row = $resultado->fetch_assoc()) {
                        $contador = $row['contador'];
                    }

                    if (isset($_SESSION['loggedin']) && $contador == 0) {
                        echo '<a href="./admin.php" class="btn btn-primary mt-1">Menu Admin</a>';
                    } else if (isset($_SESSION['loggedin']) && $contador != 0) {
                        echo '<a href="./partidos.php" class="btn btn-primary mt-1">Menu Admin</a>';
                    }
                    ?>
                </li>
            </ul>
            <span>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<a href="procesosphp/logout.php" class="btn btn-danger mt-1">CERRAR SESIÓN</a>';
                } else {
                    echo '<a href="./login.php" class="btn btn-success mt-1">INICIAR SESIÓN</a>';
                }
                ?>
            </span>
        </div>
    </div>
</nav>