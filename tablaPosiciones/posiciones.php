<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>TABLA DE POSICIONES</title>
</head>

<body>

<header>
    <?php
    include_once '../navbar.php';
    ?>
</header>

<main class="content">
    <div class="container">
        <h2 class="text-center">POSICIONES</h2>
        <div class="d-flex carousel-nav">
            <a href="#" class="col active">GRUPO A</a>
            <a href="#" class="col">GRUPO B</a>
            <a href="#" class="col">GRUPO C</a>
            <a href="#" class="col">GRUPO D</a>
            <a href="#" class="col">GRUPO E</a>
            <a href="#" class="col">GRUPO F</a>
            <a href="#" class="col">GRUPO G</a>
            <a href="#" class="col">GRUPO H</a>
        </div>


        <div class="owl-carousel owl-1">
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
            <div class="media-29101 d-md-flex w-100">
                <div class="text">
                    <?php
                    include  './tabla.php';
                    ?>
                </div>
            </div> <!-- .item -->
        </div>
    </div><!--CONTAINER-->
</main><!--CONTENT-->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>