<?php include './clases/Coneccion.php';?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
</head>


<header>
<img src="img/JHMP.png"><br>
</header>

<body class="inicio">
<center>
<p>RESULTADOS EN TIEMPO REAL: <a href="./menuResultados.php">Menu de Resultados</a></p>
</center>
<form action="sesionDui.php" method="post" name="f">
<br><br>
<center>
<div style="width:300px">
  <div>
   DUI:
  </div>
  <div>
<input type="Text"  name="barra" onkeypress="return justNumbers(event);" class="required form-control" maxlength="10" required="true" placeholder="00000000-0">
</div>

  <?php if (isset($_REQUEST['msg'])) { ?>

                    <div class="row">
                        <div class="col-xs-3"></div>

                        <div class="col-xs-2">

                            <div class='label alert-danger'>
                            <?php  print "DUI NO REGISTRADO O YA <br>HA EMITIDO SUFRAGIO...!!!";?>
                            </div>

                        </div>

                    </div>

                    <br>
                    <?php }  ?>

<br>
<center><input type="submit" name='bot' value='Enviar' class="btn btn-primary">
<a href="index.php"><input type="button" name='bot' value='Cancelar'></center>
<center><a href="cerrar.php" class="label label-warning">Cerrar Sesion</a></center>
<a id="pregunta" href=javascript:mostrar()>Mostrar teclado</a><br>

<br>
<br>
<div align=center id="botones" style="font:normal 16px/12px verdana;visibility:hidden;"></div>


<script>
var c="0";
var letras="";
var p=0;
for (a=0;a<Tletras.length;a++){
letras=letras+"<input style='width:80px;' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
p=p+1;
if(p==10){p=0;letras=letras+"<br><br>";}
}
document.getElementById('botones').innerHTML=letras+"<input style='width:40px;' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')><br><font style='font:20px'></font>";
</script>
</div>
</center>
</form>


</body>
</html>
