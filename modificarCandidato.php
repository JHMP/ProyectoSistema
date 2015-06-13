<?php
include 'clases/Coneccion.php';
include 'clases/candidato.php';
include 'clases/candidatoControlador.php';
?>

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
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>

</head>
<body class="inicio">

<?php

$alumnoA = new CandidatoControlador();


if(isset($_REQUEST['bot'])){
          $alumnoA->setId('id');
          $alumnoA->setDui('dui');
          $alumnoA->setApellido($_REQUEST['apellido']);
          $alumnoA->setNombre($_REQUEST['nombre']);
          $alumnoA->setId_depa($_REQUEST['id_depa']);
          $alumnoA->setId_muni($_REQUEST['id_muni']);
          $alumnoA->setTipo_candidato($_REQUEST['tipo_candidato']);
          $alumnoA->setId_inscrip_parti($_REQUEST['id_inscrip_parti']);
          $alumnoA->setId_depas($_REQUEST['id_depas']);
          $alumnoA->setId_munis($_REQUEST['id_munis']);
          $alumnoA->setCargo($_REQUEST['cargo']);
          $datosObj=array($alumnoA->getId(),
                           $alumnoA->getDui(),
                           $alumnoA->getApellido(),
                           $alumnoA->getNombre(),
                           $alumnoA->getId_depa(),
                           $alumnoA->getId_muni(),
                           $alumnoA->getTipo_candidato(),
                           $alumnoA->getId_inscrip_parti(),
                           $alumnoA->getId_depas(),
                           $alumnoA->getId_munis(),
                           $alumnoA->getCargo());
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
            print "</div>";
        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

