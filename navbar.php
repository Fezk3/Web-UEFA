<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imgs/logo_cole.png" width="90" alt="" class="d-inline-block align-middle mr-2" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <?php
            if (isset($_SESSION['loggedin'])) {
                echo '<a href="./logout.php" class="btn btn-danger mt-1">CERRAR SESIÓN</a>';
            } else {
                echo '<a href="./login.php" class="btn btn-success mt-1">INICIAR SESIÓN</a>';
            }
            ?>
        </div>
    </div>
</nav>