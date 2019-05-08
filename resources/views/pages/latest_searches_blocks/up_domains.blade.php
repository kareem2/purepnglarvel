          <ul class="items">

                @if(\Cache::get('up_domains'))
                @foreach(\Cache::get('up_domains') as $domain)

                <li class="outage">
                  <div class="sub-wrapper">
                    <div class="final-wrapper">
                      <div class="text">
                        <a class="domain-name" href="{{route('domainStatus', $domain->name)}}" title="">{{$domain->name}}</a>

                          <div class="last-check-time">
                           <!--  <i class="fa fa-pie-chart" title="Has charts"></i> -->
                            
                            <i class="fa fa-clock-o time-icon"></i>
                            <span class="check-time" title="{{$domain->last_check->created_at}}">{{$domain->last_check->created_at->diffForHumans()}}</span>
                            <!-- <span class="check-time" title="Check time">{{$domain->last_check->created_at}}</span>   -->
                          </div>       
                      </div>

                    </div>
                  </div>
                </li>
                @endforeach
                @endif

          </ul>