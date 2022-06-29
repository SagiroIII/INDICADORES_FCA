<?php 

    session_start();
     if(isset($_SESSION['user'])){
        
    include("php/conexion.php");
    include 'menu.php';
    $conexion=conexion();

$id=$_GET['id'];

$sql="SELECT * FROM capturaindicador WHERE idCapturaIndicador='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
   
        <p></p>
        <div align="center">
            <img src="imagenes/logofca2.png"
                 width="150"
                 height="200">

        </div>
         <br>
                <div class="container mt-5" align="center">
                    <form action="updateposgrado.php" method="POST">

                        <table class="default">
                            <input type="hidden" name="idCapturaIndicador" value="<?php echo $row['idCapturaIndicador']  ?>">
                    
        
                  <tr>
                        <td> <h4>Selecciona el periodo:</h4>
                            <p>
                        </td>
                          <td><select class="form-select form-select-lg mb-3" name="Periodo" >
                            <option value="<?php echo $row['periodo_idPeriodo']  ?>"> <?php echo $row['periodo_idPeriodo']  ?></option>
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
                    <td> <h4>Nivel de Programa:</h4> 
                        <p>

                    </td>
                    
                    <td><select class="form-select form-select-lg mb-3" name="NivelPrograma" id="nivelprograma">
                        
                        <option value="<?php echo $row['programa_nivelprograma_idNivelPrograma']  ?>"> Posgrado</option>
                        
                    </select></td>
                    
                  </tr>
                  <tr> 
                        <td> <h4>Selecciona el programa: </h4>
                            <p>

                        </td>
                        <td >
                        
                        <select class="form-select form-select-lg mb-3" name="Programa" id="programa" required>
                             <option value="<?php echo $row['programa_idPrograma']  ?>"> <?php if ($row['programa_idPrograma']==6){ echo "Especialidad Fiscal"; } 
                                                elseif ($row['programa_idPrograma']==7) {echo "Especialidad Direccion Financiera";}
                                                elseif ($row['programa_idPrograma']==8) {echo "Maestria en Administracion";}
                                                elseif ($row['programa_idPrograma']==9) {echo "Maestria en Inteligencia de Negocios";}
                                                elseif ($row['programa_idPrograma']==10) {echo "Maestria en Impuestos";}
                                                elseif ($row['programa_idPrograma']==11) {echo "MGTIC";}
                                                elseif ($row['programa_idPrograma']==12) {echo "Doctorado en Ciencias Administrativas";}
                                                    // code...
                                                ?></option>
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
                    <td> <h4>Selecciona el indicador correspondiente: </h4>
                        <p> 
                         
                    </td>

                    <td> <select class="form-select form-select-lg mb-3" name="Indicador" required>
                         <option value="<?php echo $row['indicador_idIndicador']  ?>"> <?php  if ($row['indicador_idIndicador']==1){ echo "Matricula"; } 
                                                    if ($row['indicador_idIndicador']==2){ echo "Bajas";}
                                                     if ($row['indicador_idIndicador']==3){ echo "Eficiencia Terminal";}
                                                     if ($row['indicador_idIndicador']==4){ echo "Tasa de Graduacion";}

                                                 ?></option>
                        <option value=1>Matricula</option>
                        <option value=2>Bajas</option>
                        <option value=3>Eficiencia Terminal</option>
                        <option value=4>Tasa de Graduacion</option>
                    
                    </select></td>
                 </tr>
                </table>
                <h4>Valor Actual del Periodo: <input type="text" name="IndicadorReal" value="<?php echo $row['DatosReal']  ?>"> </h4>

                <h4><input type="hidden" name="idUsuario" value="<?php echo $_SESSION['user']  ?>"> </h4>

                    
               
                                
                            <input type="submit" class="btn btn-success btn-lg" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>

<?php
} else {
    header("location:index.php");
    }
 ?>