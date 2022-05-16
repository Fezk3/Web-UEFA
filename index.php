<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UEFA</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/script.js" defer></script>
</head>

<body>
  <header>
    <?php include_once("navbar.php"); ?>
  </header>


  <?php
  if (isset($_SESSION['mensajeBienvenida'])) {
  ?>
    <div class="alert alert-primary alert-dismissible fade show mt-1" role="alert">
      <strong><?php echo $_SESSION['mensajeBienvenida'] ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
    unset($_SESSION['mensajeBienvenida']);
  }
  ?>

  <div class="container mt-3 md-mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <h3 class="text-center text-black">Información campeonatos continentales</h3>
        <br>
        <br>
        <ul class="tabs">
          <li data-tab-target="#caf" class="active tab">CAF</li>
          <li data-tab-target="#concacaf" class="tab">CONCACAF</li>
          <li data-tab-target="#conmebol" class="tab">CONMEBOL</li>
          <li data-tab-target="#afc" class="tab">AFC</li>
          <li data-tab-target="#uefa" class="tab">UEFA</li>
          <li data-tab-target="#ofc" class="tab">OFC</li>
        </ul>


        <div class="tab-content">
          <div id="caf" data-tab-content class="active">
            <h1>CAF</h1>
            <p>La Confederación Africana de Fútbol, es la confederación de asociaciones nacionales de fútbol en África.</p>
          </div>
          <div id="concacaf" data-tab-content>
            <h1>CONCACAF</h1>
            <p>La Confederación de Norteamérica, Centroamérica y el Caribe de Fútbol, es la confederación de asociaciones nacionales de fútbol en América del Norte, América Central y las islas del Caribe. </p>
          </div>
          <div id="conmebol" data-tab-content>
            <h1>CONMEBOL</h1>
            <p>La Confederación Sudamericana de Fútbol, es la confederación de asociaciones (federaciones) de fútbol nacionales de América del Sur. </p>
          </div>
          <div id="afc" data-tab-content>
            <h1>AFC</h1>
            <p>La Confederación Asiática de Fútbol, es la confederación de asociaciones nacionales de fútbol en la mayor parte de Asia, Australia, Guam e Islas Marianas del Norte. </p>
          </div>
          <div id="uefa" data-tab-content>
            <h1>UEFA</h1>
            <p>La Unión de Federaciones Europeas de Fútbol, es la confederación europea de asociaciones nacionales de fútbol y máximo ente de este deporte en el continente. Agrupa en la actualidad a 55 asociaciones y es una de las seis confederaciones pertenecientes a la Federación Internacional de Fútbol Asociación (FIFA). </p>
          </div>
          <div id="ofc" data-tab-content>
            <h1>OFC</h1>
            <p>La Confederación de Fútbol de Oceanía,es la confederación de asociaciones nacionales de fútbol en Oceanía. Es el máximo ente de este deporte en el continente y una de las seis confederaciones pertenecientes a la FIFA. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container mt-3 md-mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <h3 class="text-center text-black"> ¿Qué es la UEFA?</h3>
        <center><span class="uefa"><img class="uefa" src="imgs/gif.gif" width="200" height="200" salt="uefa"></span></center>
        <h5>
          La UEFA, la Unión de Federaciones Europeas de Fútbol, es el órgano rector del fútbol europeo. Es una asociación de federaciones, una democracia representativa, y una organización global de 55 federaciones nacionales a lo largo de toda Europa.
          Sus objetivos son, entre otros, hacer frente a todas las cuestiones relativas al fútbol europeo; promover el fútbol en un espíritu de unidad, solidaridad, paz, comprensión y juego limpio sin ningún tipo de discriminación política, de raza, religión, género o cualquier otra.
        </h5>

      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container mt-3 md-mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <h3 class="text-center text-black">Contacto</h3>
        <center>
          <form action="https://formsubmit.co/hillauwu2@gmail.com" method="POST">
            <input class="controls" type="text" name="name" placeholder="Ingrese su Nombre" required>
            <input class="controls" type="email" name="email" placeholder="Ingrese su Correo" required>
            <input class="msj" type="text" name="msj" id="msj" placeholder="Mensaje" required>
            <button class="botons" type="submit">Enviar</button>
            <input type="hidden" name="_next" value="index.php">
        </center>
        </form>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>