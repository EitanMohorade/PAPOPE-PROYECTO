<html>
<head>
  <link rel="stylesheet" href="stylePAPOPE.css">
</head>
<div>
	<div class="div-tit">
	<h1 class="titulo-pagina">PAPOPESPORTS</h1>
	</div>
		
		<?php if(isset($_SESSION['apellido_cuenta'])) { ?>

		<a href="logoutPAPOPE.php"><input type="button" value="Logout" class="bot"></a>
			
		<a href="usuario_listadoPAPOPE.php"><input type="button" value="Usuarios"class="bot"></a>
			
		<a href="listadoturnosPAPOPE.php"><input type="button" value="Turnos"class="bot"></a>

		<?php }else{ ?>

			<a href="signup.php"><input type="button" value="Signup"class="bot"></a>
			
			<a href="loginPAPOPE.php"><input type="button" value="Log In"class="bot"></a>

		<?php }
		
		
		?>
		
	
</div>
<br>
<br>
<?php if(isset($_SESSION['apellido_contacto'])) {echo "apellido: ".$_SESSION['apellido_contacto']." nombre: ".$_SESSION['nombre_contacto']; }

		?>

<br>
<br>
</html>