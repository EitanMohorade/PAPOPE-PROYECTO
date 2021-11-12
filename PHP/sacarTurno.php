<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");

?>

<form action="sacarTurno.php" method="post">

    Día: <input type="text" name="dia"><br><br>
    Horario: <input type="text" name="horario"><br><br>
    <select name = "club">
    
        <?php 

            $sql = "SELECT nombre_cuenta FROM cuentas WHERE tipo_id_cuenta = '2'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_cuenta'] . "</option>";

        }?>
    </select>
    <input type="submit" onclick="" value="Submit">
</form>

<?php

if(isset($_POST["dia"]) && isset($_POST["horario"]) && isset($_POST["club"])){
    $sql = "INSERT INTO turnos VALUES (null,". $_SESSION['id_cuenta'].",'" . $_POST['dia'] . "','" . $_POST['horario'] . "','" . $_POST['club'] . "', null)";
    $res = consulta($conn, $sql);
    header('Location: listadoturnosPAPOPE.php');
}
?>
