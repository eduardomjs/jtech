<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Baja de empleados</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	echo    "
	<div>
	<form name='logout' method='post' action='index.php' align='right'>
		<input type='submit' value='Cerrar sesion' />
	</form>
	<h1 align='center' >Bienvenido al módulo de baja de empleados</h1><br />
	</div>
	";
	
	echo	"
	<div>
	<form method='post' action='registro_empleados2.php' target='registro_empleados2'>
		<table border='0' width='100%'><!--width='100%' hace que se ajuste al tama�o de la ventana-->
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				ID Empleado:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='id' required/>
				</td>
			</tr>
				<td align='center' colspan='2'>
				<br />
				<input type='submit' value='Dar de baja' />
				</td>
		</table>
		</form>
		<div>
	";
	
echo "
	<br/>
	<div>
		<iframe name='registro_empleados2' src='registro_empleados2.php' width='100%' frameborder='0' height='800'>
		</iframe>	
	</div>
	";
?>
</font>
</body>
</html>
