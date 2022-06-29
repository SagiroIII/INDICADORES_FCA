<?php
	require_once "php/conexion.php"; 
	$conexion=conexion();
	$sql="SELECT Periodo_IdPeriodo,DatosReal
			from capturaindicador where indicador_idIndicador=2 AND programa_idprograma=12 ORDER BY Periodo_IdPeriodo";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//Y
	$valoresX=array();//X

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

 ?>


<div id="graficaBajas"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');

	var real = {
		x: datosX,
		y: datosY,
		type: 'scatter',
		name: 'Real'

	};



	var meta = {
	  x: datosX,
	  y: [0.1,0.1,0.1,0.1,0.1,0.1],
	  type: 'scatter',
	  name: 'Meta'
	};

	var data = [real,meta];

	

	Plotly.newPlot('graficaBajas', data);
</script>