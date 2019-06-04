@extends('layouts.default')
@section('title')
<title>Color #{{$color_code}} -  PurePNG | Free transparent CC0 PNG Image Library</title>
@stop
@section('content')
<div class="jumbotron md header-colors jumbotron_set jumbotron-cover">
<div class="container wrap-jumbotron position-relative">
<h1 class="title-site title-sm">{{$color_code}}</h1>
<p class="subtitle-site"><strong>
<i class="fa fa-square myicon-right" style=" color: #{{$color_code}} "></i> Color ({{$photos->total()}})
</strong>
</p>
 </div>
</div>

    <div class="container margin-bottom-40">
        <div class="col-md-12 margin-top-20 margin-bottom-20">
            <div class="flex-images btn-block margin-bottom-40 dataResult" id="imagesFlex">
                @foreach($photos as $photo)
                  @include('pages.common.photo_block')
               @endforeach
                <div class="container-paginator">
                    {{ $photos->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
