<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alta de empleados</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	echo    "
	<form name='logout' method='post' action='index.php' align='right'>
		<input type='submit' value='Cerrar sesion' />
	</form>
	<h1 align='center' >Bienvenido al módulo de alta de empleados</h1><br />";
	
	echo	"
	<form name='alta' method='post' action='registro_empleados.php'>
		<table border='0' width='100%'><!--width='100%' hace que se ajuste al tama�o de la ventana-->			
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				ID:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='id_empleado' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Contraseña:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='contra' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Nombre:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='nombre' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Apellido:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='apellido' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Puesto:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='puesto' required/>
				</td>
			</tr>
				<td align='center' colspan='2'>
				<br />
				<input type='submit' value='Dar de alta' />
				</td>
		</table>
		</form>
	";
	
echo "
	<br/>
	<div>
	<iframe name='registro_empleados' src='registro_empleados.php' width='100%' frameborder='0' height='800'>
	</iframe>	
		";
?>
</font>
</body>
</html>
