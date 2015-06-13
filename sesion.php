<?php session_start(); ?>
<?php 
	include './clases/Coneccion.php';
	if(isset($_REQUEST['bot'])){
		$sql = "SELECT * FROM usuario WHERE user ='";
		$sql .= $_REQUEST['user'];
		$sql .= "' AND clave ='";
		$sql .= md5($_REQUEST['clave']);
		$sql .= "';";
		
		$datos=consultaD($con,$sql);
		$numero = count($datos);

		if($numero =0){
			$_SESSION['usuario'] = $datos[0]['user'];
			$_SESSION['tipo'] = $datos[0]['rango'];
			$_SESSION['id_session'] = session_id();
			header("Location:index.php");



		}else{
			header("Location:inicioSesion.php?msg=1");

		}

	}
 ?>