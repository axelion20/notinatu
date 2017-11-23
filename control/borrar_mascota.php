	<?php
	include('conexion.php');
	$id_mascota = $_REQUEST['id'];
		mysql_query(
		"DELETE FROM mascotas WHERE id_mascota=$id_mascota");
				echo "<script> 
				alert('Mascota borrada con exito!');
		location.href='../perfil.php';
		</script>";
	?>
