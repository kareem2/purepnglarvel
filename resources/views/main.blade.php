<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition layout-boxed skin-blue layout-top-nav">
<div class="wrapper">

  

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <ol class="breadcrumb">
          @yield('breadcrumb')
        </ol>
      </section>


      <!-- Main content -->
      <section class="content">
        @yield('content')
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  @include('includes.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
@include('includes.foot')
</body>
</html>
