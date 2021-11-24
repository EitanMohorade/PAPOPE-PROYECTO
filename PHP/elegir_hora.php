<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");
    
?>

<form action="listadoturnosPAPOPE.php" method="POST">

    Horario de entrada: <select name="horiario_entrada">
    
        <?php 

            $sql = "SELECT DISTINCT hora_entrada FROM tiempo_disponible WHERE dia_habil LIKE '%" . $_POST['dia'] . "%'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['hora_entrada'] . "</option>";

        }?>
    </select><br><br>

    Horario de salida: <select name="horario_salida">
    
        <?php

            $sql = "SELECT DISTINCT hora_salida FROM tiempo_disponible WHERE dia_habil LIKE '%" . $_POST['dia'] . "%'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['hora_salida'] . "</option>";

        }?>
    </select><br><br>

    <input type="submit" value="Pedir el turno">

</form>

<?php

    if(isset($_POST["dia"]) && isset($_POST["horario_entrada"]) && isset($_POST["horario_salida"]) && isset($_POST["club"])){
        $sql = "INSERT INTO `turnos` VALUES (5,5,'jueves','00:00:00','00:00:00',5,null)";
        $res = consulta($conn, $sql);
        header('Location: listadoturnosPAPOPE.php');
    };

?>


<!-- ". $_SESSION['id_cuenta']." -->