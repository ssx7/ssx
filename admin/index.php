<?php
session_start();

if(isset($_SESSION)) :
  $_SESSION['name'] = isset($_POST['login']) ? $_POST['login'] : $_SESSION['name'];
  $_SESSION['haslo'] = isset($_POST['pass']) ? $_POST['pass'] : $_SESSION['haslo'];

  if($_SESSION['name'] == 'szymon' && $_SESSION['haslo'] == 'haslo') :
    $_SESSION['is_admin']=true;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel administracyjny</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CAVS</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
          <a  class="btn btn-danger" href="logout.php">wyloguj sie</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAWIGACJA GŁÓWNA</li>
        <li>
          <a href="?controller=glowna">
             <i class="fa fa-home"></i><span>Home</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
             <i class="fa fa-th"></i> <span>Tabela</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?controller=KonfWs"><i class="fa fa-circle-o"></i> Konferencja Wschodnia</a></li>
            <li ><a href="?controller=KonfZach"><i class="fa fa-circle-o"></i> Konferencja Zachodnia</a></li>
            <li ><a href="?controller=statystyki"><i class="fa fa-circle-o"></i> Statystyki</a></li>
          </ul>
        </li>
        <li>
        <li>
          <a href="?controller=galeria">
            <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Galeria</span>
          </a>
        </li>
        <li>
          <a href="?controller=players">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Zawodnicy</span>
          </a>
        </li>
        <li>
          <a href="?controller=calendar">
            <i class="fa fa-calendar" aria-hidden="true"></i> <span>Kalendarz rozgrywek</span>
          </a>
        </li>
        <li>
          <a href="?controller=articles">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Artykuły</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<?php
  include('routes.php');
?>
  

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>

<?php else : header("Location: login.php"); ?>
<?php  endif; endif; ?>