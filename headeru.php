<header class="main-header">
    <nav class="navbar navbar-static-top" style="margin: 0px">
      <div class="container">
        <div class="navbar-header" style="margin-top: -10px">
          <a href="#" class="navbar-brand">
            <img width="40px" class="img-circle " src="https://icon-icons.com/icons2/1310/PNG/512/recycling_86328.png" alt="User Image">
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio </a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Buscar...">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">6</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 6 nuevas noticias</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Tus amigos publicaron hoy
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Ocurrió un suceso muy peligroso por Lima, Perú a las 20 horas el día 23 del 11 del año 2017
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 nuevos miembros se unieron
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Cambiaste tu nombre de usuario
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="noticias.php">Ver todo</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
           <li class="dropdown user user-menu">
            <a href="index.php">
              <i class="fa fa-home"></i>
             <span class="hidden-xs">Inicio</span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <!--  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
             -->
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><?php echo $_SESSION['usuario'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['usuario'];?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="control/cerrar.php" class="btn btn-default btn-flat">Cerrar</a>
                </div>
              </li>
            </ul>
          </li>

          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>