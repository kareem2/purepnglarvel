<div class="navbar navbar-inverse navBar">
    <div class="container">
        <div class="navbar-header">
            <button aria-label="Navbar" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
                <div class="hidden-sm hidden-md hidden-lg">

                    <img alt="PurePNG Logo" class="logo" src="{{asset('img/logo.svg')}}">
                    </img>
                </div>
                <div class="hidden-xs">
                    <img alt="PurePNG Logo" class="logo" src="{{asset('img/logo.svg')}}">
                    </img>
                </div>
            </a>
            <div class="h_search">
                <form action="https://purepng.com/search" autocomplete="off" method="get" role="search">
                    <div class="input-group input-group-md">
                        <input aria-label="Find PNG images" class="form-control" name="q" placeholder="Find PNG images" type="text" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-main btn-flat" type="submit">
                                    <i aria-label="Search" class="fa fa-search">
                                    </i>
                                </button>
                            </span>
                        </input>
                    </div>
                </form>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right margin-bottom-zero">
                <li class="dropdown">
                    <a class="font-default text-uppercase" data-toggle="dropdown" href="javascript:void(0);">
                        Explore
                        <i class="fa fa-angle-down">
                        </i>
                    </a>
                    <ul aria-labelledby="dropdownMenu2" class="dropdown-menu arrow-up" role="menu">
                        <li>
                            <a href="{{route('latest_photos')}}">
                                <i class="fa fa-calendar"></i> 
                                Latest
                            </a>
                        </li>
                        <li>
                            <a href="https://purepng.com/popular">
                                <i class="fa fa-fire"></i> 
                                Popular
                            </a>
                        </li>
                        <li>
                            <a href="https://purepng.com/featured">
                                <i class="fa fa-thumbs-up"></i> 
                                Featured
                            </a>
                        </li>
                        <li class="divider" role="separator">
                        </li>
                  <!--       <li>
                            <a href="https://purepng.com/members">
                                <i class="icon icon-Users myicon-right">
                                </i>
                                Members
                            </a>
                        </li> -->
                   <!--      <li>
                            <a href="https://purepng.com/collections">
                                <i class="fa fa-folder-open-o myicon-right">
                                </i>
                                Collections
                            </a>
                        </li> -->
                        <li>
                            <a href="{{route('tags')}}">
                                <i class="fa fa-tags">
                                </i>
                                Tags
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="font-default text-uppercase" data-toggle="dropdown" href="javascript:void(0);">
                        Categories
                        <i class="fa fa-angle-down">
                        </i>
                    </a>
                    <ul aria-labelledby="dropdownMenu2" class="dropdown-menu arrow-up nav-session" role="menu">
                        @foreach($menue_categories as $category)
                            <li>
                                <a class="text-overflow" href="{{route('show_category', [$category->slug])}}">
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <a href="{{route('categories')}}">
                                <strong>
                                    View all
                                    <i class="fa fa-long-arrow-right">
                                    </i>
                                </strong>
                            </a>
                        </li>
                    </ul>
                </li>
        <!--         <li class="dropdown">
                    <a class="font-default text-uppercase" data-toggle="dropdown" href="javascript:void(0);">
                        Forum
                        <i class="fa fa-angle-down">
                        </i>
                    </a>
                    <ul aria-labelledby="dropdownMenu2" class="dropdown-menu arrow-up" role="menu">
                        <li>
                            <a href="https://howtomedia.co/forums/general-discussion.43/" rel="noopener" target="_blank">
                                <i class="fa fa-comments-o myicon-right">
                                </i>
                                General Discussion
                            </a>
                        </li>
                        <li>
                            <a href="https://howtomedia.co/forums/image-requests.44/" rel="noopener" target="_blank">
                                <i class="fa fa-plus myicon-right">
                                </i>
                                Request Images
                            </a>
                        </li>
                        <li>
                            <a href="https://howtomedia.co/forums/website-suggestions.45/" rel="noopener" target="_blank">
                                <i class="fa fa-lightbulb-o myicon-right">
                                </i>
                                Website Suggestions
                            </a>
                        </li>
                        <li class="divider" role="separator">
                        </li>
                        <li>
                            <a href="https://howtomedia.co/forums/" rel="noopener" target="_blank">
                                <i class="fa fa-link myicon-right">
                                </i>
                                Forum Board
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="log-in font-default text-uppercase" href="https://purepng.com/register">
                        <i class="fa fa-user">
                        </i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a class="font-default text-uppercase " href="https://purepng.com/login">
                        Login
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div>