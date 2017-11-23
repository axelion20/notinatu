 <?php
 include('conexion.php');
    if (isset($_POST['registrar'])) 
    {
    mysql_query("
    INSERT INTO `usuarios` 
    (`pass`, `nombres`, `email`) 
    VALUES ('$_POST[txtpass]', '$_POST[txtnombres]', '$_POST[txtemail]');");
    //EXTRAER ID DEL USUARIO

    $sql1=mysql_query("SELECT * from usuarios where email='$_POST[txtemail]' ",$con) 
    or die('Problema');
 	while ($row1=mysql_fetch_array($sql1)) {
    	$id_usuario = $row1['id_usuario'];
    	}	
    //REGISTRAR USUARIO EN TABLA ADOPTADO
    	mysql_query("INSERT INTO `adoptados` (`id_usuario`) VALUES ($id_usuario)");
    	}
   

//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
/*if (empty($usuario) | empty($pass)) 
	{
	header("Location: ./");
	exit();
	}
	*/
//VALIDANDO EXISTENCIA DEL USUARIO

$sql = mysql_query("
	SELECT * from usuarios 
	where email = '$_POST[txtemail]' and pass = '$_POST[txtpass]' ");
if ($row = mysql_fetch_array($sql)) 
		{
		session_start();
		$_SESSION['usuario'] = $row['nombres'];
		echo "<script> alert('Registro exitoso! Sea bienvenido.');</script>";
		header("Location: ../perfil.php");
		} 
	
       ?>