
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
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite", 
      "url": "https://purepng.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://purepng.com/search?={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "name": "PurePNG",
      "description": "Download Pink Heart transparent PNG Image for free. This high quality free PNG image without any background is about heart, love, icon, clipart, emotional heart, pink and flat. -  PurePNG is a free to use PNG gallery where you can download high quality transparent CC0 PNG images without any background. From cliparts to people over logos and effects with more than 30000 transparent free high resolution PNG photos on line.",
      "logo": "https://purepng.com/public/ci/cd/press/logo/bild_text_marke/purepng_logow500.png",
      "sameAs": [
        "https://twitter.com/PurePNGcom",
        "https://www.facebook.com/Purepng-187287722034914/",
        "https://www.instagram.com/purepng_official/",
        "https://plus.google.com/b/102438531136113257875/102438531136113257875"
      ]
    }
    </script>
<script src="{{ URL::asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    
$('#imagesFlex').flexImages();

$('#btnFormPP').click(function(e){
    $('#form_pp').submit();
});

$('input').iCheck({
          radioClass: 'iradio_flat-green',
          checkboxClass: 'icheckbox_square-green',
});


</script>
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "https://purepng.com/category/clipart",
    "name": "Clipart"
    }
  }
 ]
}
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