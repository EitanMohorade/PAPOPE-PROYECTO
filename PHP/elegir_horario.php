<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");

?>

<form action="listadoturnosPAPOPE.php" method="post">

    <select name="hora_entrada">
    
        <?php 

            $sql = "SELECT DISTINCT nombre_cuenta FROM cuentas WHERE tipo_id_cuenta = '2'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_cuenta'] . "</option>";

        }?>

    </select><br><br>

    <select name="hora_salida">
    
        <?php 

            $sql = "SELECT nombre_cuenta FROM cuentas WHERE tipo_id_cuenta = '2'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_cuenta'] . "</option>";

        }?>

    </select><br><br>

    <input type="submit" value="Pedir Turno">

</form>

<?php

if(isset($_POST["dia"]) && isset($_POST["horario"]) && isset($_POST["club"])){
    $sql = "INSERT INTO turnos VALUES (null,". $_SESSION['id_cuenta'].",'" . $_POST['dia'] . "','" . $_POST['horario'] . "','" . $_POST['club'] . "', null)";
    $res = consulta($conn, $sql);
    header('Location: listadoturnosPAPOPE.php');
};

?>