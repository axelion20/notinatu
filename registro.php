<?php
  include('control/conexion.php');
  session_start();
 if (isset($_SESSION['usuario'])) 
 {
  header("Location: /notinatu/perfil.php");
  }
  else{
   include('header.php');
 }
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
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 ">
           <section class="col-lg-3 col-md-6 connectedSortable">
            <div class="nav-tabs-custom">
            <div class="tab-content">
              <div class="tab-pane active" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="https://icon-icons.com/icons2/1310/PNG/512/recycling_86328.png" alt="User Image">
                        <span class="username">
                          <a href="#">NATUAPP</a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="https://img.elcomercio.pe/files/article_content_ec_fotos/uploads/2017/03/21/58d1d581c901b.jpeg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="https://img.elcomercio.pe/files/article_content_ec_fotos/uploads/2017/03/21/58d1cfc2397c2.jpeg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="https://cde.peru.com//ima/0/1/5/9/0/1590748/611x458/peru.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="http://derechoshumanos.pe/wp-content/uploads/2017/03/huaycoloro-RPP.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="http://portal.andina.pe/EDPfotografia2/Thumbnail/2012/04/07/000179881W.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <div class='box-footer box-comments'>
              <div class='box-comment'>
                <img class='img-circle img-sm' src='dist/img/user3-128x128.jpg' alt='User Image'>
                <div class='comment-text'>
                      <span class='username'>
                        Maria Gonzales
                        <span class='text-muted pull-right'>8:03 PM Today</span>
                      </span>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
              </div>
            </div>
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
   
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Preciona enter para comentar...">
                </div>
              </form>
            </div>
                <!-- /.post -->
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
         
        </section>

           <div class="col-lg-5">
            <div class="box box-solid">
              <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
            <form class="form-horizontal" action="control/insertar.php" method="post">
              <div class="user-block">
                    <img class="img-bordered-sm" src="https://cdn.pixabay.com/photo/2017/07/18/23/23/user-2517433_960_720.png" alt="User Image">
                        <span class="username">
                          REGISTRO DE USUARIO
                        </span>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombres</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nombres" name="txtname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Apellidos</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Apellidos" name="txtlast" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Teléfono</label>

                    <div class="col-sm-10">
                      <input type="number" max="999999999" class="form-control" placeholder="Teléfono" name="txtphone" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Email" name="txtemail" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Contraseña</label>

                    <div class="col-sm-10">
                      <input type="password" name="txtpass" class="form-control" placeholder="Password" required name="txtpass">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" required> Acepto todos los <a href="#">terminos y condiciones.</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" name="registrar">Registrar
                      </button>
                    </div>
                  </div>
                </form>
        </div>
      </div>
       </div>    

        <div class="col-lg-4">
   

          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Events</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="box box-solid">
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Eventos próximos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img style="width: 100%" src="https://www.mef.gob.pe/contenidos/prensa/images/ntdp_26072016.jpg" alt="First slide">

                    <div class="carousel-caption">
                      1era imagen
                    </div>
                  </div>
                  <div class="item active">
                    <img style="width: 100%" src="https://image.slidesharecdn.com/ivanvsquezrivasplata-131114141944-phpapp01/95/utilizacin-de-herramientas-esri-en-la-gestin-de-riesgo-de-desastres-visor-geogrfico-sinpad-ivan-vsquez-rivasplata-instituto-nacional-de-defensa-civil-per-2-638.jpg?cb=1384439642" alt="Second slide">

                    <div class="carousel-caption">
                      2da imagen
                    </div>
                  </div>
                  <div class="item">
                    <img style="width: 100%" src="https://image.slidesharecdn.com/elcambioclimticoylosdesastrespeligrosgeolgicosenelsurdelper-120525160607-phpapp02/95/el-cambio-climtico-y-los-desastres-peligros-geolgicos-en-el-sur-del-per-1-728.jpg?cb=1337962830" alt="Third slide">

                    <div class="carousel-caption">
                      3era imagen
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

      </div>
  
      </div>
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
