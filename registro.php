<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.6.0.min.js"></script>
	<script src="librerias/plotly-2.12.1.min.js"></script>
</head>
<body style="background: gray;">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="bg-success p-5 text-white" align="center"> <h1 align="center">Registro de usuario </h1></div>
				<div class="panel panel-body">
			<div style="text-align: center;">
						<img src="imagenes/logofca2.png" height="250">
					</div>
		    	<p></p>
					<form id="frmRegistro">
						<div align="center"><h3 align="center">Nombre</h3> </div>
					<input type="text" class="form-control input-sm" id="nombre" name="">
					<div align="center"><h3 align="center">Apellidos</h3> </div>
					<input type="text" class="form-control input-sm" id="apellido" name="">
					<div align="center"><h3 align="center">Nombre de Usuario</h3> </div>
					<input type="text" class="form-control input-sm" id="usuario" name="">
					<div align="center"><h3 align="center">Contraseña</h3> </div>
					<input type="text" class="form-control input-sm" id="password" name="">
					<p></p>
					<span class="btn btn-success btn-lg" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-warning btn-lg">Iniciar Sesión</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Te has registrado ");
							}else{
								alertify.error("Hubo en error al registrar");
							}
						}
					});
		});
	});
</script>

