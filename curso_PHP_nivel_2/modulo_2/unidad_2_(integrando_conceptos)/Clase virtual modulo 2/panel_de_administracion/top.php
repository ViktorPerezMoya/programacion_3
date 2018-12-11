<?PHP
include("conecta.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador - PHP y MySQL Intermedio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span>
    <span class="icon-bar"></span> </a><a class="brand" href="index.php">
    <img src="img/lambo.png" width="100" height="30"> Panel Administrativo </a>

      <div class="nav-collapse">
        
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        <li><a href="formbusca.php"><i class="icon-list-alt"></i><span>Buscar</span> </a> </li>
         <li>         
          <a href="forminserta.php">
            <i class="icon-bar-chart"></i>
            <span>Insertar</span>
          </a>                    
        </li>
        
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->