@extends('layouts.default')
@section('title')
<title>
    Free transparent Car PNG images Download |  PurePNG | Free transparent CC0 PNG Image Library
</title>
<meta content="Check if  is live and follow the troubleshooting instructions to reach the website." name="description">
    @stop
@section('content')
    <div class="jumbotron md index-header jumbotron_set jumbotron-cover">
        <div class="container wrap-jumbotron position-relative">
            <h1 class="title-site title-sm">
                {{$category->name}}
            </h1>
            <p class="subtitle-site">
                <strong>
                    ({{$count}}) images available in this category
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
</meta>