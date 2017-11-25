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
            <li class="dropdown user user-menu">
            <a href="index.php">
              <i class="fa fa-home"></i>
             <span class="hidden-xs">Inicio</span>
            </a>
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
             <li class="dropdown user user-menu" style="background: red">
            <a href="alerta.php">
             <i class="fa fa-exclamation-triangle"></i>
              <span class="hidden-xs">Alerta</span>
            </a>
          </li>
            <li class="dropdown user user-menu">
            <a href="registro.php">
             <i class="fa fa-user"></i>
              <span class="hidden-xs">Registrar</span>
            </a>
          </li>
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-user"></i>
              <span class="hidden-xs">Iniciar sesión</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 100%">
               <form action="control/validar.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email o Télefono" name="txtusuario">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="txtpass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                 <a href="#" style="color: white">Olvidé mi password</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
            <div class="col-lg-12">
              <a class="btn btn-block btn-social btn-facebook">
                <i class="fa fa-facebook"></i> Ingresar con Facebook
              </a>
              <a class="btn btn-block btn-social btn-google">
                <i class="fa fa-google-plus"></i> Ingresar con Google
              </a>
            </div>

            
          </div>
        </form>
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