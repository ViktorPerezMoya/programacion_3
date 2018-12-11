<?php
	session_start();
	
	if (isset ($_SESSION["usuario"])) {
		echo '<script type="text/javascript">window.location="admin_usuarios.php";</script>';
	} 
	
	require 'define.php';
	require 'conect.php';
	
	$recordar = false; 
	if(isset($_COOKIE['id_user']) && isset($_COOKIE['marca'])){
		if($_COOKIE['id_user']!="" || $_COOKIE['marca']!=""){
			$sql_c = mysql_query("SELECT * FROM usuarios 
						WHERE id_usuario='".$_COOKIE["id_user"]."' 
						AND cookie='".$_COOKIE["marca"]."'
						AND cookie<>'';");
		}
		if(mysql_num_rows($sql_c)){
			$row_c = mysql_fetch_array($sql_c);
			$recordar = true;
		}
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
			<div id="login">
				<h2>Ingreso de Clientes</h2>
				<p>Inicie sesión para conocer el estado de su cuenta.</p>
				<form action="validar.php" method="post">
					<?php
					if ($recordar){
						echo '<input type="text" placeholder="Usuario" name="usuario" value="'.$row_c['usuario'].'">
							  <input type="password" placeholder="Contraseña" name="password" value="'.$row_c['contrasena'].'"><br/><br/>

							  <input type="checkbox" id="recordar" name="recordar" checked="checked">  
							  <label for="remember">Recordarme en este equipo</label>';
					}else{
						echo '<input type="text" placeholder="Usuario" name="usuario">
							  <input type="password" placeholder="Contraseña" name="password"><br/><br/>

							  <input type="checkbox" id="recordar" name="recordar">
							  <label for="remember">Recordarme en este equipo</label>';
					}
					?>
					

					<input type="submit" value="Iniciar Sesión">
				</form>
			</div>
		</div>
	</div>

	<nav>
		<div class="pageWidth clearAfter">
			<a href="index.php" class="active">Servicios</a>
			<a href="#">La Empresa</a>
			<a href="#">Misión, Visión y Valores</a>
			<a href="#">Clientes</a>
		</div>
	</nav>

	<div id="wrapper">
		<div style="text-align: center;">
			<br /><br /><br />Contenido del Sitio
		</div>
	</div>

		
	<!--Pie-->
	 <?php  
		include ('includes/footer.php');
	?>

        
</body>
</html>