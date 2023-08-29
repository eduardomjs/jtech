<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Bienvenido a JTech</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor="black">
<font color='white' face="Bahnschrift">
<?php
echo	"<form name='login' method='post' action='verificacion.php'>
		<table border='0' width='100%'><!--width='100%' hace que se ajuste al tama�o de la ventana-->
			<tr>
				<td colspan='2'>
				<br /><!--salto de linea-->
				<br />
				</td>
			</tr>
			<tr><!--filas-->
				<td align='center' colspan='2'><!--columnas-->
				<img src='img/jtech_logo.png' alt='JTech' />
				</td>
			</tr>
			<tr>
				<td colspan='2'>
				<br /><!--salto de linea-->
				<br />
				</td>
			</tr>
			<tr>
				<td align='center' colspan='2'>
					Bienvenido a JTech
				</td>
			</tr>
			<tr>
				<td colspan='2'> <!--colspan='2' combinar columnas-->
				<br />
				</td>			
			</tr>
			<tr>
				<td align='right' width='50%'> <!--width='50%' ajusta el tama�o de la columna al 50%-->
				Usuario:
				</td>
				<td align='left'>
				<input type='text'  maxlength='50' name='user' required/>
				</td>
			</tr>
			<tr>
				<td align='right' width='50%'>
				Contraseña:
				</td>
				<td align='left'>
				<input type='password' maxlength='50' name='pass' required/>
				</td>
			</tr>
				<td align='center' colspan='2'>
				<br />
				<input type='submit' value='Iniciar sesión' />
				</td>
		</table>
		</form>
";
?>
</font>
</body>
</html>