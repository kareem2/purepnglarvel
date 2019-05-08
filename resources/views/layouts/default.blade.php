<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-boxed page-md">

    @include('includes.header')

  <div class="clearfix"> </div>

  <!-- Full Width Column -->

    <div class="page-container">
      <div class="page-content-wrapper">
        <div class="page-content">
          <!-- Content Header (Page header) -->
          @hasSection('breadcrumb')
          <ul class="page-breadcrumb breadcrumb">
              @yield('breadcrumb')
          </ul>
          @endif
          <div class="page-head">
            @yield('header')
          </div>
          <!-- Main content -->
          <div class="content">
            <div class="container margin-bottom-40 padding-top-40">
              @yield('content')
            </div>
            <!-- /.box -->
          </div>
          <!-- /.content -->
        <!-- /.content-wrapper -->
        @include('includes.footer')
    </div>
    </div>
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
@include('includes.foot')
@yield('js')
</body>
</html>
