<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	include ('conexion.php');
	
	$consulta_empleados="select parte, marca, modelo from productos_t";
	$resultado_empleados=odbc_exec($link2,$consulta_empleados);
	echo "
		<table border='1' bordercolor='#a166ff' width='100%'>
		<tr>
			<td align='center'>
				PARTE
			</td>
			<td align='center'>
				MARCA
			</td>
			<td align='center'>
				MODELO
			</td>
		</tr>
	";
	while($row = odbc_fetch_array($resultado_empleados)) {
	printf ("
	<tr>
		<td align='center'>%s
		</td>
		<td align='center'>%s
		</td>
		<td align='center'>%s
		</td>
	</tr>
	",
	$row['parte'],$row['marca'],$row['modelo']
	);

	/*$nombre=$row['nombre'];
	echo "<br>Nuuevo nombre: ".$nombre;
	
	$edad=$row['edad'];
	$ano_nacimiento=2022-$edad;
	echo "<br>A�o nacimiento: ".$ano_nacimiento;*/
	
	}
?>
</font>
</body>
</html>
