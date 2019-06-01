@extends('layouts.default')
@section('title')
<title>Tags -  PurePNG | Free transparent CC0 PNG Image Library</title>
@stop
@section('content')
<div class="jumbotron md index-header jumbotron_set jumbotron-cover">
    <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site title-sm">
            Tags
        </h1>
        <p class="subtitle-site">
            <strong>
                PurePNG | Free transparent CC0 PNG Image Library
            </strong>
        </p>
    </div>
</div>
<div class="container margin-bottom-40">
    <div class="col-md-12 margin-top-20 margin-bottom-20">
    	@foreach($tags as $tag)
        <a class="btn btn-danger tags font-default btn-sm" href="{{route('tag_photos_by_name', [$tag->slug])}}">
            {{$tag->name}} ({{$tag->post_tags_count}})
        </a>
        @endforeach
    </div>
</div>
<div class="container-paginator">
  {{ $tags->links() }}
</div>
@stop
