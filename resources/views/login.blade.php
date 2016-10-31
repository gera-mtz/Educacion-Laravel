<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Educacion|Login</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="csss/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body class="login" style="background-color: #009fda">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="inicio" class="login-form" method="post">
              <h1>Inicia Sesión</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" name="password" />
              </div>
              <div>
                <input type="submit" value="Entrar" class="btn btn-info">
              </div>
              <div>
                <a href="{{url('auth/facebook')}}"><img src="img/fb.svg" alt="Login Facebook" width="42" height="42" title="Inicia sesion con facebook" /></a>
                <a href="{{url('auth/twitter')}}"><img src="img/tw.svg" alt="Login Twitter" width="42" height="42" title="Inicia sesion con twitter"/></a>
                <a href="{{url('auth/google')}}"><img src="img/go.svg" alt="Login Google+" width="42" height="42" title="Inicia sesion con google+"/></a>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>