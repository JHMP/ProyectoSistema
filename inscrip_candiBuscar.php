

<?php 
include 'clases/Coneccion.php';

$conexion = new mysqli('127.0.0.1', 'root', '', 'sistema_votacion');

?>
<pre>
<?php  
$sql ="SELECT * FROM inscrip_candi WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>



<script languaje="javascript">
function habilita(form)
{
form.partidario.disabled=false;
}
function deshabilita(form)
{
form.partidario.disabled=true;
}
function submitForm(form){
oForm = window.document.forms[form];
formLen    = oForm.elements.length

  for (i=0; i<formLen; i++)
  {
    switch (oForm.elements[i].type)
    {
      case 'radio':
      if (oForm.elements[i].checked)
        if (oForm.elements[i].value != 'Partido'){
          valor = oForm.elements[i].value;
          document.forms[form].partidario2.value = valor;
        }
        else
        {
        if (document.forms['habilitar'].partidario.value != '' && document.forms['habilitar'].partidario.value!=0)
              {
      valor = document.forms['habilitar'].partidario.value;
      document.forms[form].partidario2.value = valor;
              }
        else{
          alert('Debe seleccionar un tipo de candidatura');
          return false
        }
      }
      break; 
    }
  }
  window.document.forms[form].submit()
}
</script>


</head>
<body onload="javascript:document.forms[0].partidario.disabled=true;" class="inicio">

<header>


<center><h2>Registro de Candidato<h2></center>
</header>
<div class="container">
        <form class="pager" action="manejadorCandidato.php?accion=save" method="post" id="candidato">
             <table class="table-bordered">
              <input type="hidden" name="id"  value='<?php print $datos[0][0]?>'>
              <div class="row">
                <div class="col-xs-6">
                    DUI:
                </div>
               <div class="col-xs-3">
                   <input type="text" name="dui" value='<?php print $datos[0][1]?>' maxlength="10" placeholder="00000000-0" class="required form-control" minlength="10" required="true" onkeydown="return validarNumeros(event)">
               </div>
           </div>
<br>
          <div class="row">
            
                <div class="col-xs-6">
                    Apellido:
                </div>
               <div class="col-xs-3">
                   <input type="text" name="apellido" value='<?php print $datos[0][2]?>' class="required form-control" placeholder="Apellido Candidato" minlength="2" required="true" onkeydown="return validarLetras(event)">
               </div>
           </div>

<br>
              <div class="row">
            
                <div class="col-xs-6">
                    Nombre:
                </div>
               <div class="col-xs-3">
                   <input type="text" name="nombre" value='<?php print $datos[0][3]?>' placeholder="Nombre Candidato" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)">
               </div>
           </div>
           
           
<br> 
           <div class="row">
            
                <div class="col-xs-6">
                  Departamento:
                </div>
                <div class="col-xs-3">

                   <Select name="id_depa" id="depto" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>    
                  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['nombre'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div> 
           
<br> 
       <div class="row">
                
                <div class="col-xs-6">
                  Municipio:
                </div>
                <div class="col-xs-3">
                   <Select name="id_muni" id="municipio" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
               </select>
               </div>
           </div> 
           
<br> 
          <div class="row">
            <div class="col-xs-6">
           Tipo candidatura: </div>
               <div class="col-xs-4" >       
              <input type="radio" name ="tipo_candidato" onClick="habilita(this.form)" value="Partido"> Partido
              <input type="radio" name ="tipo_candidato" onClick="deshabilita(this.form)" value="Coalision"> Coalisión
              <input type="radio" name ="tipo_candidato" onClick="deshabilita(this.form)" value="Independiente"> Independiente
               </div>
           </div>
<br>
<br>
            <div class="row">
                <div class="col-xs-6">
                Seleccione:
                </div>
                <div class="col-xs-3">
              <Select name="id_inscrip_parti" class="required form-control" required="true" onkeydown="return validarLetras(event)">
               <option value="">[..Seleccionar...]</option>
                <?php
                  $result = $conexion->query("SELECT * FROM inscri_partido");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['nombre_partido'].'">'.utf8_encode($row['nombre_partido']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div> 
           
<br> 
 <div class="row"> 
                <div class="col-xs-6">
                    Departamento:
                </div>
               <div class="col-xs-3">
               <Select name="id_depas" id="depto1" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
                        
                  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div> 
           
<br> 
       <div class="row">
            
                         <div class="col-xs-6">
                  Municipio:
                </div>
                <div class="col-xs-3">
                   <Select name="id_munis" id="municipio1" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
 </select>
            
    </div>        
           </div> 
<br> 
       <div class="row">
            
                <div class="col-xs-6">
                  Cargo:
                </div>
                <div class="col-xs-3">
                   <Select name="cargo" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
                  <?php
                  $result = $conexion->query("SELECT * FROM cargo" );
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['tipo_cargo'].'">'.utf8_encode($row['tipo_cargo']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div> 
           
<br> 
        
           
                
                   <center><input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                      <a href="InicioMenu.php"><input type="button" name='bot' value='Cancelar'></center>
                      
                </div>
            </div>
        </table>
           

     </form>
<div class="panel-heading">
           <center><a href="cerrar.php" class="label label-warning">Cerrar Sesion</a></center>
        </div>



 <script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script> 

</div>
 <script language="javascript">
    $(document).ready(function(){
        $("#depto1").change(function () {
            $("#depto1 option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio1").html(data);
                });
            });
        })
    });
 </script>

</div>
<br><br><br>
<footer><center>Creacion y Diseño: Jorge Ayala y Melvin Palacios</center>
       </footer>
</body>
</html>
