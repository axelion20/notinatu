	<?php
	include('conexion.php');
	$id = $_REQUEST['id'];
		mysql_query(
		"DELETE FROM content WHERE idcontent=$id");
				echo "<script> 
				alert('Publicación borrada con exito!');
		location.href='../perfil.php';
		</script>";
	?>
