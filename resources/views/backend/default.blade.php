<!DOCTYPE html>
<html>
<head>
@include('backend.includes.head')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('backend.includes.header')

 
  <!-- Left side column. contains the logo and sidebar -->
  @include('backend.includes.left-nav')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">ACME LEARNING</a>.</strong> All rights
    reserved.
  </footer>

 
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->


</body>
</html>
