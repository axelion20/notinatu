
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
           <section class="col-lg-4 col-md-6 connectedSortable">

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
                    <div class="col-sm-5">
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
                        <div class="col-sm-5">
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
          
          <?php 
          include('control/conexion.php');
          $sql=mysql_query("
            SELECT c.idcontent,u.Name, u.LastName, c.message, c.foto, c.date
            FROM content c 
            join user u on u.IdUser=c.iduser
            order by c.idcontent desc
            limit 5
            ",$con) or die('Problema 1');

            while ($row=mysql_fetch_array($sql)) 
            {
               echo "
               <div class='box box-widget'>
            <div class='box-header with-border'>
              <div class='user-block'>
                <img class='img-circle' src='https://cdn.pixabay.com/photo/2017/07/18/23/23/user-2517433_960_720.png' alt='User Image'>
                <span class='username'><a href='#''>
                $row[Name] $row[LastName]</a></span>
                <span class='description'>Compartido 
                el ".substr($row['date'], 8,2)." 
                del ".substr($row['date'], 5,2)." 
                a las ".substr($row['date'], 10,6)."
                en Lima, Perú</span>
              </div>
           
              <div class='box-tools'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i>
                </button>
              </div>
           
            </div>
         
            <div class='box-body'>
             <iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2252.7739294017865!2d-76.97069698353549!3d-12.199692114978891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1511589447670' width='100%' height='250' frameborder='0' style='border:0' allowfullscreen></iframe>
              <p>$row[message]</p>
              <button type='button' class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>
              <button type='button' class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Like</button>
              <span class='pull-right text-muted'>127 likes - 3 comments</span>
            </div>
      
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

            <div class='box-footer'>
              <form action='#' method='post'>
                <img class='img-responsive img-circle img-sm' src='dist/img/user4-128x128.jpg' alt='Alt Text'>
   
                <div class='img-push'>
                  <input type='text' class='form-control input-sm' placeholder='Preciona enter para comentar...'>
                </div>
              </form>
            </div>
         
          </div>
               "
             ;}
          ?>    
          <!-- /.nav-tabs-custom -->
        </div>
           

        <div class="col-lg-3">
   
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
              <h3 class="box-title">Direct Chat</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                  <i class="fa fa-comments"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    hola! dejame un mensaje. 
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">ayuda</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
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
