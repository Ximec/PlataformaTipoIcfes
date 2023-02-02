<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FUP-MIND  | Dashboard</title>


  <link rel="stylesheet" type="text/css" href="modulos\examenes\views\theme\css\test.css">
  <link rel="stylesheet" type="text/css" href="views\theme\css\datatables.min.css">
        <link rel="stylesheet" type="text/css" href="modulos/administrador/views/theme/css/admin_student.css">
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
            <h1 class="m-0">Registro de Examenes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Registro de Examenes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="page-wrap">

                    
                
    <div class="page-wrap">
            
            <section class="content">

                 

                <h1 class="title-page">
                            
                    <span>Registro de examenes</span>
                    
                </h1>

                <div class="add-testBar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="add-testWrap col-12 col-sm-6">
                                <form action="examenes.php" method="post" class="add-testForm form-inline" role="search" name="add-testForm">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <label for="test-name" id="test-nameLabel" class="test-nameLabel col-12 col-md-3 col-lg-2  no-padding">
                                                Nombre:
                                            </label>
                                            <input type="text" name="testName" class="form-control test-nameTxt col-8 col-sm-8 col-md-6 col-lg-8" placeholder="Nombre del examen">
                                            <button name="add-testBtn" class="btn add-testBtn col-4 col-sm-4 col-md-3 col-lg-2">
                                                Registrar
                                            </button>
                                        </div>
                                              
                                    </div>
                                </form>  
                            </div>
                            <div class="search-formWrap col-12 col-sm-6">
                                <div class="col"">
                                    <form class="search-form float-right" id="search-form">
                                        <div class="dataTables_filter input-group" id="admin-table_filter">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="table-container">

                    <div class="ajax-msg" id="ajax-msg">
                        <?php

                            echo $msg;
                        
                        ?> 
                    </div>
                    
                    <div class="table-container" id="table-container">
                    

                        <?php

                            echo $dataTable;

                        ?>

                    </div>
                </div>

            </section>
        
        </div>

            </div><!--main-container-->

            <div class="modal" id="del-modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Eliminar</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>
                        <span id="del-modalTxt">
                            Esta seguro que quiere eliminar el alumno <span id="student-nameDel"></span>.
                        </span>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn close-modal" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="del-confirm" value="" class="btn del-confirm">Borrar</button>
                  </div>
                </div>
              </div>
            </div>

            <?php  

                require_once("views/theme/inc/common_js.php");

            ?>
            <script src="modulos/alumnos/views/theme/js/classes/Student.js"></script>
            <script src="views/theme/js/libs/datatables.min.js"></script>
            <script src="modulos/administrador/views/theme/js/admin_students.js"></script>
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
