@extends('layouts.default')
@section('title')
<title>
    title
</title>
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
        <form action="https://purepng.com/search" autocomplete="off" method="get" role="search">
            <div class="input-group input-group-lg searchBar">
                <input class="form-control" id="btnItems" name="q" placeholder="Find PNG images" type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-main btn-flat" id="btnSearch" type="submit">
                            <i class="glyphicon glyphicon-search">
                            </i>
                        </button>
                    </span>
                </input>
            </div>
        </form>
        <ul class="search__tags">
            <li>
                <a alt="Polpular Search" href="search?q=tree">
                    tree
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=smoke">
                    smoke
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=fire">
                    fire
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=cat">
                    cat
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=explosion">
                    explosion
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=fortnite">
                    fortnite
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=dog">
                    dog
                </a>
            </li>
            <li>
                <a alt="Polpular Search" href="search?q=flower">
                    flower
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container margin-bottom-40">
    <div class="row margin-bottom-20">
        <div class="col-md-12 btn-block margin-bottom-40">
            <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow highlight-word-color">
                Explore
                <span class=".numbers-with-commas counter">
                    30,000
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
        <div class="flex-images btn-block margin-bottom-40" id="imagesFlex">
            <a class="item hovercard" data-h="280" data-w="280" href="https://purepng.com/photo/30662/google-stadia-logo" style="width: 180px; height: 180px; display: block;">
                <span class="hover-content" style="display: none;">
                    <h5 class="text-overflow title-hover-content" title="Google Stadia Logo">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Google Stadia Logo
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Michael">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Michael
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2019-03-19T17:34:05+00:00">
                        2 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            838
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            240
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            2048x2046
                        </span>
                    </span>
                </span>
                <img alt="Google Stadia Logo PNG" src="https://purepng.com/public/uploads/thumbnail//google-stadia-logo-hd4.png">
                </img>
            </a>
            <a class="item hovercard" data-h="253" data-w="280" href="https://purepng.com/photo/30610/pink-heart" style="width: 199px; height: 180px; display: block;">
                <span class="hover-content" style="display: none;">
                    <h5 class="text-overflow title-hover-content" title="Pink Heart">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Pink Heart
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="PureNetwork">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//purenetwork-114984932140w6vdcdjkl.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                PureNetwork
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2019-03-01T15:35:25+00:00">
                        2 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            414
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            74
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            568x512
                        </span>
                    </span>
                </span>
                <img alt="Pink Heart PNG" src="https://purepng.com/public/uploads/thumbnail//pink-heart-aor.png">
                </img>
            </a>
            <a class="item hovercard" data-h="210" data-w="280" href="https://purepng.com/photo/30584/pewdiepie-logo" style="width: 239px; height: 180px; display: block;">
                <span class="hover-content" style="display: none;">
                    <h5 class="text-overflow title-hover-content" title="PewDiePie Logo">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        PewDiePie Logo
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="PNGuy">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                PNGuy
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2019-02-19T10:11:17+00:00">
                        3 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            477
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            108
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            800x600
                        </span>
                    </span>
                </span>
                <img alt="PewDiePie Logo PNG" src="https://purepng.com/public/uploads/thumbnail//pewdiepie-logo-ptu.png">
                </img>
            </a>
            <a class="item hovercard" data-h="202" data-w="280" href="https://purepng.com/photo/29462/apex-legends-logo-high-resolution" style="width: 249px; height: 180px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Apex Legends Logo High Resolution">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Apex Legends Logo High Resolution
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Michael">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Michael
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2019-02-06T19:54:50+00:00">
                        3 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            10054
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            4483
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            4388x3160
                        </span>
                    </span>
                </span>
                <img alt="Apex Legends Logo High Resolution PNG" src="https://purepng.com/public/uploads/thumbnail//apex-legends-logo-high-resolution-ftg.png">
                </img>
            </a>
            <a class="item hovercard" data-h="198" data-w="280" href="https://purepng.com/photo/28487/new-dark-bomber-fortnite-full-skin" style="width: 251px; height: 180px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="New Dark Bomber Fortnite Full Skin">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        New Dark Bomber Fortnite Full Skin
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Swompy">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//swompy-315063526684tpist3dsf.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Swompy
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-10-06T10:02:13+00:00">
                        7 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2600
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            293
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1112x786
                        </span>
                    </span>
                </span>
                <img alt="New Dark Bomber Fortnite Full Skin PNG" src="https://purepng.com/public/uploads/thumbnail//new-dark-bomber-fortnite-full-skin-rl0.png">
                </img>
            </a>
            <a class="item hovercard" data-h="428" data-w="280" href="https://purepng.com/photo/28314/rolex-submariner-date" style="width: 131px; height: 200px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Rolex Submariner Date">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Rolex Submariner Date
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Swompy">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//swompy-315063526684tpist3dsf.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Swompy
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-07-28T13:52:41+00:00">
                        10 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1099
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            137
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            720x1100
                        </span>
                    </span>
                </span>
                <img alt="Rolex Submariner Date PNG" src="https://purepng.com/public/uploads/thumbnail//rolex-submariner-date-au9.png">
                </img>
            </a>
            <a class="item hovercard" data-h="193" data-w="280" href="https://purepng.com/photo/28250/zlatko-dalic" style="width: 290px; height: 200px; display: block;">
                <span class="hover-content" style="display: none;">
                    <h5 class="text-overflow title-hover-content" title="Zlatko Dalić">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Zlatko Dalić
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Swompy">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//swompy-315063526684tpist3dsf.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Swompy
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-07-10T17:51:52+00:00">
                        10 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1213
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            194
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            4230x2906
                        </span>
                    </span>
                </span>
                <img alt="Zlatko Dalić PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-zlatko-daliczlatko-daliccroatiazlatkodalicfifasoccerfootballwm2018wm18al-ain-31531245106gmxzx.png">
                </img>
            </a>
            <a class="item hovercard" data-h="280" data-w="280" href="https://purepng.com/photo/28230/apple-iphone-x" style="width: 200px; height: 200px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Apple iPhone X">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Apple iPhone X
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="UpMeTomorrow">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//upmetomorrow-2515194754763eytvtqpef.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                UpMeTomorrow
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-07-04T07:34:58+00:00">
                        10 months ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2142
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            511
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            4000x4000
                        </span>
                    </span>
                </span>
                <img alt="Apple iPhone X PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-apple-iphone-xappleapple-iphonephonesmartphonemobile-devicetouch-screeniphone-xiphone-10electronicsobjects-251530689694t8eo8.png">
                </img>
            </a>
            <a class="item hovercard" data-h="187" data-w="280" href="https://purepng.com/photo/7005/beautiful-girl" style="width: 299px; height: 200px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Beautiful Girl">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Beautiful Girl
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Moomhan">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Moomhan
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-04-30T17:18:34+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            3362
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            544
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            4809x3200
                        </span>
                    </span>
                </span>
                <img alt="Beautiful Girl PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-beautiful-girlwomenpeoplepersonsfemalebeautiful-11215251087093njwn.png">
                </img>
            </a>
            <a class="item hovercard" data-h="280" data-w="280" href="https://purepng.com/photo/8226/antique-school-desk" style="width: 198px; height: 200px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Antique School Desk">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Antique School Desk
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="originalcontent">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//originalcontent-1271525439986ieb67nnava.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                originalcontent
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-05-06T16:05:05+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1325
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            93
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            2048x2048
                        </span>
                    </span>
                </span>
                <img alt="Antique School Desk PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-antique-school-deskschoollearningsittingwoodgreenmetalantiqueretroold-fashionedoldfurnishingsdeskschool-desk-1271525622702ztjtq.png">
                </img>
            </a>
            <a class="item hovercard" data-h="280" data-w="280" href="https://purepng.com/photo/8204/coffee-beans" style="width: 207px; height: 207px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Coffee Beans">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Coffee Beans
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="originalcontent">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//originalcontent-1271525439986ieb67nnava.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                originalcontent
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-05-04T13:04:55+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1435
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            228
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            2048x2048
                        </span>
                    </span>
                </span>
                <img alt="Coffee Beans PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-coffee-beansdarkcoffeemocharoastedbeanbrowncafejavafreshfallingpileespresso-12715254390941q7ot.png">
                </img>
            </a>
            <a class="item hovercard" data-h="190" data-w="190" href="https://purepng.com/photo/818/water-circle" style="width: 207px; height: 207px; display: block;">
                <span class="hover-content" style="display: none;">
                    <h5 class="text-overflow title-hover-content" title="Water Circle">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Water Circle
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="UploadMeToday">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                UploadMeToday
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-02-22T19:47:20+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            3238
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            739
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            800x800
                        </span>
                    </span>
                </span>
                <img alt="Water Circle PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-water-circlewater-dropswatereffectsdynamicwater-splash-221519328839yw9c9.png">
                </img>
            </a>
            <a class="item hovercard" data-h="365" data-w="190" href="https://purepng.com/photo/272/selena-gomez-sitting-legs" style="width: 108px; height: 207px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Selena Gomez Sitting Legs">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Selena Gomez Sitting Legs
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Momo">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//momo-515059126787lhgae31rx.jpeg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Momo
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-09-24T19:20:23+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2383
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            287
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            646x1238
                        </span>
                    </span>
                </span>
                <img alt="Selena Gomez Sitting Legs PNG" src="https://purepng.com/public/uploads/thumbnail//selena-gomez-sitting-legs-51506280821xzeledsy0u.png">
                </img>
            </a>
            <a class="item hovercard" data-h="155" data-w="280" href="https://purepng.com/photo/601/house-from-the-outside" style="width: 374px; height: 207px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="House From The Outside">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        House From The Outside
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Swompy">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//swompy-315063526684tpist3dsf.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Swompy
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-10-19T21:46:40+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2588
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            348
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            977x539
                        </span>
                    </span>
                </span>
                <img alt="House From The Outside PNG" src="https://purepng.com/public/uploads/thumbnail//house-from-the-outside-31508449597xmac5yeunm.png">
                </img>
            </a>
            <a class="item hovercard" data-h="258" data-w="280" href="https://purepng.com/photo/166/steve-jobs-thinking" style="width: 222px; height: 207px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Steve Jobs Thinking">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Steve Jobs Thinking
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Momo">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//momo-515059126787lhgae31rx.jpeg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Momo
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-09-20T12:53:50+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2223
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            229
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1086x1000
                        </span>
                    </span>
                </span>
                <img alt="Steve Jobs Thinking PNG" src="https://purepng.com/public/uploads/thumbnail//steve-jobs-thinking-515059120297iwa9zqqxh.png">
                </img>
            </a>
            <a class="item hovercard" data-h="393" data-w="190" href="https://purepng.com/photo/275/selena-gomez-standing" style="width: 91px; height: 187px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Selena Gomez Standing">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Selena Gomez Standing
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Momo">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//momo-515059126787lhgae31rx.jpeg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Momo
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-09-24T19:21:02+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2020
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            248
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            622x1285
                        </span>
                    </span>
                </span>
                <img alt="Selena Gomez Standing PNG" src="https://purepng.com/public/uploads/thumbnail//selena-gomez-standing-51506280860tku52jd86p.png">
                </img>
            </a>
            <a class="item hovercard" data-h="257" data-w="190" href="https://purepng.com/photo/447/duckling" style="width: 139px; height: 187px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="duckling">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        duckling
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="ELL3G4NCE">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//ell3g4nce-91506489864oan6xzuek3.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                ELL3G4NCE
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-10-15T13:45:41+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1471
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            255
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1622x2192
                        </span>
                    </span>
                </span>
                <img alt="duckling PNG" src="https://purepng.com/public/uploads/thumbnail//duckling-91508075138sjib5bqrdv.png">
                </img>
            </a>
            <a class="item hovercard" data-h="196" data-w="280" href="https://purepng.com/photo/646/snake" style="width: 267px; height: 187px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Snake">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Snake
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="ELL3G4NCE">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//ell3g4nce-91506489864oan6xzuek3.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                ELL3G4NCE
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-10-21T19:57:38+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2283
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            304
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            2236x1564
                        </span>
                    </span>
                </span>
                <img alt="Snake PNG" src="https://purepng.com/public/uploads/thumbnail//snake-91508615855p9hep76dop.png">
                </img>
            </a>
            <a class="item hovercard" data-h="150" data-w="280" href="https://purepng.com/photo/239/yellow-mercedes-amg-gt-solarbeam-car" style="width: 349px; height: 187px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Yellow Mercedes AMG GT Solarbeam Car">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Yellow Mercedes AMG GT Solarbeam Car
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Momo">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//momo-515059126787lhgae31rx.jpeg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Momo
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-09-24T19:04:42+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2367
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            400
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1485x795
                        </span>
                    </span>
                </span>
                <img alt="Yellow Mercedes AMG GT Solarbeam Car PNG" src="https://purepng.com/public/uploads/thumbnail//yellow-mercedes-amg-gt-solarbeam-car-51506279880mf16qwgez8.png">
                </img>
            </a>
            <a class="item hovercard" data-h="191" data-w="280" href="https://purepng.com/photo/1/white-cloud" style="width: 272px; height: 187px; display: block;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="White Cloud">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        White Cloud
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="PureNetwork">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//purenetwork-114984932140w6vdcdjkl.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                PureNetwork
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-06-26T16:12:54+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            8234
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            1976
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            3170x2161
                        </span>
                    </span>
                </span>
                <img alt="White Cloud PNG" src="https://purepng.com/public/uploads/thumbnail//white-cloud-png-11498493571hxoxiynt93.png">
                </img>
            </a>
            <a class="item hovercard" data-h="196" data-w="190" href="https://purepng.com/photo/485/black-apple-iphone-hand-holded" style="display: none;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Black Apple iPhone Hand Holded">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Black Apple iPhone Hand Holded
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="Momo">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//momo-515059126787lhgae31rx.jpeg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                Momo
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-10-15T17:48:23+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2762
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            409
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1052x1080
                        </span>
                    </span>
                </span>
                <img alt="Black Apple iPhone Hand Holded PNG" src="https://purepng.com/public/uploads/thumbnail//black-apple-iphone-hand-holded-51508089701vcupbesmnt.png">
                </img>
            </a>
            <a class="item hovercard" data-h="388" data-w="190" href="https://purepng.com/photo/754/sexy-selena-gomez-in-short-clothes" style="display: none;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Sexy Selena Gomez in short Clothes">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Sexy Selena Gomez in short Clothes
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="UploadMeToday">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//default.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                UploadMeToday
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-02-22T19:21:56+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2974
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            237
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            582x1188
                        </span>
                    </span>
                </span>
                <img alt="Sexy Selena Gomez in short Clothes PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-sexy-selena-gomez-in-short-clothesselena-gomezmusic-starssingerscelebritycelebritiesstarsamericaactress-221519327314i5b5f.png">
                </img>
            </a>
            <a class="item hovercard" data-h="285" data-w="190" href="https://purepng.com/photo/1077/red-haired-girl" style="display: none;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="Red Haired Girl">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        Red Haired Girl
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="UpMeTomorrow">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//upmetomorrow-2515194754763eytvtqpef.png" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                UpMeTomorrow
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2018-02-24T12:05:29+00:00">
                        about a year ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            2271
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            260
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            1000x1500
                        </span>
                    </span>
                </span>
                <img alt="Red Haired Girl PNG" src="https://purepng.com/public/uploads/thumbnail//purepng.com-red-haired-girlpersonspeopleswomanwomenred-hairedgirlsteens-251519473927vu6ci.png">
                </img>
            </a>
            <a class="item hovercard" data-h="120" data-w="280" href="https://purepng.com/photo/673/white-basic-plate" style="display: none;">
                <span class="hover-content">
                    <h5 class="text-overflow title-hover-content" title="White Basic Plate">
                        <i class="icon icon-Medal myicon-right" title="Featured">
                        </i>
                        White Basic Plate
                    </h5>
                    <h5 class="text-overflow author-label mg-bottom-xs" title="ELL3G4NCE">
                        <img alt="User" class="img-circle" src="https://purepng.com/public/avatar//ell3g4nce-91506489864oan6xzuek3.jpg" style="width: 20px; height: 20px; display: inline-block; margin-right: 5px;">
                            <em>
                                ELL3G4NCE
                            </em>
                        </img>
                    </h5>
                    <span class="timeAgo btn-block date-color text-overflow" data="2017-10-28T16:48:13+00:00">
                        2 years ago
                    </span>
                    <span class="sub-hover">
                        <span class="myicon-right">
                            <i class="fa fa-line-chart myicon-right">
                            </i>
                            1567
                        </span>
                        <span class="myicon-right">
                            <i class="icon icon-Download myicon-right">
                            </i>
                            296
                        </span>
                        <span class="myicon-right" style="float:right">
                            <i class="fa fa-expand myicon-right">
                            </i>
                            3492x1495
                        </span>
                    </span>
                </span>
                <img alt="White Basic Plate PNG" src="https://purepng.com/public/uploads/thumbnail//white-basic-plate-91509209291046atr6hv8.png">
                </img>
            </a>
        </div>
        <div class="col-md-12 text-center margin-bottom-20">
            <a class="btn btn-lg btn-main custom-rounded" href="https://purepng.com/latest">
                Explore
                <i class="fa fa-long-arrow-right">
                </i>
            </a>
        </div>
    </div>
    <div class="row margin-bottom-40">
        <div class="container">
            <div class="col-md-4 border-stats">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">
                    <span class=".numbers-with-commas counter">
                        20,000
                    </span>
                    +
                </h1>
                <a alt="Members" href="https://purepng.com/members">
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">
                        Members
                    </h5>
                </a>
            </div>
            <div class="col-md-4 border-stats">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">
                    <span class=".numbers-with-commas counter">
                        24
                    </span>
                    M+
                </h1>
                <a alt="Most Downloads" href="https://purepng.com/most/downloads">
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">
                        Downloads
                    </h5>
                </a>
            </div>
            <div class="col-md-4 border-stats">
                <h1 class="btn-block text-center class-montserrat margin-bottom-zero none-overflow">
                    <span class=".numbers-with-commas counter">
                        30,000
                    </span>
                    +
                </h1>
                <a alt="View all" href="https://purepng.com/latest">
                    <h5 class="btn-block text-center class-montserrat subtitle-color text-uppercase">
                        Stock Images
                    </h5>
                </a>
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
        <div class="btn-block text-center">
            <a class="btn btn-lg btn-main custom-rounded" href="https://purepng.com/register">
                Sign up, it's free!
            </a>
        </div>
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
                    <li>
                        <a class="link-category" href="https://purepng.com/category/animals">
                            Animals (978)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/architecture">
                            Architecture (305)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/business">
                            Business (91)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    <li>
                        <a class="link-category" href="https://purepng.com/category/celebrities">
                            Celebrities (1013)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/clipart">
                            Clipart (5744)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/clothing">
                            Clothing (969)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    <li>
                        <a class="link-category" href="https://purepng.com/category/effects">
                            Effects (307)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/electronics">
                            Electronics (1039)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/fashion">
                            Fashion (44)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-center">
                <ul class="list-unstyled imagesCategory">
                    <li>
                        <a class="link-category" href="https://purepng.com/category/female">
                            Female (317)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/food">
                            Food (4308)
                        </a>
                    </li>
                    <li>
                        <a class="link-category" href="https://purepng.com/category/games">
                            Games (760)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 text-center margin-top-40">
                <a class="btn btn-lg btn-main custom-rounded" href="https://purepng.com/categories">
                    View all
                    <i class="fa fa-long-arrow-right">
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>
@stop
