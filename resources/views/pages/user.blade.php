@extends('layouts.default')
@section('title')
<title>
    {{$user->name}} -   PurePNG | Free transparent CC0 PNG Image Library
</title>
@stop
@section('content')
<div class="jumbotron profileUser index-header jumbotron_set jumbotron-cover-user" style="background: url('{{asset('img/cover.jpg')}}') no-repeat center center #232a29; background-size: cover;">
    <div class="container wrap-jumbotron position-relative">
    </div>
</div>
<div class="container margin-bottom-40 margin-top-40">
    <div class="row">
    </div>
    <div class="col-md-12">
        <div class="center-block text-center profile-user-over">
            <a href="{{route('user', $user->name)}}">
                <img class="img-circle border-avatar-profile avatarUser" height="125" src="{{asset('img/avatars/'.$user->avatar)}}" width="125">
                </img>
            </a>
            <h1 class="title-item none-overflow font-default">
                {{$user->name}}
            </h1>
<!--             <ul class="nav nav-pills inlineCounterProfile">
                <li>
                    <small class="btn-block sm-btn-size text-left counter-sm">
                        36
                    </small>
                    <span class="text-muted">
                        Images
                    </span>
                </li>
                <li>
                    <small class="btn-block sm-btn-size text-left counter-sm">
                        320
                    </small>
                    <span class="text-muted">
                        Downloads
                    </span>
                </li>
                <li>
                    <small class="btn-block sm-btn-size text-left counter-sm">
                        1
                    </small>
                    <a class="text-muted link-nav-user" href="https://purepng.com/teamiconz1/followers">
                        Followers
                    </a>
                </li>
                <li>
                    <small class="btn-block sm-btn-size text-left counter-sm">
                        3
                    </small>
                    <a class="text-muted link-nav-user" href="https://purepng.com/teamiconz1/following">
                        Following
                    </a>
                </li>
                <li>
                    <small class="btn-block sm-btn-size text-left counter-sm">
                        0
                    </small>
                    <a class="text-muted link-nav-user" href="https://purepng.com/teamiconz1/collections">
                        Collections
                    </a>
                </li>
            </ul> -->
        </div>
        <hr>
            <div class="flex-images btn-block margin-bottom-40 dataResult" id="imagesFlex">
               @foreach($photos as $photo)
                  @include('pages.common.photo_block')
               @endforeach


                <div class="container-paginator">
                  {{ $photos->links() }}
                </div>
            </div>
        </hr>
    </div>
</div>
@stop
