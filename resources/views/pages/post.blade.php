@extends('layouts.default')
@section('title') 
<title>{{$post->title}} PNG Image -  PurePNG | Free transparent CC0 PNG Image Library</title>
<meta name="description" content="Check if  is live and follow the troubleshooting instructions to reach the website.">
@stop
@section('content')
   <div class="container margin-bottom-40 padding-top-40">
      <div class="col-md-9">
         <div itemscope itemtype="https://schema.org/ImageObject">
            <div class="text-center margin-bottom-20">
               <img itemprop="contentUrl" class="img-responsive" alt="{{$post->title}}" style="display: inline-block; max-height: 500px;" src="{{$post->main_image_url}}" />
            </div>
            <h1 itemprop="name" class="class-montserrat title-image none-overflow">
               {{$post->title}}
            </h1>
            <hr />
            <p itemprop="description" class="description">
               {{$post->description}}
            </p>
         </div>
         <div class="btn-block margin-bottom-20">
            <h3>Tags</h3>
             @foreach($post->tags as $tag)
               <a href="{{route('tag', $tag->slug)}}" class="btn btn-danger tags font-default btn-sm">
               {{$tag->name}}
               </a>
             @endforeach
         </div>
         <div class="btn-block margin-bottom-20 po">
            <h3>Similar Images</h3>
            <div id="imagesFlex" class="flex-images btn-block margin-bottom-40">
               <a href="https://purepng.com/photo/30650/heart-letter" class="item hovercard" data-w="280" data-h="185">
                  <span class="hover-content">
                     <h5 class="text-overflow title-hover-content" title="Heart Letter">
                        Heart Letter
                     </h5>
                     <h5 class="text-overflow author-label mg-bottom-xs" title="PureNetwork">
                        <img src="public/avatar/purenetwork-114984932140w6vdcdjkl.png" alt="User" class="img-circle" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                        <em>PureNetwork</em>
                     </h5>
                     <span class="timeAgo btn-block date-color text-overflow" data="clipart-pink-heart.html"></span>
                     <span class="sub-hover">
                     <span class="myicon-right"><i class="fa fa-line-chart myicon-right"></i> 130</span>
                     <span class="myicon-right"><i class="icon icon-Download myicon-right"></i> 17</span>
                     <span class="myicon-right" style="float:right"><i class="fa fa-expand myicon-right"></i> 778x512</span>
                     </span>
                  </span>
                  <img src="public/uploads/thumbnail/heart-letter-gcq.png" alt="Heart Letter PNG" />
               </a>
            </div>
         </div>
         <div class="btn-block margin-bottom-20">
            <h3>Comments(<span id="totalComments">0</span>)</h3>
            <div class="gridComments" id="gridComments" style="padding-top: 15px;"></div>
            <div class="btn-block text-center noComments">
               <i class="fa fa-comments-o fa-5x"></i>
            </div>
            <h3 class="margin-top-none text-center no-result row-margin-20 noComments">
               No comments yet
            </h3>
            <hr />
            <div class="alert alert-loggin text-center alert-custom" role="alert">
               You must be logged in to comment this photo
               <a href="https://purepng.com/register" class="btn btn-xs btn-success">Sign Up</a>
               <a href="https://purepng.com/login">Login</a>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="media none-overflow">
