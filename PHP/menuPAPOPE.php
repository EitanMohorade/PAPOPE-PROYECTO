<div id="header">
	<ul class="nav">
		
		<?php if(isset($_SESSION['apellido_usuario'])) { ?>
		</li>
		<?php } ?>
		<li><a href="usuario_listadoPAPOPE.php">usuarios</a>
			<ul>
				<li><a href="usuario_listadoPAPOPE.php">Listado</a></li>
				
			</ul>
		</li>
		
		<?php if(isset($_SESSION['apellido_usuario'])) { ?>
			<li><a href="logoutPAPOPE.php">Logout</a></li>
		<?php }else{ ?>
			<li><a href="loginPAPOPE.php">Login</a></li>
		<?php } ?>
	</ul>
</div>
<br>
<br>
<?php if(isset($_SESSION['apellido_usuario'])) {echo $_SESSION['apellido_usuario'].", ".$_SESSION['nombre_usuario']; }?>

<br>
<br>