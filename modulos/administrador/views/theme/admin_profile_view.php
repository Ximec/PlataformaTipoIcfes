<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FUP-MIND  | Dashboard</title>
  <link rel="stylesheet" type="text/css" href="modulos/administrador/views/theme/css/admin_profile.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/themex/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="views/themex/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="views/themex/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="views/themex/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/themex/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/themex/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="views/themex/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="views/themex/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="views/themex/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <?php                    
        require_once('modulos/administrador/views/theme/inc/menu_admin2.php');
     ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Perfil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="page-wrap">
                    
                    


    <div class="page-wrap">
                    
      
       
                    <h1 class="title-page">
                            
                        Perfil

                    </h1>

                    <section class="content">

                        <div class="form-wraper">

                            <div class="row">
                      
                                <div class="set-formWrap  col-sm-12 col-md-6" id="set-formWrap">

                                    <form action="" method="post" name="change-dataForm" id="change-dataForm" class="change-dataForm">
                                        
                                        <h2 class="title-form">Editar Datos</h2>

                                        <div class="change-dataMsg" id="change-dataMsg"><?php echo $msg; ?></div>
                                    
                                        <div class="form-body">
               
                                            <div class=" form-group row user-typeTxt">
                                                <span class="col-sm-3">Tipo de usuario: </span>
                                                <div class="label-data col-sm-9">
                                                    <span class="userType"><?php echo $typeUser; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3">Usuario:</label>
                                                <div class="label-data col-sm-9">    
                                                    <input type="text" name="usuario" id="user" class="form-control user-data" tabindex="1" value="<?php echo $user; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="label-data col-sm-3">Nombre:</label>
                                                <div class="col-sm-9">    
                                                    <input type="text" name="nombre" id="name" class="form-control user-data" tabindex="2" value="<?php echo $name; ?>">
                                                </div>
                                            </div>                                
                                        
                                        </div>

                                        <div class="footer-form">
                                            
                                            <div class="form-group row footer-formRow ">
                                                <div class="col-sm-12">   
                                                    <input type="submit" name="save-changes" value="Guardar" id="save-changes" class="btn action-btn" tabindex="3">
                                                </div>
                                            </div>
                                        
                                        </div><!--footer-form-->

                                    </form>

                                </div>    
                                <div class="change-formWrap col-sm-12 col-md-6">
         
                                    <form action="" method="post" name="change-passwordForm" id="change-passwordForm" class="change-passwordForm float-right">
                                    
                                        <h2 class="title-form">Editar Password</h2>

                                        <div class="change-passMsg" id="change-passMsg"></div>
                                    
                                        <div class="form-body">
             
                                            <div class="form-group row">
                                                <label class="label-pass col-sm-3">Password:</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" id="password" class="form-control data-password" tabindex="4" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="label-pass col-sm-3">Confirmar Password:</label>
                                                <div class="col-sm-9">    
                                                    <input type="password" name="confirmPassword" id="confirm-pass" class="form-control data-password" tabindex="5" value="">
                                                </div>
                                            </div>                                    
                                       
                                        </div>

                                        <div class="footer-form">
                                            <div class="form-group row footer-formRow">
                                                <div class="col-sm-12">   
                                                    <input type="submit" name="change-password" value="Cambiar" id="change-password" class="btn action-btn" tabindex="6">
                                                </div>
                                            </div>
                                        </div><!--footer-form-->

                                    </form>       

                                </div>

                            </div> 

                        </div>

                    </section>
                
                </div>

            <?php  

                require_once("views/theme/inc/common_js.php");

            ?>
             <script src="modulos/administrador/views/theme/js/classes/Admin.js"></script>
            <script src="modulos/administrador/views/theme/js/admin_profile.js"></script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">FUP-Mind</a>.</strong>
    Todos los Derechos Reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/themex/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="views/themex/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="views/themex/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="views/themex/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="views/themex/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="views/themex/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="views/themex/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="views/themex/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="views/themex/plugins/moment/moment.min.js"></script>
<script src="views/themex/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="views/themex/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="views/themex/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="views/themex/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="views/themex/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/themex/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="views/themex/dist/js/pages/dashboard.js"></script>
</body>
</html>
