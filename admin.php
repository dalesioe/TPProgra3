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
<body>
<div id='admin' class='tab-pane fade in active'>
<h3>Acciones</h3>
<button class="btn btn-primary" onclick="MostrarUsuarios()">Usuarios</button>
<button class="btn btn-success" onclick="MostrarModalAlta()">Alta de usuario</button>
<div class="container">
  <div class="row col-sm-4">
    <div id="tablauser">
      
    </div>

  </div>
</div>
</div>
<!-- Modal -->
<div id="modalAlta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alta de Usuario</h4>
      </div>
      <div class="modal-body">
          Nombre<br>
          <input type="text" name="name" id="nombre"><br>
          Apellido<br>
          <input type="text" name="ape" id="apellido"><br>
          Turno<br>
          <input type="text" name="turn" id="turno"><br>
          Password<br>
          <input type="text" name="password" id="pass"><br>
          Administrador<br>
          <input type="checkbox" name="adm" id="admin"><br>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>
</html>