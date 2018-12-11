<?php
	session_start();
	
	if (!isset($_SESSION['usuario'])){
		echo '  <script type="text/javascript">
					alert("Para acceder a este contenido tiene que estar logueado");
					window.location="index.php"
				</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />


<title>Logistica El Caminante</title>

<!--Includes-->
<?php  
  include ('includes/includes.php');
?>

</head>
<body id="admin">	  
	<!--Encabezado-->
	<div id="header" class="clearAfter">
		<div class="pageWidth">
			<h1>
				<a href="index.php">
					<span class="logistica">Logística</span>
					<span class="peregrino">El Caminante</span>
				</a>
			</h1>
			<div id="sesionInfo">
				<a href="salir.php">Cerrar Sesión</a>
			</div>
		</div>
	</div>

	<nav>
		<div class="pageWidth clearAfter">
			<a href="#" class="active">Administración</a>
		</div>
	</nav>

	<div class="pageArea">
		<div class="pageWidth">
			<div id="users">
				<h2>Bienvenido al panel de Administración</h2>
				<?php //echo $_COOKIE['id_user'].'<br />'.$_COOKIE['marca']; ?>
			
			</div>
		</div>
	</div>
	
	<!--Pie-->
	 <?php  
		include ('includes/footer.php');
	?>

        
</body>
</html>
