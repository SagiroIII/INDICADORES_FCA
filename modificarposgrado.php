<?php 
    include("php/conexion.php");
    include'menu.php';
    $conexion=conexion();

    $sql="SELECT * FROM capturaindicador WHERE programa_nivelprograma_idNivelPrograma=2 ORDER BY programa_idPrograma";
    $query=mysqli_query($conexion,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
        <p></p>

	<h2 class="bg-warning p-1 text-white" align="center">Modificar Registro Posgrado</h2>



	          
	    </div>
            <div class="container mt-5" align="center">
                    <div class="row" align="center"> 

                        <div class="col-md-15" align="center">
                            <table class="table" align="center">
                                <thead class="table-success table-striped" align="center">
                                    <tr>
                                        
                                        <th>Indicador Real</th>
                                        <th>Periodo</th>
                                        <th>Nivel del Programa</th>
                                        <th>Programa</th>
                                        <th>Indicador</th>
                                        <th>ID Usuario de Ultima Modificación</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody align="center">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                            	
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['DatosReal']?></th>
                                                <th><?php  echo $row['periodo_idPeriodo']?></th>
                                                <th><?php  if ($row['programa_nivelprograma_idNivelPrograma']==2){ echo "Posgrado"; } ?></th> 
                                                 <th><?php if ($row['programa_idPrograma']==6){ echo "Especialidad Fiscal"; } 
                                                elseif ($row['programa_idPrograma']==7) {echo "Especialidad Direccion Financiera";}
                                                elseif ($row['programa_idPrograma']==8) {echo "Maestria en Administracion";}
                                                elseif ($row['programa_idPrograma']==9) {echo "Maestria en Inteligencia de Negocios";}
                                                elseif ($row['programa_idPrograma']==10) {echo "Maestria en Impuestos";}
                                                elseif ($row['programa_idPrograma']==11) {echo "MGTIC";}
                                                elseif ($row['programa_idPrograma']==12) {echo "Doctorado en Ciencias Administrativas";}
                                                    // code...
                                                ?></th>  
                                                <th><?php  if ($row['indicador_idIndicador']==1){ echo "Matricula"; } 
                                                    if ($row['indicador_idIndicador']==2){ echo "Bajas";}
                                                     if ($row['indicador_idIndicador']==3){ echo "Eficiencia Terminal";}
                                                     if ($row['indicador_idIndicador']==4){ echo "Tasa de Graduacion";}

                                                 ?></th> 

                                                 <th><?php  echo $row['usuarios_idUsuario']?></th>    
                                                <th><a href="actualizarposgrado.php? id=<?php echo $row['idCapturaIndicador'] ?>" class="btn btn-warning">Editar</a></th>
                                                <th><a href="deleteposgrado.php?id=<?php echo $row['idCapturaIndicador'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 

                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</div>
</body>
</html>