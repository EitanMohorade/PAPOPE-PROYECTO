<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php")

?>

<form action="sacarTurno.php" method="post">

    Día: <input type="text" name="dia"><br><br>
    Horario: <input type="text" name="horario"><br><br>
    <select name = "club">
    
        <?php 
        
        $sql = "SELECT `nombre_cuenta` FROM `cuentas` WHERE tipo_id_cuenta = 2";
        $res = mysqli_query($conn, $sql);
        while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_club'] . "</option>";
        }?>
        <option>a</option>
    </select>
    <input type="submit" onclick="" value="Suma">
</form>

<?php

echo $_POST["dia"] . $_POST["horario"]. $_POST["club"];

$sql = "INSERT INTO turnos VALUES (null, null," . $_POST['dia'] . "," . $_POST['horario'] . "," . $_POST['club'] . ", null)";
$res = mysqli_query($conn, $sql);

function insertar(){}
?>

 