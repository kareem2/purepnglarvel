@extends('layouts.default')
@section('title')
<title>Free transparent Car PNG images Download |  PurePNG | Free transparent CC0 PNG Image Library</title>
<meta content="Check if  is live and follow the troubleshooting instructions to reach the website." name="description">
    @stop
@section('content')
    <div class="container margin-bottom-40">
        <div class="col-md-12 margin-top-20 margin-bottom-20">
            <div class="flex-images btn-block margin-bottom-40 dataResult" id="imagesFlex">


               @foreach($photos as $photo)
                  <a href="https://purepng.com/photo/30650/heart-letter" class="item hovercard"  data-h="280">
                     <span class="hover-content">
                        <h5 class="text-overflow title-hover-content" title="Heart Letter">
                           {{$photo->title}}
                        </h5> 
                        <h5 class="text-overflow author-label mg-bottom-xs" title="{{$photo->user->name}}">
                           <img src="public/avatar/purenetwork-114984932140w6vdcdjkl.png" alt="User" class="img-circle" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                           <em>{{$photo->user->name}}</em>
                        </h5> 
                        <span class="timeAgo btn-block date-color text-overflow" data="clipart-pink-heart.html"></span>
                        <span class="sub-hover">
                        <span class="myicon-right"><i class="fa fa-line-chart myicon-right"></i> 130</span>
                        <span class="myicon-right"><i class="icon icon-Download myicon-right"></i> 17</span>
                        <span class="myicon-right" style="float:right"><i class="fa fa-expand myicon-right"></i> 778x512</span>
                        </span>
                     </span>
                     <img src="{{asset($thumbnail_read_path.$photo->main_image)}}" alt="Heart Letter PNG" />
                  </a>
               @endforeach


                <div class="container-paginator">
                  {{ $photos->links() }}
                </div>
            </div>
            <a class="btn btn-danger tags font-default btn-sm" href="https://purepng.com/tags/yellow">
                yellow (545)
            </a>
        </div>
    </div>
    @stop
</meta>