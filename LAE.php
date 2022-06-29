<?php 
	session_start();

	if(isset($_SESSION['user'])){
		include 'menu.php';

		
 ?>
<!DOCTYPE html>
<html>


			<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<div class="panel panel-heading" align="center">
							<h2>Estadística LAE</h2>
						</div>
						<div class="panel panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h5 align="center"> Matriculas </h5>
									<div id="cargaMatriculas"> </div>

								</div>
								<div class="col-sm-6">
									<h5 align="center"> Bajas </h5>
									<div id="cargaBajas"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row2">
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<div class="panel panel-heading" align="center">
							<h2>Estadística LAE</h2>
						</div>
						<div class="panel panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h5 align="center"> Eficiencia Terminal </h5>
									<div id="cargaET"> </div>

								</div>
								<div class="col-sm-6">
									<h5 align="center"> Tasa de Graduación </h5>
									<div id="cargaTS"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	   </div>	
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaMatriculas').load('laemat.php');
		$('#cargaBajas').load('laebajas.php');
		$('#cargaET').load('laeet.php');
		$('#cargaTS').load('laetg.php');

		
	});
</script>
<?php
} else {
	header("location:index.php");
	}
 ?>
