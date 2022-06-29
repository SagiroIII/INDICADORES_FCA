<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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
			<div class="panel panel-primary">
				<div  align="center">
					<h1 class="bg-success p-2 text-white" align="center">Inicio de Sesión</h1></div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="imagenes/logofca2.png" height="250">
					</div>
					<p></p>
					<h3>Nombre de usuario</h3>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<h3>Contraseña</h3>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>

					<div align="center">
					<span class="btn btn-success btn-lg" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-warning btn-lg">Registro</a>
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
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="home.php";
							}else{
								alertify.alert("Los datos ingresados no coinciden");
							}
						}
					});
		});	
	});
</script>