@extends('layouts.default')
@section('title')
<title> PurePNG | Free transparent CC0 PNG Image Library</title>
@stop
@section('content')
<div class="jumbotron index-header jumbotron_set jumbotron-cover ">
    <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site" id="titleSite">
            PurePNG
        </h1>
        <p class="subtitle-site">
            <strong>
                Free PNG Image Library
            </strong>
        </p>
        <form action="{{route('tags_search')}}" autocomplete="off" method="get" role="search">
            <div class="input-group input-group-lg searchBar">
                <input class="form-control" id="btnItems" name="q" placeholder="Find PNG images" type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-main btn-flat" id="btnSearch" type="submit">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </span>
                </input>
            </div>
        </form>
        <ul class="search__tags">
            @foreach($tags_sample as $tag)
                <li>
                    <a alt="Polpular Search" href="{{route('tag_photos_by_name', $tag->slug)}}">
                        {{$tag->name}}
                    </a>
                </li>                
            @endforeach
        </ul>
    </div>
</div>
<div class="container margin-bottom-40">
    <div class="row margin-bottom-20">
        <div class="col-md-12 btn-block margin-bottom-40">
            <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow highlight-word-color">
                Explore
                <span class=".numbers-with-commas counter">
                    {{$photos_count}}
                </span>
                +
                <span class="color-default">
                    PNGs
                </span>
            </h1>
            <h5 class="btn-block text-center">
                PurePNG is a community of creative people sharing transparent high quality PNG images without any background. Explore some of our best curation below!
            </h5>
        </div>
        <div class="flex-images btn-block margin-bottom-40" id="mainPageImagesFlex">
           @foreach($latest_photos as $photo)
              @include('pages.common.photo_block')
           @endforeach
        </div>
        <div class="col-md-12 text-center margin-bottom-20">
            <a class="btn btn-lg btn-main custom-rounded" href="{{route('latest_photos')}}">
                Explore
                <i class="fa fa-long-arrow-right">
                </i>
            </a>
        </div>
    </div>
    <div class="row margin-bottom-40">
        <div class="container">
            <div class="col-md-6 border-stats">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">
                    <span class=".numbers-with-commas counter">
                        {{$downloads_count}}
                    </span>
                    +
                </h1>
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">
                        Downloads
                    </h5>
            </div>
            <div class="col-md-6 border-stats">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">
                    <span class=".numbers-with-commas counter">
                        {{$photos_count}}
                    </span>
                    +
                </h1>
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">
                        Stock Images
                    </h5>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-bottom margin-bottom-zero jumbotron-cover">
    <div class="container wrap-jumbotron position-relative">
        <h1 class="title-site">
            High Quality PNG Images
        </h1>
        <p class="subtitle-site">
            <strong>
                Free PNG Image Library
            </strong>
        </p>
    </div>
</div>
<div class="wrapper">
    <div class="container">
        <div class="row margin-bottom-40">
            <div class="col-md-12 btn-block margin-bottom-40">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow color-white">
                    Categories
                </h1>
                <h5 class="btn-block text-center class-montserrat text-uppercase color-gray">
                    Browse stock images by category
                </h5>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    @foreach($main_page_categories as $category)
                        @if($loop->index < 3)
                            <li>
                                <a class="link-category" href="{{route('show_category', [$category->slug])}}">
                                   {{$category->name}} ({{$category->posts_count}})
                                </a>
                            </li>
                        @endif
                    @endforeach                    
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    @foreach($main_page_categories as $category)
                        @if($loop->index >= 3 && $loop->index <= 5)
                            <li>
                                <a class="link-category" href="{{route('show_category', [$category->slug])}}">
                                    {{$category->name}} ({{$category->posts_count}})
                                </a>
                            </li>
                        @endif
                    @endforeach  
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    @foreach($main_page_categories as $category)
                        @if($loop->index >= 6 && $loop->index <= 8)
                            <li>
                                <a class="link-category" href="{{route('show_category', [$category->slug])}}">
                                    {{$category->name}} ({{$category->posts_count}})
                                </a>
                            </li>
                        @endif
                    @endforeach  
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    @foreach($main_page_categories as $category)
                        @if($loop->index >= 9)
                            <li>
                                <a class="link-category" href="{{route('show_category', [$category->slug])}}">
                                   {{$category->name}} ({{$category->posts_count}})
                                </a>
                            </li>
                        @endif
                    @endforeach  
                </ul>
            </div>            
            <div class="col-md-12 text-center margin-top-40">
                <a class="btn btn-lg btn-main custom-rounded" href="{{route('categories')}}">
                    View all
                    <i class="fa fa-long-arrow-right">
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>
@stop
