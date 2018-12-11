<?php 
session_start();
if (!isset($_SESSION['usuario'])){
	echo '
	<script type="text/javascript">
		alert("Para acceder a este contenido tiene que estar logueado");
		window.location="ingresar.php"
	</script>';
}
?>
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
<div id="frame_image_top"></div><div id="frame_image_bottom"> </div>
			<hr />
		</div>
		<div id="services">
      <h2>Contenido para usuarios </h2>
			<div id="servicescontent">
	  
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut mi   sed diam posuere tempor. Donec orci arcu, imperdiet vitae viverra at,   hendrerit a est. Vestibulum eu turpis arcu. Nulla pharetra, mi a cursus   aliquet, enim mauris sollicitudin magna, vel venenatis ipsum tortor nec   est. Sed vestibulum nunc ac dolor rhoncus consequat tristique erat   ornare. Proin lacinia purus ipsum. Donec venenatis iaculis ligula et   pulvinar. </p>
<p> Praesent eget eros ligula. Sed tincidunt consequat ultrices. Curabitur   augue lacus, condimentum hendrerit interdum eu, eleifend vel nibh. Nulla   facilisi. Etiam rhoncus imperdiet dui id ornare. Vivamus sit amet   tempus diam. Quisque purus lacus, gravida et bibendum a, euismod id   sapien. Phasellus non sodales lectus. Nunc interdum facilisis nisi   vehicula mollis. Vestibulum hendrerit tincidunt bibendum. Sed pretium   sagittis varius. </p>
<p> In faucibus aliquam purus ac tincidunt. Maecenas egestas pharetra   laoreet. Proin ultricies malesuada justo, eget auctor dolor tincidunt   ac. Mauris nunc nisi, pellentesque non dapibus et, lobortis nec est.   Cras fringilla porta imperdiet. Phasellus blandit, dui eu luctus   tincidunt, dui tellus egestas nunc, elementum egestas nisl risus   sagittis erat. Pellentesque accumsan aliquet augue in luctus. Fusce sit   amet facilisis libero. Cras sagittis est ac lorem consectetur porta   hendrerit turpis consequat. Pellentesque sem nibh, lobortis eu   condimentum a, dignissim hendrerit mi. Curabitur non odio enim. Etiam ut   odio est. Integer porttitor pulvinar dolor. Duis elementum dapibus   faucibus. Nulla facilisi. </p>
<p><a href="salir.php">Cerrar session</a></p>





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
