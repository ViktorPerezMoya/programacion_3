<?php
include("top.php");
?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> RESULTADO DE LA B&Uacute;SQUEDA</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                   <div style="padding-left: 20px">
<body><?php
$sql = "SELECT ocasion.*, marcas.marca FROM ocasion JOIN marcas ON marcas.id = ocasion.idmarca WHERE 1 ";

if (isset($_POST['marca'])){
  if ($_POST['marca'] != 'ninguna'){
    $idmarca = $_POST['marca'];
    $sql .= " AND idmarca = $idmarca ";
  }
}

if (isset($_POST['modelo'])){
	$modelo = $_POST['modelo'];
  $sql .= " AND modelo LIKE '$modelo%' ";
}

if (isset($_POST['fecha'])){
	$fecha = $_POST['fecha'];
  $sql .= " AND fecha LIKE '$fecha%' ";
}

if (isset($_POST['precio'])){
	$precio = $_POST['precio'];
  $sql .= " AND precio LIKE '$precio%' ";
}


$consulta = mysqli_query($conexion, $sql);
echo ("<table class='table'>\n");
if (mysqli_num_rows($consulta)!=0){
	
	while($row=mysqli_fetch_array($consulta)) 
	{
	$id=$row['id'];
  $marca=$row['marca'];
	$idmarca=$row['idmarca'];
	$modelo=$row['modelo'];
	$fecha=$row['fecha'];
	$color=$row['color'];
	$precio=$row['precio'];


	
	echo ("<tr>\n");
	echo ("<td><a href='modificarcoche.php?id=$id&marca=$idmarca&modelo=$modelo&color=$color&fecha=$fecha&precio=$precio'>Modificar</a></td>\n");
	echo ("<td><a href='borrarcoche.php?id=$id'>Borrar</a></td>\n");
	echo ("<td><a href='coches.php?id=$id'>".($marca)."</a></td>\n");
	echo ("<td>".($modelo)."</td>\n");
	echo ("<td>".($fecha)."</td>\n");
	echo ("<tr>\n");

	}
}
else{
	echo '<b>No hay coches con las características seleccionadas</b><br /><br />';
}
	echo ("</table>\n");
?>
Si desea modificar algún dato, seleccione la opción "MODIFICAR" en el vehiculo correspondiente.<br>
Si desea borrar un registro, seleccione la opción "BORRAR" en el vehiculo correspondiente.<br>
Si desea ver los datos completos de cada vehículo, seleccione la marca correspondiente.  
</body>
 </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          <!-- /widget -->
          
        <!-- /span12 -->
       

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"><a href="#">PHP y MySQL Intermedio</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
</body>
</html>
