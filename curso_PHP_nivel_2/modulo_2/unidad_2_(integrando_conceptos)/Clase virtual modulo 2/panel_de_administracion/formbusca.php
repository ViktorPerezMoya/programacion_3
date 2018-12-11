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
              <h3> Busqueda de vehiculos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
<br>
<form id="form" name="form" method="post" action="buscacoches.php" class="form-horizontal">
    <div class="control-group">
    <label class="control-label" for="marca">Marca</label>
    <div class="controls">

      <select name="marca" id="marca">
        <option value="ninguna" selected="selected">Seleccione una marca...</option>
        <?php
          $result = mysqli_query($conexion, "SELECT * FROM marcas order by marca") or die (mysqli_error($conexion));

          while($row=mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['id'].'">'.$row['marca'].'</option>';
          }
        ?>
  
      </select>
    </div>
    </div>
  
    <div class="control-group">
    <label class="control-label" for="modelo">Modelo</label>
    <div class="controls">

    <input name="modelo" type="text" id="modelo" size="45" />
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="fecha">A&ntilde;o</label>
    <div class="controls">
    <input name="fecha" type="text" size="10" id="fecha" />
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="precio">Precio</label>
    <div class="controls">
    <input name="precio" type="text" size="10" id="precio" />
    </div>
    </div>

  <div class="control-group">
  <div class="controls">
  <input name="Enviar" type="submit" value="Enviar" />
  </div>
  </div>
  <br><br><br>
</form>
              </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <!-- /widget -->
          </div>
          </div>
          </div>
          </div>
          </div>
         
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
