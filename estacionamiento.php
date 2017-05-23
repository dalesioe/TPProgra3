<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="bower_components/bootstrapvalidator/dist/css/bootstrapValidator.css"> 
  	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
  <script src="bower_components/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
  <!-- <script src="validator.js"></script> -->
  <script src="funciones.js"></script>
    <title>Estacionamiento "El aleman loco"</title>
</head>
<body><div class="container">
<a class="btn btn-info" href="index.html">Login</a>
<button class="btn btn-danger" id="btn-delog" onclick="Desloguear()">Desloguear</button>
  <h2>Panel Principal</h2>
  <ul class="nav nav-tabs">
    <?php 
    if ($_SESSION["admin"]==true) {
    	echo "<li class='active'><a data-toggle='tab' href='#admin'>Admin</a></li>";
    }
     ?>
    
    <li><a data-toggle="tab" href="#menu1">Ingreso</a></li>
    <li><a data-toggle="tab" href="#menu2">Egreso</a></li>
    
  </ul>

  <div class="tab-content">
  
      <?php 
      if($_SESSION["admin"]==true)
      {
      	include("admin.php");
      }
       ?>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>