<!--                   <div class="media-left">
                     <a href="https://purepng.com/PureNetwork">
                     <img class="media-object img-circle" src="public/avatar/purenetwork-114984932140w6vdcdjkl.png" alt="PureNetwork's Profile Avatar" width="50" height="50">
                     </a>
                  </div>
 -->                  <div class="media-body">
                     <a href="{{route('user', $post->user->name)}}" class="text-username font-default">
                        <h4 class="media-heading">{{$post->user->name}}</h4>
                     </a>
                     <small class="media-heading text-muted btn-block margin-zero">Published on {{$post->created_at->format('M, d Y')}}</small>
                     <small class="media-heading text-muted">{{$post->user->posts_count}} PNG Images</small>
                     <p class="margin-top-10"></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-body padding-zero">
               <ul class="list-stats list-inline">
                  <li>
                     <h4 class="btn-block text-center">389</h4>
                     <small class="btn-block text-center text-muted">Views</small>
                  </li>
                  <li>
                     <h4 class="btn-block text-center" id="countLikes">0</h4>
                     <small class="btn-block text-center text-muted">Likes</small>
                  </li>
                  <li>
                     <h4 class="btn-block text-center">71</h4>
                     <small class="btn-block text-center text-muted">Downloads</small>
                  </li>
               </ul>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-body">
               <i class="icon icon-Medal myicon-right"></i> <span class="text-muted">Featured on </span>
               <strong>Mar 01, 2019</strong>
            </div>
         </div>
         <div class="btn-group btn-block margin-bottom-20">
            <button type="button" class="btn btn-success btn-lg btn-block dropdown-toggle" id="downloadBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cloud-download myicon-right"></i> Free Download <span class="caret"></span>
            </button>
            <ul class="dropdown-menu arrowDownload dd-close btn-block">
               <li><a href="https://purepng.com/download/gm4EBCTT3uVC7lhLgITu15MVSgxgSnkhpDd8Ex03QLHiTL2dxZbTzU2ukZujjRDWIMMNFHN8b0rFEUVPuo8uDnBkd7WSrWm948iaaS6yYME9BU9Z1ab3xKtQEeWUYQQVyMYo3th2E5AFj1K0ZK9teAzQLuidmiP2IlIblLvfuta2cfAMEXVyXKcN702ClaV8508Ozv2h/small"><span class="label label-default myicon-right">S</span> 640x577 <span class="pull-right">162.3kB</span></a></li>
               <li><a href="https://purepng.com/download/gm4EBCTT3uVC7lhLgITu15MVSgxgSnkhpDd8Ex03QLHiTL2dxZbTzU2ukZujjRDWIMMNFHN8b0rFEUVPuo8uDnBkd7WSrWm948iaaS6yYME9BU9Z1ab3xKtQEeWUYQQVyMYo3th2E5AFj1K0ZK9teAzQLuidmiP2IlIblLvfuta2cfAMEXVyXKcN702ClaV8508Ozv2h/medium"><span class="label label-default myicon-right">M</span> 901x812 <span class="pull-right">384.2kB</span></a></li>
               <li><a href="https://purepng.com/download/gm4EBCTT3uVC7lhLgITu15MVSgxgSnkhpDd8Ex03QLHiTL2dxZbTzU2ukZujjRDWIMMNFHN8b0rFEUVPuo8uDnBkd7WSrWm948iaaS6yYME9BU9Z1ab3xKtQEeWUYQQVyMYo3th2E5AFj1K0ZK9teAzQLuidmiP2IlIblLvfuta2cfAMEXVyXKcN702ClaV8508Ozv2h/large"><span class="label label-default myicon-right">L</span> 568x512 <span class="pull-right">16.9kB</span></a></li>
            </ul>
         </div>
         <div class="btn-group btn-block margin-bottom-20 btn-block text-center">
            <a rel="noopener" onClick="ga('send', 'event', 'Button', 'klick',
               'Pin_to_Pinterest_Big_View' ,1);" style="background-color: #bd081c;border-color: #bd081c;" class="btn btn-main btn-lg btn-block custom-rounded" href='https://www.pinterest.com/pin/create/button/?url=http://purepng.com/photo/30610/pink-heart&amp;media=http://purepng.com/public/uploads/large/pink-heart-u4q.png&amp;description=Pink%20Heart%20PNG%20Image' target="_blank"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==" style="height:20px;" alt="Pinterest Logo"> Pin to Pinterest</a>
         </div>
         <script async src="../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
         <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9373286643303244" data-ad-slot="5947934327" data-ad-format="auto"></ins>
         <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
         </script>
         <div class="panel panel-default">
            <div class="panel-body">
               <h5><i class="fa fa-thumbs-up myicon-right" aria-hidden="true"></i> <strong>Like PurePNG on Facebook</strong></h5>
               <div id="fb-root"></div>
               <div rel="noopener" class="fb-like" data-href="https://www.facebook.com/Purepng-187287722034914/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
            </div>
         </div>
         <ul class="list-group">
            <li class="list-group-item"><i class="icon-info myicon-right"></i> <strong>Details</strong></li>
            <li class="list-group-item"> <span class="badge data-xs-img">{{$post->created_at->format('M d, Y')}}</span> Published on</li>
            <li class="list-group-item"> <span class="badge data-xs-img">PNG</span> Image type</li>
            <li class="list-group-item"> <span class="badge data-xs-img">{{$photo_width}}x{{$photo_height}}</span> Resolution</li>
            <li class="list-group-item"> <span class="badge data-xs-img"><a href="https://purepng.com/category/clipart" title="Clipart">{{$post->category->name}}</a></span> Category</li>
            <li href="#" class="list-group-item"> <span class="badge data-xs-img">{{$photo_size}}</span> File size</li>
         </ul>
         <div class="panel panel-default">
            <div class="panel-body">
               <h5><i class="fa fa-creative-commons myicon-right" aria-hidden="true"></i> <strong>License and Use</strong></h5>
               <small class="text-muted"><i class="glyphicon glyphicon-ok myicon-right"></i> Free for commercial use</small>
               <small class="btn-block text-muted"><i class="glyphicon glyphicon-remove myicon-right"></i> No attribution required</small>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-body">
               <h5><i class="icon icon-Drop myicon-right" aria-hidden="true"></i> <strong>Color Palette</strong></h5>
               <a title="#F16688" href="https://purepng.com/colors/F16688" aria-label="More Images with #F16688 Color" class="colorPalette showTooltip" style="background-color: #F16688;"></a>
               <a title="#9BC4CC" href="https://purepng.com/colors/9BC4CC" aria-label="More Images with #9BC4CC Color" class="colorPalette showTooltip" style="background-color: #9BC4CC;"></a>
               <a title="#B29CAE" href="https://purepng.com/colors/B29CAE" aria-label="More Images with #B29CAE Color" class="colorPalette showTooltip" style="background-color: #B29CAE;"></a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-body">
               <h5 class="pull-left margin-zero" style="line-height: inherit;"><i class="icon icon-Share myicon-right" aria-hidden="true"></i> <strong>Share</strong></h5>
               <ul class="list-inline pull-right margin-zero">
                  <li><a title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://purepng.com/photo/30610" rel="noopener" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a title="Twitter" rel="noopener" href="https://twitter.com/intent/tweet?url=http://purepng.com/photo/30610&amp;text=Pink%20Heart" data-url="http://purepng.com/photo/30610" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a title="Google+" rel="noopener" href="https://plus.google.com/share?url=http://purepng.com/photo/30610" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a title="WhatsApp" rel="noopener" href="whatsapp://send?text=http://purepng.com/photo/30610&text=Pink Heart" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="margin-top-20"></div>
      </div>
   </div>
@stop