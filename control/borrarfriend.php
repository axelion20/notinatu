	<?php
	include('conexion.php');
	$id = $_REQUEST['id'];
		mysql_query(
		"DELETE FROM friend WHERE idfriend=$id");
				echo "<script> 
				alert('Usuario eliminado con exito!');
		location.href='../perfil.php';
		</script>";
	?>
