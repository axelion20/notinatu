 <?php
 include('conexion.php');
    if (isset($_POST['registrar_cita'])) 
    {
    mysql_query("
    INSERT INTO `citas` 
    (`id_mascota`, `id_dia`, `id_hora`, `tema`, `descripcion`, `fecha`) 
    VALUES ('$_POST[id]', '$_POST[dia]', '$_POST[hora]', '$_POST[tema]', '$_POST[des]', now());");

//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
/*if (empty($usuario) | empty($pass)) 
	{
	header("Location: ./");
	exit();
	}
	*/
		header("Location: ../citas.php");
	}
       ?>