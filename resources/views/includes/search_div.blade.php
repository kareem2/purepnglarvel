  <div class="search-page search-content-1">
      <div class="search-bar bordered">
          <div class="row">
           <!-- <div class="col-md-2 col-sm-3 domain-check-form-title">
              <span class="caption-subject font-dark bold uppercase">Check if a website is down!</span>
            </div>-->
              <div class="col-md-10 col-md-offset-1">
                  {!! Form::open(array('url' => route('domainStatusPost'), 'method' => 'post')) !!}

                    <div class="input-group">
                        <input type="text" class="form-control" id="search-input" name="domain" placeholder="Enter Your Domain Name..." 
						@if(isset($domain_name))
						value="{{$domain_name}}"
						@endif"
						>
                        <span class="input-group-btn">
                            <button class="btn blue uppercase bold" type="submit">Is It Down?</button>
                        </span>
                    </div>
                  {!! Form::close() !!}
              </div>

          </div>
      </div> 
  </div>