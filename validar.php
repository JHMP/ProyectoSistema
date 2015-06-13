<meta http-equiv="Content_Type" content="text/html; charset=utf-8">
<?php

$conn=mysql_connect("localhost","root","");
mysql_select_db("sistema_votacion",$conn);


?>
<?php
$year=$_POST['year'];


require_once('./clases/Coneccion.php');


if ($_POST['checkbox'] != "")
{
	if (is_array($_POST['checkbox']))
	{

		while (list($key,$value) = each($_POST['checkbox']))
		{
			$sql=mysql_query("INSERT INTO cargo (tipo_cargo, year_electoral) VALUES ('$value','$year')");
		}
	}
}

if ($sql)

print 'Datos Insertados Filas Afectadas 1 <a href=\'manejadorOpciones.php?accion=con\'>Ver datos</a>';



 else{
           print 'No se ha enviado datos ';
       }

?>
<!DOCTYPE html>
