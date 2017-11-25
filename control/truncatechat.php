     <?php
     include('conexion.php');
        mysql_query("truncate chat");
        echo "<script> 
                alert('Chat limpiado!');
        location.href='../index.php';
        </script>";
       ?>