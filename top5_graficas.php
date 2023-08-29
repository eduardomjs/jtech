<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tarjetas de video más vendidas</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor='black'>
<font color='white' face="Bahnschrift">
<?php
	include ('conexion.php');
	
	$consulta_productos="select id, imagen, producto, marca, modelo, precio, unidades from productos_t where producto='Tarjeta grafica' and unidades='1' order by marca desc";
	$resultado_productos=odbc_exec($link2,$consulta_productos);
	echo    "
			<form name='logout' method='post' action='index.php' align='right'>
				<input type='submit' value='Cerrar sesion' />
			</form>
			<h1 align='center'>TARJETAS GRAFICAS MAS VENDIDAS</h1><br />	
			<table border='1' bordercolor='#a166ff' width='100%'>
		    <tr>
				<td align='center'>
				    ID
			    </td>
			    <td align='center'>
				    MARCA
			    </td>
				<td align='center'>
				    MODELO
			    </td>
				<td align='center'>
				    PRECIO
			    </td>
				<td align='center'>
				    UNIDADES DISPONIBLES
			    </td>
				<td align='center'>
				    IMAGEN
			    </td>
		    </tr>
	";
	while($row = odbc_fetch_array($resultado_productos)) {
	$img=$row['imagen'];
	printf( "
            <tr>
				<td align='center'>%s
				</td>
		        <td align='center'>%s
		        </td>
				<td align='center'>%s
		        </td>
		        <td align='center'>$%s
		        </td>
		        <td align='center'>%s
		        </td>
				<td align='center'><img src='img/$img' width='100' height='100'>
				</td>
	        </tr>
	    ",
	$row['id'],$row['marca'],$row['modelo'],number_format($row['precio'], 2),$row['unidades'],$row['imagen']
	);
	}
?>
</font>
</body>
</html>
