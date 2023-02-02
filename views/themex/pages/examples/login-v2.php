<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FUP MIND | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/themex/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="views/themex/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/themex/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="views\themex\pages\examples\images\logo.png" width="300" height="250">
      <a href="#" class="h1"><b>FUP-</b>MIND</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login</p>
      <div class="msg-form">
                        	<?php  

                        		echo $msg;

                        	?>
      <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="login-form" id="login-form" name="login-form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" id="user" placeholder="Ingrese su Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="typeUser" class="col-sm-4"><span class="fas fa-user-tag"></span>&nbspTipo:</label>  
          <div class="col-sm-8">
              <select name="typeUser" id="typeUser" class="form-control">
                <option value="">Seleccione un tipo de usuario</option>
                <option value="admin">Administrador</option>
                <option value="alumn">Alumno</option>
              </select>
          </div>
      </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" value="Login" id="login" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="views/themex/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/themex/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/themex/dist/js/adminlte.min.js"></script>
<?php

            require_once("views/theme/inc/common_js.php");

        ?>

<script type="text/javascript" src="views/theme/js/login.js"></script>
</body>
</html>
