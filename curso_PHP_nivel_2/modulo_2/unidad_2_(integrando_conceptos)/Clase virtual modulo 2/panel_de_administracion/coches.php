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
              <h3> Datos del vehiculo seleccionado</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                   <div style="padding-left: 20px">

<?php

$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT ocasion.*, marcas.marca FROM ocasion JOIN marcas ON marcas.id = ocasion.idmarca WHERE OCASION.id='$id'") or die (mysqli_error($conexion));

while ($row=mysqli_fetch_array($consulta)) {

$id=$row['id'];
$marca=$row['marca'];
$modelo=$row['modelo'];
$fecha=$row['fecha'];
$color=$row['color'];
$combustible=$row['combustible'];
$precio=$row['precio'];

echo "<br>";
echo "Vehículo marca: <strong>".($marca)."</strong><br>";
echo "Modelo: <strong>".($modelo)."</strong><br>";
echo "El color es: <strong>".($color)."</strong><br>";
echo "El combustible que utiliza es: <strong>".($combustible)."</strong><br>";
echo "Es del año: <strong>".($fecha)."</strong><br>";
echo "El precio de este coche es: <strong>$".($precio)."</strong><br>";
}
?>
<h5><a href="formbusca.php">Volver al formulario</a></h5>
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

</body>
</html>

</body>
</html>

</body>
</html>
