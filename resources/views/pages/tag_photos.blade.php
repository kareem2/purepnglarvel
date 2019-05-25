@extends('layouts.default')
@section('title')
<title>
    Free transparent Car PNG images Download |  PurePNG | Free transparent CC0 PNG Image Library
</title>
@stop
@section('content')
    <div class="jumbotron md index-header jumbotron_set jumbotron-cover" style="background: url('http://purepng.com/public/uploads/medium/indian-wedding-girl-pca.png') center center no-repeat #d1d1d1 !important;">
        <div class="container wrap-jumbotron position-relative">
            <h1 class="title-site title-sm">
                Free transparent {{$tag->name}} PNG Images Download
            </h1>
            <p class="subtitle-site">
                You can download
                <strong>
                    {{$tag->post_tags_count}} free {{$tag->name}} PNG images
                </strong>
                with transparent backgrounds from the largest collection on PurePNG. With these {{$tag->name}} PNG images, you can directly use them in your design project without cutout.
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
