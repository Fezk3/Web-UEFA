<?php
session_start();
if (isset($_SESSION['loggedin'])){
    header('Location: http://localhost:63342/Web-UEFA/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./LOGIN/assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
</head>
<body>

<header>
    <?php
    include_once './navbar.php';
    ?>
</header>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="./imgs/LOGIN.PNG" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <img src="./imgs/LOGO.png" alt="logo" class="logo" height="64" width="64">
<!--                        <div class="brand-wrapper">
                            <img src="./imgs/LOGO.png" alt="logo" class="logo" height="37" width="37">
                        </div>-->
                        <p class="login-card-description mt-3">INICIAR SESIÓN</p>
                        <form action="./procesosphp/checklogin.php" class="needs-validation" method="POST" novalidate>
                            <div class="form-group">
                                <label for="cedula" class="form-label">CEDULA</label>
                                <input required type="text" name="cedula" id="cedula" class="form-control"
                                       placeholder="CÉDULA">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input required type="password" name="password" id="password" class="form-control"
                                       placeholder="***********">
                            </div>
                            <button class="btn btn-success btn-block btn-lg mt-4" style="width: 100%;">Enviar</button>
                        </form>

                        <nav class="login-card-footer-nav">
                            <p>&copy; Todos los derechos reservados</p>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Bootstrap jS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<?php
include_once './procesosphp/validaform.php';
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
