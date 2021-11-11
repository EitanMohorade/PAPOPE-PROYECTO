<html>
<head>
  <link rel="stylesheet" href="stylePAPOPE.css">
</head>
<div>
	<ul>
		<div class="div-tit">
	<h1 class="titulo-pagina">PAPOPESPORTS</h1>
	</div>
		
		<?php if(isset($_SESSION['apellido_cuenta'])) { ?>
		
			<li><a href="logoutPAPOPE.php"><input type="button" value="Logout" class="bot"></a></li>
			
			<li><a href="usuario_listadoPAPOPE.php" class="bot"><input type="button" value="Usuarios"class="bot"></a></li>
			
			<li><a href="listadoturnosPAPOPE.php" class="bot"><input type="button" value="Turnos"class="bot"></a></li>
			
		<?php }else{ ?>
		
			<li><a href="signup.php" class="bot"><input type="button" value="Signup"class="bot"></a></li>
			
			<li><a href="loginPAPOPE.php" class="bot"><input type="button" value="Log In"class="bot"></a></li>
			
		<?php }
		
		
		?>
		
	</ul>
	
</div>
<br>
<br>
<?php if(isset($_SESSION['apellido_contacto'])) {echo "apellido: ".$_SESSION['apellido_contacto']." nombre: ".$_SESSION['nombre_contacto']; }

		?>

<br>
<br>
</html>