<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Conexion</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function Conectarse()
{
$dsn="Driver={SQL Server};
Server=DESKTOP-OCERL2O;Database=empleados_bd;";
	if (!($link=odbc_connect($dsn,'sa','123')))
	{	
		echo	"Error conectando a la base de datos<br><br>";
	}
	else{
		//echo "Conexión exitosa<br><br>";
	}
	return $link;
}
$link2=Conectarse();
?>
</body>
</html>
