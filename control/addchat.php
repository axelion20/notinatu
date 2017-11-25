     <?php
     include('conexion.php');
        $id=$_GET['id'];
        mysql_query("INSERT INTO `chat` 
        (`idpregunta`, `idrespuesta`, `date`) 
        VALUES ($id,$id, now())");
        echo "<script> 
                alert('Mensaje enviado!');
        location.href='../index.php';
        </script>";
       ?>