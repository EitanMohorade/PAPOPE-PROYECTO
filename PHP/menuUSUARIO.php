<div>
	<ul>
		
	<h1 class="titulo-pagina">PAPOPESPORTS</h1>
				
		
		<?php if(isset($_SESSION['apellido_usuario'])) { ?>
		
			<li><a href="logoutPAPOPE.php">Logout</a></li>
			
			<li><a href="usuario_listadoPAPOPE.php">usuarios</a></li>
			
			<li><a href="listadoturnosPAPOPE.php">turnos</a></li>
			
		<?php }else{ ?>
		
			<li><a href="signup.php">signup</a></li>
			
			<li><a href="loginPAPOPE.php">Login</a></li>
			
		<?php }
		
		
		?>
		
	</ul>
	
</div>
<br>
<br>
<?php if(isset($_SESSION['apellido_usuario'])) {echo "apellido: ".$_SESSION['apellido_usuario']." nombre: ".$_SESSION['nombre_usuario']; }

		if(isset($_SESSION['usuario_id'])) {echo "  id:" .$_SESSION['usuario_id']; }?>

<br>
<br>