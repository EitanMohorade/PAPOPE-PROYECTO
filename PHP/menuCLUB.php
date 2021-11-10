<div>
	<ul>
		
	
				
		
		<?php if(isset($_SESSION['nombre_club'])) { ?>
		
			<li><a href="logoutPAPOPE.php">Logout</a></li>
			
			<li><a href="usuario_listadoPAPOPE.php">usuarios</a></li>
			
			<li><a href="listadoturnosPAPOPE.php">turnos</a></li>
			
		<?php }
		
		include "stylePAPOPE.php";
		
		?>
		
	</ul>
	
</div>
<br>
<br>
<?php if(isset($_SESSION['nombre_club'])) {echo "nombre club: ".$_SESSION['nombre_club']." gmail: ".$_SESSION['info_contacto']; }

		if(isset($_SESSION['club_id'])) {echo "  id:" .$_SESSION['club_id']; }?>

<br>
<br>