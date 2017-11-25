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
    $texto=$_POST['txttexto'];
    //SUBIR FOTO
    $carpeta = "../foto/";
    opendir($carpeta);
    $destino = $carpeta.$_FILES['foto']['name'];
    copy($_FILES['foto'] ['tmp_name'],$destino);
    $nombrefile=$_FILES['foto']['name'];
    //REGISTRAR MASCOTA
    mysql_query("INSERT INTO `content` 
    (`iduser`,`foto`, `message`, `date`) 
    VALUES ('$id_usuario', '$nombrefile', '$texto', now())");


    echo "<script>alert('Publicación añadida!');</script>";
    header("Location: /notinatu/perfil.php");
    }

    if (isset($_POST['registrar'])) 
    {
    $email=$_POST['txtemail'];
    $phone=$_POST['txtphone'];
    $pass=$_POST['txtpass'];
    $name=$_POST['txtname'];
    $last=$_POST['txtlast'];
    mysql_query("INSERT INTO `user` 
    (`Email`, `Phone`, `Password`, `Name`, `LastName`, `idcity`) 
    VALUES ('$email', '$phone', '$pass', '$name', '$last', 1)");

    echo "<script>alert('Registro exitoso!');</script>";
        session_start();
        $_SESSION['usuario'] = $_POST['txtname'];
        header("Location: ../perfil.php");
    }
     if (isset($_POST['alertar'])) 
    {
 
     echo $usuario=$_POST['usuario'];
 
    mysql_query("INSERT INTO `content` 
    (`iduser`, `message`, `date`) 
    VALUES ( $usuario, 'en riesgo.', now())");

   echo "<script> 
                alert('Alerta enviada!');
                location.href='../perfil.php';
        </script>";
        
    }

    if (isset($_POST['notificar'])) 
    {
 
     echo $usuario=$_POST['usuario'];
 
    mysql_query("INSERT INTO `content` 
    (`iduser`, `message`, `date`) 
    VALUES ( $usuario, 'a notificado.', now())");

   echo "<script> 
                alert('Alerta enviada!');
                location.href='../perfil.php';
        </script>";
        
    }


       ?>