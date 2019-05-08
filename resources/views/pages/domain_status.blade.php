
@extends('layouts.default')
@section('title') 
<title>Is {{$unprefixed_domain_name}} down for everyone or just me?</title>
<meta name="description" content="Check if {{$prefixed_domain_name}} is live and follow the troubleshooting instructions to reach the website.">
@stop
@section('content')

  <div class="tiny-search">
  @include('includes.search_div')
  </div>
  <div class="row latest-results">
    <div class="col-md-7">
      <div id="domain-status-block">
      
        @if(is_null($domain))      
          @include('pages.domain_status.empty_status_block', ['name' => $unprefixed_domain_name])
        @else
          @include('pages.domain_status.status_block')
        @endif
      </div>
      <div class="portlet light bordered">
            <div class="portlet-title">
              <div class="caption caption-md">
                
                  <i class="fa fa-map-marker font-red-thunderbird"></i><h3 class="caption-subject font-dark bold uppercas font-red-thunderbird domain-outage-caption no-margin">Outage Map for {{ucwords($unprefixed_domain_name)}}</h3>
                  <span class="caption-helper">Last {{config('app.lastest_outages_interval')}} hours</span>
              </div>
              <div class="actions">
                @if($is_outage_report_allowd)
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger mt-ladda-btn ladda-button" id="report-issue" data-style="zoom-in">

 

                      <span class="ladda-label">
                        Report Issue
                      </span>
                    </button>
                  </div>
                @endif
              </div>
            </div>
            <div class="portlet-body last-domains">
              <div class="row">
                <div class="col-md-12" id="world-map">
                </div>  
              </div>
              <div class="row">

                <div class="col-md-5">
                  <div class="table-scrollable slimScrollDiv" id="last-outage-table">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Time </th>
                                <th> Location </th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($history_reports)
                          
                            @foreach($history_reports as $key => $report)
                              @if($report['status'] == 1)
                              <tr class='font-green-meadow'>
                              @elseif($report['status'] == -1)
                              <tr class='font-yellow-crusta'>
                              @elseif($report['status'] == 0)
                              <tr class='font-red'>
                              @else
                              <tr>
                              @endif
                                  <td>{{$key + 1}}</td>
                                  <td title="{{$report['created_at']}}">{{$report['human_diff']}}</td>
                                  <td>{{$report['city']}}</td>                                                  
                              </tr>
                            @endforeach
                          @endif
                        </tbody>
                    </table>
                  </div>
                </div>


                <div class="col-md-7">
                  <div class="chart" id="outage-chart"></div>
                  
                  <span class="badge badge-default badge-roundless" style="background: red;"> Down</span>
                  <span class="badge badge-default badge-roundless" style="background: green;"> Up</span>
                  <span class="badge badge-default badge-roundless" style="background: yellow; color: black"> Outage</span>
                
                </div>
              </div>
            </div>
      </div> 
      
      <div id="domain-information-block">
        @if(!is_null($domain))            
          @include('pages.domain_status.domain_info_block')
        @endif
      </div>

      <div class="portlet light bordered">
          <div class="portlet-title">
              <div class="caption caption-md">
                  <i class="fa fa-heartbeat font-red-sunglo"></i><span class="caption-subject font-dark bold uppercas">Troubleshooting Instructions</span>
              </div>
          </div>
          <div class="portlet-body last-domains">
            <p>{{ucwords($unprefixed_domain_name)}} is UP, but you can't load it with your browser? Try this:
            </p>

            <ol class="trouble-shooting-list">
                <li>Hit CTRL + F5 keys simultaneously. This will make your browser empty the cookies and reload the page without any previously stored data about it.</li>
                <li>Clean the cache of your computers DNS. This will allow your device to set up the connection to {{$unprefixed_domain_name}} refreshing the route details.</li>
                <li>Restart your modem and if does not help then restart the computer.</li>
            </ol>

            <p>Another way is to use online proxy tool that will allow you to browse {{$unprefixed_domain_name}} using proxy servers as intermediate agents.</p>


          </div>
      </div>

      <div class="portlet light bordered">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 no-padding">

                  @foreach($prev_domain as $d)
                    <a href="{{route('domainStatus', $d->name)}}" class="btn btn-block btn-default col-md-6"><i class="fa fa-arrow-circle-left"></i> {{$d->name}}
                    </a>
                  @endforeach

                </div>
                <div class="col-md-6 no-padding">

                @foreach($next_domain as $d)
                  <a href="{{route('domainStatus', $d->name)}}" class="btn btn-block btn-default col-md-6">{{$d->name}} <i class="fa fa-arrow-circle-right"></i>
                  </a> 
                @endforeach

                
                </div>

            </div>
        </div>
      </div> 




    </div>
    <div class="col-md-5">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="fa fa-map-marker font-red-sunglo"></i><span class="caption-subject font-dark bold uppercas">Latest Available Websites</span>
                </div>
            </div>
            <div class="portlet-body last-domains">
              @include('pages.latest_searches_blocks.up_domains')
            </div>
        </div>
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="fa fa-map-marker font-red-sunglo"></i><span class="caption-subject font-dark bold uppercas">Latest Down Websites</span>
                </div>
            </div>
            <div class="portlet-body last-domains">
              @include('pages.latest_searches_blocks.down_domains')
            </div>
        </div>        
    </div>          
  </div>

