<?php
if (!isset($_GET['GRUPO'])) {
    header('Location: http://localhost:63342/Web-UEFA/tablaPosiciones/index.php');
    exit();
}
$grupo = $_GET['GRUPO'];
$grupo = 'uefa.partidos_' . strtolower($grupo);

?>


<div class="container mt-4">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12 ">
            <table class="table table-primary table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">LOCAL</th>
                        <th scope="col">GL</th>
                        <th scope="col">VISITANTE</th>
                        <th scope="col">GV</th>
                        <th scope="col">OPCION</th>

                    </tr>
                </thead>
                <tbody id="info">
                    <?php
                    $query = "SELECT LOCAL, VISITANTE,ID_PARTIDO   FROM $grupo";
                    $resultado = $mysqli->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>{$row['LOCAL']}</td>
                    <td><input required class='form-control' name='GL' id='exampleFormControlInput1' /></td>
                    <td>{$row['VISITANTE']}</td>
                    <td><input required class='form-control' name='GV' id='exampleFormControlInput1' /></td>
                    <td class='text-center op'>
                    <a class='btn btn-primary editar' href=procesosphp/eliminaequipo.php?IDPARTIDO=" . $row['ID_PARTIDO'] . ">Actualizar</a>
                </td>
                    </tr>                     
                        ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>