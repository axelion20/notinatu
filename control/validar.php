<?php
include('conexion.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];

//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (substr($usuario,0,1)=="'" | empty($usuario) | empty($pass)) 
	{
	header("Location: ../");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = mysql_query("SELECT * from user where Phone = '$usuario' and Password = '$pass' ");
if ($row = mysql_fetch_array($sql)) 
		{
		session_start();
		$_SESSION['usuario'] = $row['Name'];
		$_SESSION['id'] = $row['IdUser'];
		header("Location: ../perfil.php");
		}else
		{
			$sql = mysql_query("SELECT * from user where Email = '$usuario' and Password = '$pass' ");
			if ($row = mysql_fetch_array($sql)) 
					{
					session_start();
					$_SESSION['usuario'] = $row['Name'];
				$_SESSION['id'] = $row['IdUser'];	$_SESSION['id'] = $row['IdUser'];
					header("Location: ../perfil.php");
					}else
						{
						header("Location: ../");
						exit();
					}
		}
}
mysql_free_result($sql);
mysql_close($con);
?>