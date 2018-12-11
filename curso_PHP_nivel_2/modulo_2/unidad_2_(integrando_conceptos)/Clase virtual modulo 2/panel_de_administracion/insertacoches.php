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
              <h3> Vehiculo insertado</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                   <div style="padding-left: 20px">

<?php

$idmarca = $_POST['marca'];
$modelo = $_POST['modelo'];
$combustible = $_POST['combustible'];
$color = $_POST['color'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];

$result = mysqli_query($conexion, "SELECT marca FROM marcas WHERE id=$idmarca") or die (mysqli_error($conexion));

$row = mysqli_fetch_assoc($result);


$result = mysqli_query($conexion, "INSERT INTO ocasion (idmarca, modelo, combustible, color, fecha, precio) VALUES ($idmarca, '$modelo', '$combustible', '$color', '$fecha', '$precio')");

echo "<strong>Ha insertado con éxito los siguientes datos:</strong>";
echo "<br><br>";
echo "Marca: <strong>".$row['marca']."</strong><br>";
echo "Modelo: <strong>".($modelo)."</strong><br>";
echo "Combustible: <strong>".($combustible)."</strong><br>";
echo "Color: <strong>".($color)."</strong><br>";
echo "Fecha: <strong>".($fecha)."</strong><br>";
echo "Precio: <strong>".($precio)."</strong><br>";
?>
<h5><a href="index.php">Volver a Home</a></h5>
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
