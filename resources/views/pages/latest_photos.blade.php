@extends('layouts.default')
@section('title')
<title>Free transparent Car PNG images Download |  PurePNG | Free transparent CC0 PNG Image Library</title>
@stop

@section('content')
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
