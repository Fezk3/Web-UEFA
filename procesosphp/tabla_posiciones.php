<?php
if (!isset($_GET['GRUPO'])){
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
                    <th scope="col">CLUB</th>
                    <th scope="col">PJ</th>
                    <th scope="col">PG</th>
                    <th scope="col">PE</th>
                    <th scope="col">PP</th>
                    <th scope="col">GF</th>
                    <th scope="col">GC</th>
                    <th scope="col">DG</th>
                    <th scope="col">PTS</th>
                </tr>
                </thead>
                <tbody id="info">
                    <?php
                    $query = "SELECT * FROM uefa.equipos WHERE GRUPO = '{$grupo}' ORDER BY PTS DESC;";
                    $resultado = $mysqli->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>{$row['NOMBRE']}</td>
                    <td>{$row['PJ']}</td>
                    <td>{$row['PG']}</td>
                    <td>{$row['PE']}</td>
                    <td>{$row['PP']}</td>
                    <td>{$row['GF']}</td>
                    <td>{$row['GC']}</td>
                    <td>{$row['GD']}</td>
                    <td>{$row['PTS']}</td> 
                    </tr>                     
                        ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
