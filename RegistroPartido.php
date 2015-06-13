
<?php include './clases/Coneccion.php';?>
<!DOCTYPE html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Registro de Candidato</title>

    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/dashboard.css" rel="stylesheet">
    <style id="holderjs-style" type="text/css"></style></head>


    <body>

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                      <center><img src="img/JHMP.png" width="300" height="200"/></center>
                      <form name="Votacion" action="manejadorPartido.php?accion=save" method="post" enctype="multipart/form-data">
                      <center><h3>Registro de Partido</h3></center></br>
                      <center><h5>Nombre del Partido Politico:</h5></center>
                      <input type="text" name="nombre" value="" placeholder="Introdusca el Nombre del Patido Politico" class="form-control" required=""/></br>
                      <center><h5>Imagen de la  Bandera Representativa del Partido:</h5></center>
                      <input type="file" name="bandera" class="" required="" onpaste="return false"/></br>
                      <center><h5>DUI:</h5></center>
                      <input type="text"  name="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);"   class="required form-control" maxlength="10" required="true" placeholder="00000000-0">
                      <center><h5>Nombres Representante:</h5></center>
                      <input type="text" name="representante"  placeholder="Introdusca sus Nombres" class="form-control" required=""/></br>


                      <center><input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                      <a href="index.php"><input type="button" name='bot' value='Cancelar'></center>
                      <center><a href="cerrar.php" class="label label-warning">Cerrar Sesion</a></center>
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
