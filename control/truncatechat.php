     <?php
     include('conexion.php');
        mysql_query("truncate chat");
        echo "<script> 
                alert('Chat limpiado!');
        location.href='../perfil.php';
        </script>";
       ?>