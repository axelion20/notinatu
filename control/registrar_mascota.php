 <?php
 include('conexion.php');
    if (isset($_POST['registrar'])) 
    {
    //EXTRAER ID DEL USUARIO
    $usuario=$_POST['usuario'];
    $sql1=mysql_query("SELECT * from usuarios where nombres='$usuario' ",$con) 
    or die('Problema');
 	while ($row1=mysql_fetch_array($sql1)) {
    	$id_usuario = $row1['id_usuario'];
    	}	
    //VARIABLES
    $nombresm=$_POST['nombresm'];
    $nacimiento=$_POST['nacimiento'];    
    $tipo=$_POST['tipo'];
    $raza=$_POST['raza'];
    $sex=$_POST['sex'];
    //SUBIR FOTO
    $carpeta = "../foto/";
    opendir($carpeta);
    $destino = $carpeta.$_FILES['foto']['name'];
    copy($_FILES['foto'] ['tmp_name'],$destino);
    $nombrefile=$_FILES['foto']['name'];
    //REGISTRAR MASCOTA
    mysql_query("INSERT INTO `mascotas` 
    (`nombresm`, `nacimiento`, `foto`, `id_tipo`,`id_raza`,`id_sex`,`f_creacion`) 
    VALUES ('$nombresm', '$nacimiento', '$nombrefile', '$tipo', '$raza', '$sex', now()) ");

    //VERIFICAR SI EL USUARIO YA A ADOPTADO ALGUNA VEZ
    $sql2=mysql_query("SELECT * from adoptados where id_usuario=$id_usuario",$con) 
    or die('Problema');
    while ($row2=mysql_fetch_array($sql2)) 
    		{
    		$id_adoptado = $row2['id_adoptado'];
    		}

    //EXTRAER ID DE LA MASCOTA REGISTRADA POR FILTRO DE NOMBRE Y ULTIMA FECHA DE CREACIÓN
    $sql3=mysql_query("SELECT id_mascota FROM `mascotas` WHERE nombresm='$nombresm' 
    		ORDER by f_creacion DESC LIMIT 1",$con) 
    or die('Problema');
    while ($row3=mysql_fetch_array($sql3)) 
    		{
    		$id_mascota = $row3['id_mascota'];
   			 }
    //SI HA ADOPTADO, SE ANEXARA CON SU MASCOTA
    mysql_query("INSERT INTO `adopciones_mascotas` (`id_mascota`, `id_adoptado`) 
    VALUES ($id_mascota, $id_adoptado)");

    echo "<script>alert('Mascota añadida con exito!');</script>";
    }
   

//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
/*if (empty($usuario) | empty($pass)) 
	{
	header("Location: ./");
	exit();
	}
	*/
//VALIDANDO EXISTENCIA DEL USUARIO

	header("Location: /petz/perfil.php");
       ?>