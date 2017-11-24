	<script> 
		function le_parece(formObj) { 

    if(!confirm("Esto es confirm en acción !  \n \n Le gustaría ver el código fuente  ?")) { 

           if(!confirm(" Esta seguro ?  \n Esta es su última oportunidad .\n 
              \n Se abrirá otra ventana \n para evitarle molestias.")) {return false;} 

              else {

               open("ejemplos/jscript/pregunta.htm");
               return false;

             }   

      }

}

		</script>
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
