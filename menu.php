<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Indicadores FCA</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.6.0.min.js"></script>
	<script src="librerias/plotly-2.12.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
	<div>
        <img src="imagenes/logofca.png"
             width="250"
             height="150">

    </div>

	<h1 class="bg-success p-2 text-white" align="center">Indicadores FCA</h1>

	<div class="botones">
		<div class="btn-group" >
	         <a href="home.php" class="btn btn-success btn-sm"> INICIO </a>
	    </div>

		<div class="btn-group" >


	        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
	            LICENCIATURA
	        </button>
	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="LI.php">Licenciatura en Informática</a></li>
	            <li><a class="dropdown-item" href="LAE.php">Licenciatura en Administración de Empresas</a></li>
	            <li><a class="dropdown-item" href="LC.php">Licenciatura en Contaduría</a></li>
	            <li><a class="dropdown-item" href="LNI.php">Licenciatura en Negocios Internacionales</a></li>
	            <li><a class="dropdown-item" href="LIN.php">Licenciatura en Inteligencia de Negocios</a></li>
	        </ul>
	    </div>
		<div class="btn-group">
	        <button class="btn btn-warning btn-sm" type="button" align="center">
	            POSGRADO
	        </button>
	        <button type="button" class="btn btn-sm btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
	            <span class="visually-hidden">Toggle Dropdown</span>
	        </button>

	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="EF.php">Especialidad Fiscal</a></li>
	            <li><a class="dropdown-item" href="EDF.php">Especialidad Direccion Financiera</a></li>
	            <li><a class="dropdown-item" href="MA.php">Maestria en Administración</a></li>
	            <li><a class="dropdown-item" href="MIF.php">Maestria en Inteligencia Financiera</a></li>
	            <li><a class="dropdown-item" href="MI.php">Maestria en Impuestos</a></li>
	            <li><a class="dropdown-item" href="MGTIC.php">Maestria en Gestion de Tecnologías de la Inf. y Com.</a></li>
	            <li><a class="dropdown-item" href="DCA.php">Doctorado en Ciencias Administrativas</a></li>
	        </ul>
	    </div>

	  <div class="btn-group" >


	        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
	            INDICADOR
	        </button>
	        <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="capturalicenciatura.php">Captura de Indicador Licenciatura</a></li>
	            <li><a class="dropdown-item" href="capturaposgrado.php">Captura de Indicador Posgrado</a></li>
	            <li><a class="dropdown-item" href="modificar.php">Modificar Registro Nivel Licenciatura </a></li>
	            <li><a class="dropdown-item" href="modificarposgrado.php">Modificar Registro Nivel Posgrado </a></li>
	            
	          </ul>
	          
	    </div>  

	     <div class="btn-group" >


	        <div class="btn-group" >
	         <a href="php/salir.php" class="btn btn-danger btn-sm"> SALIR </a>
	    </div>
	        
	          
	    </div>    
	</div>
</body>
</html>