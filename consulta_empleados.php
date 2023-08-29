<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Empleados</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php	
	include ('conexion.php');
	
	$consulta_empleados="select id, contrasena, nombre, apellido, perfil from empleados_1";
	$resultado_empleados=odbc_exec($link2,$consulta_empleados);
	echo	"
			<form name='logout' method='post' action='index.php' align='right'>
				<input type='submit' value='Cerrar sesion' />
			</form>
			<h1 align='center'>EMPLEADOS</h1><br />	
			<table border='0' width='50%' align='center'>
                <tr>
				    <td align='center'>
                        <form name='redirect' method='post' action='alta_empleados.php' align='center'>
							<input type='submit' value='Alta de empleados' />
						</form>
	    			</td>
					<td align='center'>
						<form name='redirect' method='post' action='mod_empleados.php' align='center'>
							<input type='submit' value='Modificación de empleados' />
						</form>
				    </td>  
		    		<td align='center'>
						<form name='redirect' method='post' action='baja_empleados.php' align='center'>
							<input type='submit' value='Baja de empleados' />
						</form>
				    </td>                
			    </tr>
            </table>
			<br />	
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
?>
</font>
</body>
</html>
