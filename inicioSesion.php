<?php
  session_start();
  include 'serv.php';
  if(isset($_SESSION['user'])){
  echo '<script> window.location="index.php"; </script>';
  }
?>
<!DOCTYPE html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Sistema de Votacion</title>


    <link href="css/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/css/dashboard.css" rel="stylesheet">



  <style id="holderjs-style" type="text/css"></style></head>

    <body>

        <div class="row">
            <form action="sesion.php" method="post" class="pager">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <center><img src="img/JHMP.png" width="350" height="250" alt="TRIBUNAL"/></center>

                                    <form action="sesion.php" method="post">
                      <center><h4>Usuario</h4></center><input type="text" name="user" placeholder="Ingrese Su Usuario" class="required form-control" minlength="2" required="true"><br>
                      <center><h4>Contraseña</h4></center><input type="password" name="clave" class="required form-control" placeholder="Ingrese Su Contraseña" minlength="2" required="true"><br>
                    <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php echo "Error al inicio de sesion";?>

                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>
            <center><input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                    <input type="submit" name='reset' value='Cancelar' class="btn btn-primary"></center>

        </form>
        <br>
        <br>
        <br>
            </div>
        </div>
        <br>
        <br>
        <br>
       <footer><center>Creacion y Diseño: Jorge Ayala y Melvin Palacios</center>

</footer>
    </body>
</html>
