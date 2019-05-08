
@extends('layouts.default')
@section('title') 
<title>{{config('app.homepage_header_title')}}</title>
@stop
@section('content')

	@include('includes.search_div')
  <div class="row latest-results">
    <div class="portlet light bordered">
    <h2 class="caption-subject font-dark bold uppercas" style="text-align: center;"> Latest Checked Domains</h2>  
    </div> 
    <div class="col-md-4">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="fa fa-level-up font-green"></i><span class="caption-subject font-dark bold uppercas">Latest Available Websites</span>
                </div>
            </div>
            <div class="portlet-body last-domains">
              @include('pages.latest_searches_blocks.up_domains')
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="fa fa-level-down font-red-sunglo"></i><span class="caption-subject font-dark bold uppercas">Latest Down Websites</span>
                </div>
            </div>
            <div class="portlet-body last-domains">
              @include('pages.latest_searches_blocks.down_domains')
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="fa fa-map-o font-red-sunglo"></i><span class="caption-subject font-dark bold uppercas">Last Outage Reports</span>
                </div>
            </div>
            <div class="portlet-body last-domains">
              @include('pages.latest_searches_blocks.outage_domains')
            </div>
        </div>
    </div>

 
</div>
@stop

@section('js')
<script>
$('.sparkline-1').sparkline('html', {
  type: 'bar', 
  barColor: '#5cb85c',
  zeroColor: '#e9ecf3',
  zeroBarColor: '#e9ecf3', 
  posBarColor: '#5cb85c', 
  height: '20',
  negBarColor: '#d91e18', 
  tooltipValueLookups:{map:{"-1":"Down",1:"Up"}},
  stackedBarColor:["#d91e18","#5cb85c","#ff9900","#109618","#66aa00","#dd4477","#0099c6","#990099"]
});

    $(".sparkline").each(function () {
      var $this = $(this);
      $this.data({sliceColors: ['#5cb85c','#dc3912']});
      console.log($this.data());
      $this.sparkline('html', $this.data());
    });

</script>
@stop
