<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
	
<?php
require 'define.php';
require 'conect.php';

$sql_c = mysql_query("SELECT * FROM usuarios 
						WHERE usuario='".$_POST["usuario"]."' 
						AND contrasena='".$_POST["password"]."'");
		
if (mysql_num_rows($sql_c)==0){
?>
	<script type="text/javascript">
		alert('Usuario y/o password inexistentes');
		window.location='index.php'
	</script>
<?php
}
else{
	$row = mysql_fetch_assoc($sql_c);
	if(isset($_POST['recordar'])){
		if($_POST['recordar'] == true){
			mt_srand(time());
			$rand = mt_rand(1000000,9999999);
			$user = $row['id_usuario'];
			$sql = mysql_query("UPDATE usuarios SET cookie='".$rand."' WHERE id_usuario=".$user." ");
			setcookie("id_user", $user, time()+(60*60*24*365));
			setcookie("marca", $rand, time()+(60*60*24*365));
		}
		else{
			unset($_COOKIE['id_user']);
			setcookie("id_user", '', time() - 3600);
			unset($_COOKIE['marca']);
			setcookie("marca", '', time() - 3600);
		}
	}else{
		unset($_COOKIE['id_user']);
		setcookie("id_user", '', time() - 3600);
		unset($_COOKIE['marca']);
		setcookie("marca", '', time() - 3600);
	}
	
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['password'] = $_POST['password'];
	echo '<script type="text/javascript">window.location="admin_usuarios.php"</script>';
}


?>
</body>
</html>