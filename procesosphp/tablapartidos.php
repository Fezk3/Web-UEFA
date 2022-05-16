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
                    $query = "SELECT * FROM $grupo";
                    $resultado = $mysqli->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                    <tr>
                    <form action='../procesosphp/updatePartido.php' method='GET'>
                    <td>{$row['LOCAL']}</td>
                    <td>
                        <input required class='form-control' name='GL' id='exampleFormControlInput1' value='{$row['GOLES_LOCAL']}'/>
                    </td>
                    <td>{$row['VISITANTE']}</td>
                    <td>
                        <input  required class='form-control' name='GV' id='exampleFormControlInput1' value='{$row['GOLES_VISITANTE']}' />
                    </td>
                    <td class='text-center op'>
                    <input hidden required class='form-control' name='L' id='exampleFormControlInput1' value='{$row['LOCAL']}' />
                    <input hidden required class='form-control' name='V' id='exampleFormControlInput1' value='{$row['VISITANTE']}' />
                    <input hidden required class='form-control' name='ID' id='exampleFormControlInput1' value='{$row['ID_PARTIDO']}' />
                    <input hidden required class='form-control' name='GR' id='exampleFormControlInput1' value='$grupo' />
                    <button class='btn btn-success btn-block btn-lg mt-4' type='submit'>Actualizar</button>
                </td>
                </form>
                    </tr>                     
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>