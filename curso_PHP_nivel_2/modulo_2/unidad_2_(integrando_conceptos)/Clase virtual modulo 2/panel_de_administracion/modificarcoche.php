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
              <h3> MODIFIQUE LOS DATOS DEL VEH&Iacute;CULO</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                   <div style="padding-left: 20px">
<body>
<br>
<form id="form2" name="form2" method="post" action="modificarcoche2.php" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="marca">Marca</label>
    <div class="controls">

      <select name="marca" id="marca">
        <option value="0" selected="selected">Seleccione una marca...</option>
        <?php
          $result = mysqli_query($conexion, "SELECT * FROM marcas order by marca") or die (mysqli_error($conexion));

          while($row=mysqli_fetch_assoc($result)){
            if($_GET['marca'] == $row['id']){
              echo '<option value="'.$row['id'].'" selected="selected">'.$row['marca'].'</option>';
            }else{
              echo '<option value="'.$row['id'].'">'.$row['marca'].'</option>';  
            }
          }
        ?>
  
      </select>

    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="modelo">Modelo</label>
    <div class="controls">
      <input name="modelo" type="text" id="modelo" size="45" value="<?php 
    	$modelo = $_GET['modelo'];
    	echo $modelo;
      ?>"/>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="color">Color</label>
    <div class="controls">

    <input name="color" type="text" id="color" size="48" value="<?php 
  	$color = $_GET['color'];
  	echo $color;
    ?>"/>
    </div>
    </div>

    <div class="control-group">
  <div class="controls">
    <label class="radio">
      <input name="combustible" type="radio" value="diesel" id="optionsRadios1" />Diesel
    </label>
    <label class="radio">
      <input name="combustible" type="radio" value="nafta" id="optionsRadios2" checked="cheked" />Nafta
    </label>
    </div>
    </div>
  
     <div class="control-group">
    <label class="control-label" for="fecha">A&ntilde;o</label>
    <div class="controls">
      <input name="fecha" id="fecha" type="text" size="10" value="<?php 
    	$fecha = $_GET['fecha'];
    	echo $fecha;
      ?>"/>
    </div>
    </div>
  
     <div class="control-group">
    <label class="control-label" for="precio">Precio</label>
    <div class="controls"> 
      <input name="precio" type="text" size="10" value="<?php 
    	$precio = $_GET['precio'];
    	echo $precio;
      ?>"/>
    </div>
    </div>

  <input name="id" type="hidden" value="<?php 
	$id = $_GET['id'];
	echo $id;
  ?>" />
  <hr align="left" width="100%" />
  <div class="control-group">
  <div class="controls">
    <input name="Enviar" type="submit" value="Enviar" />
  </div>
  </div>
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
