<a href="{{route('photo_with_title', [$photo->id, $photo->title])}}" class="item hovercard" data-w="{{$photo->image_width}}" data-h="{{$photo->image_height}}">
   <span class="hover-content">
      <h5 class="text-overflow title-hover-content" title="Heart Letter">
         {{$photo->title}}
      </h5>
      @if($photo->user)
      <h5 class="text-overflow author-label mg-bottom-xs" title="{{$photo->user->name}}">
         <!-- <img src="public/avatar/purenetwork-114984932140w6vdcdjkl.png" alt="User" class="img-circle" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;"> -->
         <em>{{$photo->user->name}}</em>
      </h5> 
      @endif
      <span class="timeAgo btn-block date-color text-overflow" data="clipart-pink-heart.html"></span>
      <span class="sub-hover">
      <span class="myicon-right"><i class="fa fa-line-chart myicon-right"></i> {{$photo->views_count}}</span>
      <span class="myicon-right"><i class="fa fa-download"></i> {{$photo->downloads_count}}</span>
      <span class="myicon-right" style="float:right"><i class="fa fa-expand myicon-right"></i> {{$photo->image_width}}x{{$photo->image_height}}</span>
      </span>
   </span>
   <img src="{{asset($thumbnail_read_path.$photo->main_image)}}" alt="{{$photo->title}}" />
</a>