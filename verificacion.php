<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Verificacion</title>
<link rel="shortcut icon" href="img/favicon.png">
</head>

<body bgcolor="black">
<font color='white' face="Bahnschrift">
<?php
    include ('conexion.php');

    $verifica_id='';
    $verifica_pass='';

    $link=Conectarse();

    $consulta=("select id, contrasena from empleados_t");
    
    $result_consulta=odbc_exec($link,$consulta);

    while($row=odbc_fetch_array($result_consulta))
    {
        $verifica_id=$row['id'];
        $verifica_pass=$row['contrasena'];
    }
    
    if($verifica_id != '' && $verifica_pass != '')
    {
        $verifica_id=$_POST['user'];
        switch ($verifica_id)
        {
            case '1000':
                include ('perfil_director.php');
                break;
            case '1001':
                include ('perfil_tecnico.php');
                break;
            case '1002':
                include ('perfil_tecnico.php');
                break;
            case '1003':
                include ('perfil_almacenista.php');
                break;
            case '1004':
                include ('perfil_repartidor.php');
                break;
            case '1005':
                include ('perfil_vendedor.php');
                break;
            case '1006':
                include ('perfil_contador.php');
                break;
            case '2000':
                include ('perfil_gerente.php');
                break;
            case '2001':
                include ('perfil_tecnico.php');
                break;
            case '2002':
                include ('perfil_almacenista.php');
                break;
            case '2003':
                include ('perfil_repartidor.php');
                break;
            case '2004':
                include ('perfil_vendedor.php');
                break;
            default:
                include ('index_fail.php');
                break;
        }
    }
    else
    {
        include ('index_fail.php');
    }
?>
</font>
</body>
</html>