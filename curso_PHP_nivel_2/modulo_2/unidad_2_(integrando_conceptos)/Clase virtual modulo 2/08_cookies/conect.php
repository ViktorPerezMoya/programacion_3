
<?php
$conexion=mysql_connect(SERVIDOR, USUARIO, PASSWORD) 
or exit("No se pudo establecer una conexi�n");
$dbseleccionada=mysql_select_db(BASE, $conexion)
or exit("No se pudo seleccionar la base de datos");
?>





