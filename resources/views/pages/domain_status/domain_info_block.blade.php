<div class="portlet light bordered domain-info">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="fa fa-pie-chart font-yellow-crusta"></i><h3 class="caption-subject font-dark bold uppercas font-yellow-crusta no-margin domain-status-caption">Domain Information</h3>
        </div>
    </div>
    <div class="portlet-body">
        <ul class="nav nav-pills">
            <li class="active">
                <a href="#tab_1_1" data-toggle="tab"> Headers </a>
            </li>
            <li>
                <a href="#tab_1_2" data-toggle="tab"> CURL Info </a>
            </li>                                        
            <li>
                <a href="#tab_1_3" data-toggle="tab"> Robot.txt </a>
            </li>                                 
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tab_1_1" >
                <pre class="scroller" style="height:200px">{{$domain->headers}}</pre>
            </div>
            <div class=" tab-pane fade" id="tab_1_2" style="height:200px">
                <pre class="scroller" style="height:200px">{{$domain->last_check->curl_info}}</pre>
            </div>
            <div class=" tab-pane fade" id="tab_1_3" style="height:200px">
                <pre class="scroller" style="height:200px">{{$domain->robots_txt}}</pre>
            </div>
        </div>
    </div>
</div> 



<div class="portlet light bordered domain-info">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="fa fa-header font-red"></i><h3 class="caption-subject font-dark bold uppercas font-yellow-gold no-margin domain-status-caption">Header Tag Content</h3>
        </div>
    </div>
    <div class="portlet-body">
        <pre class="scroller" style="height:200px"><code>{{$domain->header_content}}</code></pre>
    </div>
</div> 