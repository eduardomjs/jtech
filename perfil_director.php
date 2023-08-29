<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Bievenido Director Ejecutivo</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor="black">
<font color='white' face="Bahnschrift">
<?php
    /*include ('conexion.php');
    $link3=Conectarse();
    $consulta=("select nombre, apellido, perfil from empleados_t");
    $result_consulta=odbc_exec($link3,$consulta);
    $mostrar_nombre=$row['nombre'];
    $mostrar_apellido=$row['apellido'];
    $mostrar_perfil=$row['perfil'];
    echo    "<table border='0' width='100%'>
                <tr>
                    <td colspan='2'>
                        <br />
                        <h1 align='center'>Bienvenido</h1><br />
                        <br />
                    </td>
                    <td colspan='2'>
                        <br />";
                        echo    "Nombre: ".$mostrar_nombre;
                        echo    "<br />Apellido: ".$mostrar_apellido;
                        echo    "<br />Perfil: ".$mostrar_perfil;
    echo                "<br />
                    </td>                    
                </tr>
            </table>
    */
    echo    "
            <form name='logout' method='post' action='index.php' align='right'>
                <input type='submit' value='Cerrar sesion' />
            </form>
            <font size='16'>
                <h1 align='center' >Bienvenido Director Ejecutivo</h1>
            </font>
            <h1 align='center' >Eduardo Jimenez</h1><br />
            <h1 align='center' >Consultar</h1><br />
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
    ";
?>
</font>
</body>
</html>