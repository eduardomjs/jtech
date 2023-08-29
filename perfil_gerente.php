<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Bienvenido Vendedor</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor="black">
<font color='white' face="Bahnschrift">
<?php
    echo    "
            <form name='logout' method='post' action='index.php' align='right'>
                <input type='submit' value='Cerrar sesion' />
            </form>
            <font size='16'>
                <h1 align='center' >Bienvenido</h1>
            </font>            
            <h1 align='center'>Perfil: Gerente</h1><br />
            <h1 align='center'>Sucursal: Guadalajara</h1><br /><br />
            <h2 align='center'>Consultar:</h2><br />
            <table border='0' width='50%' align='center'>
                <tr>
				    <td align='center'>
                        <form name='redirect' method='post' action='consulta_empleados.php' align='center'>
                            <input type='submit' value='Empleados' />
                        </form>
	    			</td>
		    		<td align='center'>
                        <form name='redirect' method='post' action='consulta_productos.php' align='center'>
                            <input type='submit' value='Productos' />
                        </form>
				    </td>
                    <td align='center'>
                        <form name='redirect' method='post' action='consulta_sucursales.php' align='center'>
                            <input type='submit' value='Sucursales' />
                        </form>
				    </td>
			    </tr>
            </table>
            <br /><br />
            <table border='0' width='100%' align='center'>
                <tr>
                    <td align='center'>
                        <a href='top5_tienda.php'><img src='img/top5_tienda.jpg' alt='TOP 5 Toda la tienda' width='1060' height='380'/></a>
                        <br /><br /><br />
                    </td>
                </tr>
                <tr>
                    <td align='center'>
                        <a href='top5_procesadores.php'><img src='img/top5_procesadores.jpg' alt='TOP 5 Procesadores' width='1060' height='380'/></a>
                        <br /><br /><br />
                    </td>
                </tr>
                <tr>
                    <td align='center'>
                        <a href='top5_graficas.php'><img src='img/top5_graficas.jpg' alt='TOP 5 Tarjetas de video' width='1060' height='380'/>
                        <br /><br /><br />
                    </td>
                </tr>
            </table>
    ";
?>
</font>
</body>
</html>