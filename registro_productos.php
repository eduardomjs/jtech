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

$id=$_POST['id'];
$producto=$_POST['prod'];
$marca=$_POST['marca'];
$modelo=$_POST['model'];
$precio=$_POST['precio'];
$unidades=$_POST['units'];
$img=$_POST['img'];

if($id!='')
	{
		
	if($producto!='' && $marca!='' && $modelo!='' && $precio!='' && $unidades!='' && $img!='')
		{
			$modifica_prod="UPDATE productos_t SET producto = '$producto', marca = '$marca', modelo = '$modelo', precio = '$precio', unidades = '$unidades', imagen = '$img' WHERE id = '$id'";
			odbc_exec($link2, $modifica_prod);

			$consulta_productos="select id, imagen, producto, marca, modelo, precio, unidades from productos_t where id = '$id'";
			$resultado_productos=odbc_exec($link2,$consulta_productos);
		}
		
	echo	"
			<br/>
			<div>
				<strong>Producto modificado correctamente</strong>
			</div>		
		";
		
		echo    "
				<table border='1' bordercolor='#a166ff' width='100%'>
				<tr>
					<td align='center'>
						ID
					</td>
					<td align='center'>
						PRODUCTO
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
						UNIDADES
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
					<td align='center'>%s
					</td>
					<td align='center'>$%s
					</td>
					<td align='center'>%s
					</td>
					<td align='center'>
						<img src='img/$img' width='100' height='100'>
					</td>
				</tr>
			",
		$row['id'],$row['producto'],$row['marca'],$row['modelo'],number_format($row['precio'], 2),$row['unidades'],$row['imagen']
		);
		}
}
?>
</font>
</body>
</html>