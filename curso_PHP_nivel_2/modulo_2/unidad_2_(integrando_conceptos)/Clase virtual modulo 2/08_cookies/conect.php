
<?php
$conexion=mysql_connect(SERVIDOR, USUARIO, PASSWORD) 
or exit("No se pudo establecer una conexión");
$dbseleccionada=mysql_select_db(BASE, $conexion)
or exit("No se pudo seleccionar la base de datos");
?>





