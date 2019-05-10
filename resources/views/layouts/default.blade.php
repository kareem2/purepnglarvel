<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body>
    @include('includes.header')
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
              @yield('content')
            <!-- /.box -->
          </div>
          <!-- /.content -->
        <!-- /.content-wrapper -->
        @include('includes.footer')
    </div>
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
@include('includes.foot')
@yield('js')
</body>
</html>
