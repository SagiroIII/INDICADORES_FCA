<?php 
	session_start();

	if(isset($_SESSION['user'])){
		include'menu.php';

		
 ?>
<!DOCTYPE html>
<html>
	<body>	
		 <p></p>

		<h2 class="bg-warning p-1 text-white" align="center">Capturar Registro Posgrado</h2>
   		 <br>
	    <p></p>
	    
	     <div align="center">
	        <img src="imagenes/logofca2.png"
	             width="150"
	             height="200">

   		</div>
   		 <br>


	    <div align="center">

			<form action="captura.php" method="post" >

				<table class="default">
					
	    
				  <tr>
				    <td> <h4>Selecciona el periodo: </h4>
				    	<p>
				    </td>
				    <td><select class="form-select form-select-lg mb-3" name="periodo" required>
						 <option selected>-----</option>
						<option value="2018-1">2018-1</option>
						<option value="2018-2">2018-2</option>
						<option value="2019-1">2019-1</option>
						<option value="2019-2">2019-2</option>
						<option value="2020-1">2020-1</option>
						<option value="2020-2">2020-2</option>
						<option value="2021-1">2021-1</option>
						<option value="2021-2">2021-2</option>
						<option value="2022-1">2022-1</option>
					</select> </td>
				    
				  </tr>
				  <tr>
				    <td> <h4> Nivel de Programa: </h4>
				    	<p>

				    </td>
				    
				    <td><select class="form-select form-select-lg mb-3" name="nivelprograma" id="nivelprograma">
						
						<option value=2>Posgrado</option>
						
					</select></td>
				    
				  </tr>
				  <tr> 
				  	<td> <h4>Selecciona el programa: </h4>
				  		<p>

				  	</td>
				  	<td >
				  	
					<select class="form-select form-select-lg mb-3" name="programa" id="programa" required>
						 <option selected>-----</option>
						<option value=6>Especialidad Fiscal</option>
						<option value=7>Especialidad Direccion Financiera</option>
						<option value=8>Maestria en Administración</option>
						<option value=9>Maestria en Inteligencia Financiera</option>
						<option value=10>Maestria en Impuestos</option>
						<option value=11>Maestria en Gestion de Tecnologias de la Informacion y Comunicacion</option>
						<option value=12>Doctorado en Ciencias Administrativas</option>
					</select> 

					</td>
				  	

				  </tr>

				 <tr>
				 	<td> <h4>Selecciona el indicador correspondiente:</h4>
				 		<p> 
				 		 
				 	</td>

				 	<td> <select class="form-select form-select-lg mb-3" name="indicador" required>
						 <option selected>-----</option>
						<option value=1>Matricula</option>
						<option value=2>Bajas</option>
						<option value=3>Eficiencia Terminal</option>
						<option value=4>Tasa de Graduacion</option>
					
					</select></td>
				 </tr>
				</table>
				

				<h4>Valor Actual del Periodo	: <input type="text" name="indicadorreal" required /> </h4>


				<br>
				<p><input type="submit" class="btn btn-success btn-lg" value="Registrar Indicador"/> </p>

				
			</form>	
		</div>

			
			

	</body>
</html>
<?php
} else {
	header("location:index.php");
	}
 ?>
