<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificación de productos</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	echo    "
	<form name='logout' method='post' action='index.php' align='right'>
		<input type='submit' value='Cerrar sesion' />
	</form>
	<h1 align='center' >Bienvenido al módulo de modificación de productos</h1><br />";
	
	echo"
	<div>
	<form name='mod' method='post' action='registro_productos.php' target='registro_productos'>
		<table border='0' width='100%'><!--width='100%' hace que se ajuste al tama�o de la ventana-->				
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				ID Producto:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='id' required/>
				</td>
			</tr>
			<td align='center' colspan='2'>
				<br />
					Ingrese los nuevos datos
				<br />
				<br />
			</td>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Producto:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='prod' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Marca:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='marca' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Modelo:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='model' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Precio:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='precio' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Unidades:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='units' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Nombre archivo imagen:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='img' required/>
				</td>
			</tr>
				<td align='center' colspan='2'>
				<br />
				<input type='submit' value='Modificar' />
				</td>
		</table>
	</form>
	</div>";

	echo"
	<div>
		<iframe name='registro_productos' src='registro_productos.php' width='100%' frameborder='0' height='200'>
		</iframe>
	</div>";

	/*echo"

	<form method='post' action='registro_empleados3.php' target='registro_empleados3'>
		<table border='0' width='100%'><!--width='100%' hace que se ajuste al tama�o de la ventana-->
			</tr>
				<td align='center' colspan='2'>
				<br />
				Ingrese los nuevos datos
				<br />
				<br />
				</td>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Nombre:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='name' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Apellido:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='lname' required/>
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
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Contraseña:
				</td>
				<td align='left'>
				<input type='text' maxlength='50' name='pass' required/>
				</td>
			</tr>
				<td align='center' colspan='2'>
				<br />
				<input type='submit' value='Modificar' />
				</td>
		</table>
	</form>
	";*/
	
?>
</font>
</body>
</html>
