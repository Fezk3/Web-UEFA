<?php
if (!isset($_GET['GRUPO'])) {
    header('Location: http://localhost:63342/Web-UEFA/tablaPosiciones/index.php');
    exit();
}
$grupo = $_GET['GRUPO'];
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

                    </tr>
                </thead>
                <tbody id="info">
                    <?php
                    $query = "SELECT NOMBRE FROM uefa.partidos_'{$grupo}' WHERE GRUPO = '{$grupo}' ORDER BY PTS DESC;";
                    $resultado = $mysqli->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>{$row['NOMBRE']}</td>
                    <td><input required class='form-control' name='GL' id='exampleFormControlInput1' /></td>
                    <td>{$row['NOMBRE']}</td>
                    <td></td>
                    </tr>                     
                        ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>