<?php 


	session_start();
	require_once "conexion.php";
	
	$conexion=conexion();

		$usuario=$_POST['usuario'];
		$pass=($_POST['password']);

		$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";
		$result=mysqli_query($conexion,$sql);
		$fila = mysqli_fetch_array($result);
		$idUsuario=$fila['idUsuario'];


		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$idUsuario;
			
			
			echo 1;
		}else{
			echo 0;
		}

		
 ?>