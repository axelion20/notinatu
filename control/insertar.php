 <?php
 include('conexion.php');
    if (isset($_POST['publicar'])) 
    {
    //EXTRAER ID DEL USUARIO
    $usuario=$_POST['usuario'];
    $sql1=mysql_query("SELECT * from user where Name='$usuario' ",$con) 
    or die('Problema');
 	while ($row1=mysql_fetch_array($sql1)) {
    	$id_usuario = $row1['IdUser'];
    	}	
    //VARIABLES
    echo $texto=$_POST['txttexto'];
    //SUBIR FOTO
    $carpeta = "../foto/";
    opendir($carpeta);
    $destino = $carpeta.$_FILES['foto']['name'];
    copy($_FILES['foto'] ['tmp_name'],$destino);
    $nombrefile=$_FILES['foto']['name'];
    //REGISTRAR MASCOTA
    mysql_query("INSERT INTO `content` 
    (`iduser`,`foto`, `message`) 
    VALUES ('$id_usuario', '$nombrefile', '$texto')");


    echo "<script>alert('Publicación añadida!');</script>";
    }

header("Location: /notinatu/perfil.php");
       ?>