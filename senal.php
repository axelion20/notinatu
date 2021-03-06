<?php
  include('control/conexion.php');
  session_start();
   // if (isset($_SESSION['usuario'])) 
   // {
   //  include('headeru.php');
   //  }
   //  else{
   //   include('header.php');
   // }
   ?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NOTINATU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin: 0">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      
      <!-- Main row -->
      <div class="row" style="margin-top: 6rem; ">
        <div class="col-lg-10 col-lg-offset-1 ">
          <section class="col-lg-4 col-lg-offset-4 col-md-6 connectedSortable">
            <div class="box" style="width: 100%;">
              <img src="https://media.giphy.com/media/14iDTwt1Pu1M4g/giphy.gif" width="100%" height="100%" style="height: 250px;">
            </div>
            <h1>Pulso del usuario</h1>
            <?php
        include('control/conexion.php');
          
                 if (isset($_SESSION['usuario'])) 
                 {
                  echo "<form action='control/insertar.php' method='post' style='text-align:center;'>
                        <input type='hidden' name='usuario' name='usuario' value='$_SESSION[id]'>
                      <button class='btn btn-danger' style='width: 100%; height: 70px; font-size: 40px; margin-bottom:5px' name='alertar' >En riesgo!
                      </button>
                      
                    </form>";
                  }
                  else{
                   echo "<form action='control/insertar.php' method='post' style='text-align:center;'>
                        <input type='hidden' name='usuario' name='usuario' value='1'>
                      <button class='btn btn-danger' style='width: 100%; height: 70px; font-size: 40px; margin-bottom:5px' name='alertar' >En riesgo!
                      </button>
                      
                    </form>";
                 }
                 ?>

                 <?php
        include('control/conexion.php');
          
                 if (isset($_SESSION['usuario'])) 
                 {
                  echo "<form action='control/insertar.php' method='post' style='text-align:center;'>
                        <input type='hidden' name='usuario' name='usuario' value='$_SESSION[id]'>
                      <button class='btn btn-success' style='width: 100%; height: 70px; font-size: 40px;' name='notificar' >Estoy bien
                      </button>
                      
                    </form>";
                  }
                  else{
                   echo "<form action='control/insertar.php' method='post' style='text-align:center;'>
                        <input type='hidden' name='usuario' name='usuario' value='2'>
                      <button class='btn btn-success' style='width: 100%; height: 70px; font-size: 40px;' name='notificar' >Estoy bien
                      </button>
                      
                    </form>";
                 }
                 ?>


          </section>
      <audio controls autoplay style="visibility: hidden;">
  <source src="sonido.ogg" type="audio/ogg">
  <source src="sonido.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
          
        
      </div>
  
      </div>
      <!-- <div class="row">
        <div class="col-md-12">
          <button>Volver al inicio</button>
        </div>
      </div> -->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="margin: 0px">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.3.0
    </div>
    <strong>Copyright &copy; 2017 <a href="">GalaxyTec</a>.</strong> 
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
</body>

</html>
