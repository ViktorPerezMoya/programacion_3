<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buenos Aires Seguros</title>
<link href="stylesheets/estilos1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15980484-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:747px;
	top:74px;
	width:74px;
	height:75px;
	z-index:1;
	background-image: url(images/contacto.jpg);
}
#apDiv2 {
	position:absolute;
	left:46px;
	top:842px;
	width:749px;
	height:57px;
	z-index:1;
	background-color: #28699f;
	text-align: center;
	padding: 10px;
}
.tipogris a {
	color: #CCC;
}
.tipogris a:hover {
	color: #FFF;
}
-->
</style>
</head>
<body onload="MM_preloadImages('images/auto2.gif')">


<div id="container">
<div id="containertop"></div>

  <div id="main_image">
	  <img src="images/contacto_header.jpg" alt="Main Image" width="860" height="100" />
<div id="frame_image_top"></div><div id="frame_image_bottom"></div>
			<hr />
		</div>
		<div id="services">
      <h2>Registro de usuarios</h2>
			<div id="servicescontent">
			  
		<?php
		include ('conect.php');

		mysql_query ("INSERT INTO usuarios VALUES ('".$_POST['usuario']."', '".$_POST['password']."', '".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['email']."', ".$_POST['dni'].")");

		if (mysql_errno() == 0){
			echo 'El usuario ha sido dado de alta ';
			echo '<a href="ingresar.php">Ingresar</a>';
		}
		else{
			if (mysql_errno() == 1062){

		?>
				<script type="text/javascript">
					alert('Ese nombre de usuario ya existe en la base de datos');
					window.location='registro.php'
				</script>
		<?php		
			}
			else{
				 die ('Error al insertar: '.mysql_error());
			}
		}
		?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
		  </div>
			<p><span class="bottom_rounded"></span></p>
			<hr />
		</div>
	</div>
	<!-- Footer -->
	<div id="footer_wrapper">
		<div id="footer">
		 
		</div>
	</div>

</body>
</html>
