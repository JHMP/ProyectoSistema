<?php
include 'clases/Coneccion.php';
include 'clases/candidato.php';
include 'clases/candidatoControlador.php';
?>

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
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>

</head>
<body class="inicio">


<?php


$AlumnoA = new CandidatoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
          $AlumnoA->setId('NULL');
          $AlumnoA->setDui($_REQUEST['dui']);
          $AlumnoA->setApellido($_REQUEST['apellido']);
          $AlumnoA->setNombre($_REQUEST['nombre']);
          $AlumnoA->setId_depa($_REQUEST['id_depa']);
          $AlumnoA->setId_muni($_REQUEST['id_muni']);
          $AlumnoA->setTipo_candidato($_REQUEST['tipo_candidato']);
          $AlumnoA->setId_inscrip_parti($_REQUEST['id_inscrip_parti']);
          $AlumnoA->setId_depas($_REQUEST['id_depas']);
          $AlumnoA->setId_munis($_REQUEST['id_munis']);
          $AlumnoA->setCargo($_REQUEST['cargo']);
          $datosObj=array($AlumnoA->getId(),
                           $AlumnoA->getDui(),
                           $AlumnoA->getApellido(),
                           $AlumnoA->getNombre(),
                           $AlumnoA->getId_depa(),
                           $AlumnoA->getId_muni(),
                           $AlumnoA->getTipo_candidato(),
                           $AlumnoA->getId_inscrip_parti(),
                           $AlumnoA->getId_depas(),
                           $AlumnoA->getId_munis(),
                           $AlumnoA->getCargo()
                           );
           print $AlumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':
        $sql = 'SELECT * FROM inscrip_candi';
        $datos =  consultaD($con, $sql);

        print imprimetabla($datos,"inscrip_candi","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>
 <center>
   <div class="boton">
  <center><a href="index.php">Menu Principal</a></center>
  </div></center>
     </body>
</html>