</div>
@stop

@section('js')
<script>
var get_domain_status;
//var domain_id = null;

  @if(isset($domain->id))
    domain_id = {{$domain->id}};
  @endif

$( document ).ready(function(){



  $('#report-issue').on('click', function(e){


    e.preventDefault();


swal({
  title: "Are you sure?",
  text: "Are you sure you want to send outage report for {{$domain_name}}",
  icon: "warning",
 // buttons: true,
  buttons: {
    cancel: true,
    confirm: "Yes!",
  },
  dangerMode: true,
})
.then((reportIssue) => {
  if (reportIssue) {
    var l = Ladda.create(this);
    l.start();
    $.post("{{route('report_issue')}}", 
        {"id": domain_id},
      function(response){
        console.log(response);
      }, "json")
    .always(function() { 
      l.stop(); 
      $('#report-issue').prop("disabled",true);
    });
  } else {
    //swal("Your imaginary file is safe!"); 
  }
});


  });


  $('#world-map').vectorMap({
    map: 'world_mill_en',
    
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    markerStyle: {
      initial: {
        fill: '#d91e43',
        strock: '#d91e43',
        "strock-width": 0,
        r: 3
      },
      hover: {
        stroke: 'black',
        "stroke-width": 1,
        cursor: 'pointer'
      }
    },
    zoomOnScroll: false,

    markers: [
      @if($history_reports)
      @foreach($history_reports as $key => $report)
        


        {latLng: [{{$report['lat']}}, {{$report['lng']}}], name: '{{$report['city']}}', 
        style: { 
          @if($report['status'] == 1)
           fill: 'green' , r: 3
          @elseif($report['status'] == 0)
            fill: 'red', r: 4
          @elseif($report['status'] == -1)
            fill: 'yellow', r: 6
          @endif
        }},
      @endforeach
      @endif

    ]
  }); 

  var line = new Morris.Line({
    element: 'outage-chart',
    resize: true,
    data: JSON.parse('{!! json_encode($history_dates) !!}') ,
    xkey: 'date',
    ykeys: ['up', 'down', 'outage'],
    labels: ['Item 1'],
    lineColors: ['#3c8dbc'],

    labels:["Up", 'Down', 'Outage'],
    lineColors: ['green', 'red', 'yellow'],
    lineWidth:2,
    pointSize:0,
    ymax:"auto[5]",
    smooth:!1,
    hideHover: 'auto'
  });

  var is_checking = false;

  auto_check_domain_status = function(check_type = 'auto'){

    if(is_checking == false){
      $('#report-issue').prop("disabled",true);
      is_checking = true;
       $('.panel-status-header').append('<div class="information"><div class="sk-cube-grid"><div class="sk-cube sk-cube1 bg-red-mint"></div><div class="sk-cube sk-cube2 bg-yellow-crusta"></div><div class="sk-cube sk-cube3 bg-yellow-haze"></div><div class="sk-cube sk-cube4"></div><div class="sk-cube sk-cube5 bg-purple-medium"></div><div class="sk-cube sk-cube6 bg-green-jungle"></div><div class="sk-cube sk-cube7 bg-yellow-gold"></div><div class="sk-cube sk-cube8 bg-blue-hoki"></div><div class="sk-cube sk-cube9 bg-dark"></div></div></div>');

      var jqxhr = $.get( '{{route('ajaxCheck', $domain_name)}}', { type: check_type}, function(data) {
        status_block = $('#domain-status-block');
        info_block = $('#domain-information-block');


        if(data.status != -1){
          status_block.html(data.content).hide().fadeIn(1000);
          info_block.html(data.domain_info).hide().fadeIn(1000);
          domain_id = data.id;
        }else{
          toastr['error'](data.content);
        }
        $('.scroller').slimScroll({
            height: '200px',
            railOpacity: 0.6
        });
      }).done(function() {
      }).fail(function() {
      }).always(function() {
          $('.sk-cube-grid').remove();
          is_checking  = false;
          $('#report-issue').prop("disabled",false);
      }); 
    }else if(is_checking == true){
      toastr['info']('The server is already working on checking the website');
    }
  }


  @if($is_auto_checkable)
    auto_check_domain_status();
  @endif


  toastr.options = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-bottom-full-width",
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }


});






</script>
@stop
