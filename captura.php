
<?php
	session_start();

	if(isset($_SESSION['user'])){

		include 'menu.php';
		

	require_once "php/conexion.php"; 
	$conexion=conexion();

	

	$sql="INSERT INTO capturaindicador VALUES (NULL,'".$_POST["indicadorreal"]."','".$_POST["programa"]."','".$_POST["nivelprograma"]."','".$_POST["indicador"]."','".$_SESSION['user']."','".$_POST["periodo"]."')";

	$result=mysqli_query($conexion,$sql) or die ('Error en QUERY de CAPTURA');

	mysqli_close($conexion);

	

?>

<!DOCTYPE html>
<html>

	<p></p>

	<div align="center">
		<img src="imagenes/logofca2.png"
			height="200"
			width="180" 
		>

	</div>

	<div class="Exitoso"> 
		<p></p>
		<h1 align="center"> Registro Exitoso</h1>
	</div>

	</body>
</html>
<?php
} else {
	header("location:index.php");
	}
 ?>
