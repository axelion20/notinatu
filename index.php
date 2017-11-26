<?php
  include('control/conexion.php');
  session_start();
   if (isset($_SESSION['usuario'])) 
   {
    include('headeru.php');
    }
    else{
     include('header.php');
   }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin: 0">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 ">
           <section class="col-lg-3 col-md-6 connectedSortable">
            <div class="box" >
        <a href="senal.php">
                        <button style='border: 0px' type='submit' class='btn-danger btn-block btn-flat' name='alertar' >ALERTAR
                      </button>
                      </a>
            </div>

            <div class="nav-tabs-custom">

            <div class="tab-content">

              <div class="tab-pane active" id="activity">


                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="dist/img/logo.png"" alt="User Image">
                        <span class="username">
                          <a href="#">NATUAPP</a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-lg-6">
                      <img class="img-responsive" src="http://derechoshumanos.pe/wp-content/uploads/2017/03/huaycoloro-RPP.jpg" alt="Photo">
                    </div>
                    <div class="col-lg-6">
                      <img class="img-responsive" src="http://portal.andina.pe/EDPfotografia2/Thumbnail/2012/04/07/000179881W.jpg" alt="Photo">
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
                        <span class='text-muted pull-right'>9:30 PM Hoy</span>
                      </span>
                  Me parece muy buena la app, es muy útil en momentos de desastres naturales.
                </div>
              </div>
            </div>
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="dist/img/logo.jpg" alt="Alt Text">
   
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

            <?php 
          include('control/conexion.php');
          $sql=mysql_query("
            SELECT 'c.idcontent','u.Name', 'u.LastName', 'c.message', 'c.message2', 'c.foto', 'c.date'
            FROM content c 
            order by 'c.idcontent' desc
            limit 5
            ",$con) or die('Problema 1');

            while ($row=mysql_fetch_array($sql)) 
            {
               echo "
               <div class='box box-widget'>
            <div class='box-header with-border'>
              <div class='user-block'>
               
                <span class='username'><a href='#''>
                $row[Name] $row[LastName] $row[message]</a></span>
                <span class='description'>Compartido 
                el ".substr($row['date'], 8,2)." 
                del ".substr($row['date'], 5,2)." 
                a las ".substr($row['date'], 10,6)."
                en Lima, Perú</span>
              </div>
              <div class='box-body'>

               <iframe src='https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124790.68103031644!2d-76.97005560000004!3d-12.200207899999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x9105b99988ad70ed%3A0x5be593f92f94942e!2s1S%2C+Cercado+de+Lima+15842!3m2!1d-12.200027799999999!2d-76.9736827!5e0!3m2!1ses!2spe!4v1511611167951' width='100%' height='250' frameborder='0' style='border:0' allowfullscreen></iframe>

               </div>
           
              <div class='box-tools'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i>
                </button>
     
              </div>
           
            </div>
         
            <div class='box-body'>
              <img style='width:100%' class='img-responsive pad' 
              src='foto/$row[foto]'>";
              if ($row['message2']=='Estoy bien.') {
               echo "<p style='color:#01DF01; font-size:15px'>".$row['message2']."</p>";
                }
                else{
                  echo "<p style='color:red; font-size:15px'>".$row['message2']."</p>";
                }

                           echo "<iframe src='https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=143&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId=2054569914762518' width='143' height='25' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true'></iframe>
              <span class='pull-right text-muted'>127 Me gusta - 3 comments</span>
            </div>
      
            <div class='box-footer box-comments'>
              <div class='box-comment'>
            
                <img class='img-circle img-sm' src='dist/img/user3-128x128.jpg' alt='User Image'>

                <div class='comment-text'>
                      <span class='username'>
                        Maria Gonzales
                        <span class='text-muted pull-right'>8:03 PM Today</span>
                      </span>
                Es un hecho establecido desde hace tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño.

                </div>

              </div>

            </div>

            <div class='box-footer'>
              <form action='#' method='post'>
                <img class='img-responsive img-circle img-sm' src='dist/img/logo.png' alt='Alt Text'>
   
                <div class='img-push'>
                  <input type='text' class='form-control input-sm' placeholder='Press enter to post comment'>
                </div>
              </form>
            </div>
         
          </div>
               "
             ;}
          ?>
          
          
          <!-- /.nav-tabs-custom -->
        </div>
           

        <div class="col-lg-4">
   
          <div class="info-box bg-blue" >
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Eventos</span>
              <span class="info-box-number">410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Participa en nuestros eventos!
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

          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Chat bot</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
 
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                
                
                <?php 
          $sql=mysql_query(" SELECT 'c.idchat','p.pregunta', 'r.respuesta', 'c.date'
                            FROM chat c
                            join preguntas p on 'p.idpregunta'='c.idpregunta'
                            join respuesta r on 'r.idrespuesta'='c.idrespuesta'
                            order by 'c.idchat' desc
            ",$con) or die('Problema 1');

            while ($row=mysql_fetch_array($sql)) 
            {   
               echo "     
               <div class='direct-chat-msg'>
                  <div class='direct-chat-info clearfix'>
                    <span class='direct-chat-name pull-left'>Bot</span>
                    <span class='direct-chat-timestamp pull-right'> ".substr($row['date'], 8,2)." 
                del ".substr($row['date'], 5,2)." 
                a las ".substr($row['date'], 10,6)."</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class='direct-chat-img' src='dist/img/user1-128x128.jpg' alt='Message User Image'>
                  <div class='direct-chat-text'>
                   $row[respuesta] 
                  </div>
                  
                </div>
               <div class='direct-chat-msg right'>
                  <div class='direct-chat-info clearfix'>
                    <span class='direct-chat-name pull-right'>Usuario</span>
                    <span class='direct-chat-timestamp pull-left'>".substr($row['date'], 8,2)." 
                del ".substr($row['date'], 5,2)." 
                a las ".substr($row['date'], 10,6)."</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class='direct-chat-img' src='dist/img/user3-128x128.jpg' alt='Message User Image'>
                  <div class='direct-chat-text'>
                    $row[pregunta]
                  </div>
                
            
                
              </div>
         
                       ";
                      }
                      ?>
                      <div class='direct-chat-msg'>
                  <div class='direct-chat-info clearfix'>
                    <span class='direct-chat-name pull-left'>Bot</span>
                    <span class='direct-chat-timestamp pull-right'></span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class='direct-chat-img' src='dist/img/user1-128x128.jpg' alt='Message User Image'>
                  <div class='direct-chat-text'>
                    hola! dejame un mensaje. 
                  </div>
            
            </div>

           
            <!-- /.box-footer-->
          </div>
           <!-- /.box-body -->
            


                  </div>
                  <div class="box-footer">

                <div class="input-group">
                      <span class="input-group-btn"  style='with:100%'>
                        <form action="control/insertar.php" method="post">
                          <a  class="navbar-brand"><b>Preguntas</b></a>
                    <ul class="nav navbar-nav">
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <span class="caret"></span>preguntas</a>
              <ul class="dropdown-menu" role="menu">

                          <?php 
          $sql=mysql_query(" SELECT idpregunta, pregunta FROM preguntas
            ",$con) or die('Problema 1');

            while ($row=mysql_fetch_array($sql)) 
            {
               echo "   
                     <li><a href='control/addchat.php?id=$row[idpregunta]' class='btn btn-danger' style='width: 100%; color:black' >$row[pregunta]</a></li>
                  ";
                      }
                      ?>
                </form>
                 </ul>
            </li>

          </ul> 
                       <a href='control/truncatechat.php' class='btn btn-primary' >LIMPIAR CHAT</a> 

                      </span>
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
