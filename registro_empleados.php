<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de empleados</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	
include ('conexion.php');

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

$nombre=$_POST['name'];
$apellido=$_POST['lname'];
$puesto=$_POST['puesto'];
$contrasena=$_POST['pass'];
$estado='1';

if($nombre!='' && $apellido!='' && $puesto!='' && $contrasena!='' && $estado!='')
{

$inserta_usuario="insert into empleados_1 (nombre, apellido, contrasena, perfil, activo) values ('$nombre','$apellido','$contrasena','$puesto','$estado')";
odbc_exec($link2, $inserta_usuario);

$consulta_empleados="select top 1 * from empleados_1 order by id desc"; 
$resultado_empleados=odbc_exec($link2,$consulta_empleados);

echo	"
		<br/>
		<div>
			<strong>Empleado registrado correctamente</strong>
		</div>
		";

echo	"
			<table border='1' bordercolor='#a166ff' width='100%'>
			<tr>
				<td align='center'>
					ID
				</td>
				<td align='center'>
					CONTRASEÑA
				</td>
				<td align='center'>
					NOMBRE
				</td>
				<td align='center'>
					APELLIDO
				</td>
    	        <td align='center'>
					PUESTO
				</td>
			</tr>
	";
	while($row = odbc_fetch_array($resultado_empleados)) {
	printf("
		<tr>
			<td align='center'>%s
			</td>
			<td align='center'>%s
			</td>
			<td align='center'>%s
			</td>
			<td align='center'>%s
			</td>
        	<td align='center'>%s
			</td>
		</tr>
	",
	$row['id'],$row['contrasena'],$row['nombre'],$row['apellido'],$row['perfil']
	);	
	}
}
?>
</font>
</body>
</html>