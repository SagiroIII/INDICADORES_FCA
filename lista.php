<?php
	require_once "php/conexion.php"; 
	$conexion=conexion();
	$nivelprograma = $_POST['nivelprograma'];

	$sql="SELECT idPrograma, Programa FROM programa
	 WHERE nivelprograma_idNivelPrograma='$nivelprograma'";

	$result = mysqli_query($conexion, $sql);

	$cadena="<label> Selecciona el programa2 </label>
			 <select id='programa' name='programa'>";


	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';

	}



	echo $cadena."</select>";

?>