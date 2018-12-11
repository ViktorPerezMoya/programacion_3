<?php
include("top.php");
$result = mysqli_query($conexion, "SELECT ocasion.*, marcas.marca FROM ocasion JOIN marcas ON marcas.id = ocasion.idmarca ORDER BY marca") or die (msqli_error($conexion));
?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Listado</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                   <div style="padding-left: 20px">
                  <table class="table">
                      <tr>
                        <td><b>Marca</b></td>
                        <td><b>Modelo</b></td>
                        <td><b>Combustible</b></td>
                        <td><b>Color</b></td>
                        <td><b>Fecha </b></td>
                        <td><b>Precio</b></td>
                      </tr>
                      <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                      <tr>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td><?php echo $row['combustible']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td>$ <?php echo $row['precio']; }?></td>
                      </tr>
                </table>
                </div>
      <?php
mysqli_free_result($result);
mysqli_close($conexion);
?></td>
  </tr>
</table>
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
