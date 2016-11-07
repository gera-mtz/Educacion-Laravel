<!DOCTYPE html>
<html lang="es-mx">
  <head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <!-- Bootstrap core CSS -->
    <link href= "{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href= "{{URL::asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href= "{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    @yield('resources')
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!--  <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>Home</span></a>
            </div>-->
            <div class="clearfix"></div>
            <!-- menu prile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{URL::asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Hola mundo</h2>
              </div>
            </div>
            <!-- /menu prile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>#####################</h3> <!-- parte modificada -->
                <ul class="nav side-menu">
                  <li id="perfil">
                    <a href="perfil"><i class="fa fa-edit"></i> Perfil</span></a>
                  </li>
                  <li id="grupos">
                    <a href="grupos"><i class="fa fa-group"></i> Grupos</span></a>
                  </li>
                  <li id="tareascal">
                    <a href="tareaspract"><i class="fa fa-list-alt"></i> Tareas - Practicas</span></a>
                  </li>
                  <li id="notas">
                    <a href="notas"><i class="fa fa-pencil-square-o"></i> Notas</span></a>
                  </li>
                  <li id="agenda">
                    <a href="agenda"><i class="fa fa-calendar"></i> Agenda</span></a>
                  </li>
                  <li id="sliders">
                    <a href="sliders"><i class="fa fa-sliders"></i> Sliders</span></a>
                  </li>
                  <li id="reportes">
                    <a href="reportes"><i class="fa fa-file-text"></i> Reportes</span></a>
                  </li>
                  <li>
                    <a href="logout"><i class="fa fa-power-off"></i> Salir </span></a>
                  </li>
                </ul>
              </div>
            </div>
          <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle" onClick="cambiomenu()"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                    <li>
                      <a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                    <li>
                      <a>
                        <span class="image">
                          <img src="{{URL::asset('images/img.jpg')}}" alt="Profile Image" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                          <img src="{{URL::asset('images/img.jpg')}}" alt="Profile Image" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                          <img src="{{URL::asset('images/img.jpg')}}" alt="Profile Image" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                          <img src="{{URL::asset('images/img.jpg')}}" alt="Profile Image" />
                        </span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a href="inbox.html">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        @yield('content')
      </div>
    </div>
    @yield('more')
    @yield('scripts')
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
  </body>
</html>