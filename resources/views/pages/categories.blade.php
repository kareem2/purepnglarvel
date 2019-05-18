@extends('layouts.default')
@section('title')
<title>
    Free transparent Car PNG images Download |  PurePNG | Free transparent CC0 PNG Image Library
</title>
@stop
@section('content')
	<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
	    <div class="container wrap-jumbotron position-relative">
	        <h1 class="title-site title-sm">
	            Categories
	        </h1>
	        <p class="subtitle-site">
	            <strong>
	                Browse stock images by category
	            </strong>
	        </p>
	    </div>
	</div>
	<div class="container margin-bottom-40">
	    <div class="col-md-12 margin-top-20 margin-bottom-20">
	    	@foreach($categories as $category)
	        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 row-margin-20 margin-bottom-20">
	        	<div style="height: 300px;">
		            <a href="{{route('show_category', $category->slug)}}">
		                <img style="width: auto;margin: 0 auto;" alt="{{$category->name}}" class="img-responsive btn-block custom-rounded" src="{{$thumbnail_read_path}}{{$category->samplePost()->main_image}}">
		                </img>
		            </a>
		            <h1 class="title-services">
		                <a href="{{route('show_category', $category->slug)}}">
		                    {{$category->name}} (978)
		                </a>
		            </h1>		            
	            </div>
	        </div>
	        @endforeach
	    </div>
	</div>

    <div class="container-paginator">
      {{ $categories->links() }}
    </div>	
@stop
