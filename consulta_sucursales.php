<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sucursales</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	include ('conexion.php');
	
	$consulta_sucursal="select id, sucursal, calle, numero from sucursal_t";
	$resultado_sucursal=odbc_exec($link2,$consulta_sucursal);
	echo    "
			<form name='logout' method='post' action='index.php' align='right'>
				<input type='submit' value='Cerrar sesion' />
			</form>
			<h1 align='center'>SUCURSALES</h1><br />
			<table border='1' bordercolor='#a166ff' width='100%'>
		    <tr>
                <td align='center'>
                    ID
                </td>
			    <td align='center'>
				    SUCURSAL
			    </td>
			    <td align='center'>
				    CALLE
			    </td>
			    <td align='center'>
				    NUMERO
			    </td>
		    </tr>
	";
	while($row = odbc_fetch_array($resultado_sucursal)) {
	printf ("
	    <tr>
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
	$row['id'],$row['sucursal'],$row['calle'],$row['numero']
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
