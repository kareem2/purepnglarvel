
<script src="{{ URL::asset('/plugins/jQuery/jQuery.min.js') }}"></script>
<script src="{{ URL::asset('/plugins/fleximages/jquery.flex-images.min.js') }}"></script>
<script src="{{ URL::asset('/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ URL::asset('/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('/js/jquery.autosize.min.js') }}"></script>
<script src="{{ URL::asset('/js/timeago/jqueryTimeago_en.js') }}"></script>
<script src="{{ URL::asset('/js/bootbox.min.js') }}"></script>
<script src="{{ URL::asset('/js/count.js') }}"></script>
<script src="{{ URL::asset('/js/functions.js') }}"></script>
<script src="{{ URL::asset('/js/jquery.form.js') }}"></script>
<script src="{{ URL::asset('/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/plugins/jquery.counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('/plugins/jquery.counterup/waypoints.min.js') }}"></script>

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="{{ URL::asset('/js/ie-emulation-modes-warning.js') }}"></script>

<script src="{{ URL::asset('/js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ URL::asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    
  $('#imagesFlex').flexImages();
  $('#mainPageImagesFlex').flexImages({ maxRows: 3, truncate: true });
</script>
  

<script type="text/javascript">
  jQuery(document).ready(function( $ ) {
    $('.counter').counterUp({
    delay: 10, // the delay time in ms
    time: 1000 // the speed time in ms
    });
  });
  </script>
This page took <strong>{{ (microtime(true) - LARAVEL_START) }} </strong> seconds to render  