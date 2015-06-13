<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM inscri_partido WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
<!DOCTYPE html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Registro de Partido</title>

    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/dashboard.css" rel="stylesheet">
    <style id="holderjs-style" type="text/css"></style></head>

    <body>

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">


                      <form action="modificarPartido.php" id="registro" method="post">
                      <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
                      <center><h3>Registro de Partido</h3></center></br>
                      <center><h5>Nombre del Partido Politico:</h5></center>
                      <input type="text" name="nombre" value="" placeholder="Introdusca el Nombre del Patido Politico" class="form-control" required="" value='<?php print $datos[0][1]?>'></br>
                      <center><h5>Imagen de la  Bandera Representativa del Partido:</h5></center>
                      <input type="file" name="bandera" class="" required="" value='<?php print $datos[0][2]?>'></br>
                      <center><h5>DUI del Presidente o Representante del Partido:</h5></center>
                      <input type="text" name="dui" maxlength="10" placeholder="00000000-0" class="form-control" required="" value='<?php print $datos[0][3]?>'><br>
                      <center><h5>Nombres Representante:</h5></center>
                      <input type="text" name="representante"  placeholder="Introdusca sus Nombres" class="form-control" required="" value='<?php print $datos[0][4]?>'></br>
                      
                      <center><input type="submit" name='bot' value='Enviar' class="btn btn-primary">

        </form>
            </div>
            <div class="col-md-4">

            </div>


        </div>
        <script type="text/javascript">
    $().ready(function () {
      $("#registro").validate({});
    });
    $(document).ready(
        function(){
            $("#fechac").datepicker(
                {
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: "yy-mm-dd",
                  showAnim: 'slide'
                }
            );
        }
    )
  </script> 
        <br>
        <br>
        <br>
       <footer><center>Creacion y Diseño: Jorge Ayala y Melvin Palacios</center>
       </footer>
    </body>
</html>
