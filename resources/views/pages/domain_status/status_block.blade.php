<div class="portlet light bordered domain-block-{{$response_type['code']}}">
      <div class="portlet-title">
        <div class="caption caption-md">
          
            <i class="fa fa-map-marker font-blue"></i><h2 class="caption-subject font-blue bold uppercas domain-status-caption no-margin">{{ucwords($unprefixed_domain_name)}} Website Status</h2>
            <span class="caption-helper"> Last Check: {{$domain->last_check->created_at->diffForHumans()}}</span>
        </div>
        <div class="actions">
            <div class="btn-group">
              <button type="button" class="btn btn-info" onclick="auto_check_domain_status('manual', {{$domain->id}})">Check Again</button>
            </div>
        </div>
      </div>      
  <div class="panel text-primary panel-cascade panel-check">
    <div class="panel-body">

      <div class="panel-status-header font-dark text-center">
        <h1>
        <span class="bold">{{$unprefixed_domain_name}}</span> is 

        <span class="uppercase bold domain-label-{{$response_type['code']}}">
        {{$response_type['name']}}!
        </span>
        </h1>
      </div>


      <div class="information">
          <div id="info-block" class="info-block">

          <div class="row">
          <div class="col-md-4">
              <div class="panel panel-info">
                  <div class="panel-heading bg-white">
                      <span class="caption-subject font-blue-dark bold uppercase"><i class="fa font-grey-salt fa-thumbs-up"></i> Status</span>
                  </div>
                  <div class="panel-body text-center"> 
                  <label class="label domian-status">
                    {{$response_type['name']}}!
                  </label> 
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="panel panel-info">
                  <div class="panel-heading bg-white">
                      <span class="caption-subject font-blue-dark bold uppercase"><i class="fa font-grey-salt fa-clock-o"></i> Response Time</span>
                  </div>
                  <div class="panel-body text-center"> 

                  <label class="label label-success domian-response-time lowercase">
                    @if($result['status'] == 1)
                    {{$result->response_time}} Seconds
                    @else
                    ---
                    @endif
                  </label></div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="panel panel-info">
                  <div class="panel-heading bg-white">
                    <span class="caption-subject font-blue-dark bold uppercase"><i class="fa font-grey-salt fa-wifi"></i> Response Code</span>
                  </div>
                  <div class="panel-body text-center">
                    <span class="bold domian-response-code">
                      @if($result['status'] == 1)
                    {{$result['response_code']}}
                    @else
                    ---
                    @endif
                    </span>
                  </div>
              </div>
          </div>                                
          </div>
         
          </div>
      </div>

      <p class="font-dark description">
        @include('pages.domain_status.'.$response_type['code'])
      </p>
    </div>
  </div>
</div>

<div class="portlet light bordered domain-info">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="fa fa-gears font-gray"></i><h3 class="caption-subject font-gray bold uppercas no-margin domain-status-caption">Detected Technologies and Resources</h3>
        </div>
    </div>
    <div class="portlet-body">
      @if($domain->ssl_support == 1)
        <a href="javascript:;" class="icon-btn">
            <i class="fa fa-lock font-green-turquoise ssl-logo"></i>
            <div> SSL </div>
            <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
        </a>            
      <!-- <span class="label bg-green-jungle"><i class="fa fa-user-secret"></i> SSL</span> -->
      @endif
      @if($domain->html5 == 1)
        <a href="javascript:;" class="icon-btn">
            <i class="fa fa-html5 font-yellow-gold html5-logo"></i>
            <div> HTML5 </div>
            <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
        </a>              
      <!-- <span class="label bg-yellow-gold"><i class="fa fa-html5"></i> HTML5</span> -->
      @endif

      @if($domain->google_analytics == 1)
      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-bar-chart-o google-analytics-logo"></i>
          <div> Google Analytics </div>
          <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
      </a>
      @endif            

      @if($domain->adsense == 1)
      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-buysellads google-adsense-logo"></i>
          <div> Google Adsense </div>
          <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
      </a>
      @endif 

      @if($domain->facebook_like == 1)
      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-facebook facebook-logo"></i>
          <div> Facebook </div>
          <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
      </a>
      @endif  

      @if($domain->google_plus == 1)
      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-google-plus-square google-plus-logo"></i>
          <div> Google+ </div>
          <span class="badge"><i class="fa fa-thumbs-o-up"></i></span>
      </a>
      @endif  

      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-css3 font-blue-steel css-logo"></i>
          <div>CSS Files</div>
          <span class="badge badge-info">{{$domain->css_count}}</span>
      </a>

      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-code font-yellow-soft js-logo"></i>
          <div>js Files</div>
          <span class="badge badge-info">{{$domain->js_count}}</span>
      </a>

      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-image font-yellow-mint img-logo"></i>
          <div>Images</div>
          <span class="badge badge-info">{{$domain->img_count}}</span>
      </a>

      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-arrow-circle-o-down internal-backlinks-logo font-yellow-soft"></i>
          <div class="lowercase"> internal backlinks </div>
          <span class="badge badge-info">{{$domain->internal_backlinks}}</span>
      </a>

      <a href="javascript:;" class="icon-btn">
          <i class="fa fa-arrow-circle-o-up outgoing-backlinks-logo font-red-thunderbird"></i>
          <div> outgoing backlinks </div>
          <span class="badge badge-info">{{$domain->outgoing_backlinks}}</span>
      </a>
    </div>
</div>       