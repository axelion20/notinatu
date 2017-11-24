     <?php
     include('conexion.php');
       echo  $friend=$_GET['friend'];
        echo $me=$_GET['me'];
        mysql_query("INSERT INTO `friend` 
        (`iduser1`, `iduser2`, `date`) 
        VALUES ('$me', '$friend', now())");
        echo "<script> 
                alert('Usuario añadido con exito!');
        location.href='../perfil.php';
        </script>";
       ?>