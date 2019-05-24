<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="https://purepng.com/">
                    <img alt="PurePNG Logo" class="logo" src="https://purepng.com/public/img/logo.svg">
                    </img>
                </a>
                <p class="margin-tp-xs">
                    PurePNG is a free to use PNG gallery where you can download high quality transparent CC0 PNG images without any background. From cliparts to people over logos and effects with more than 30000 transparent free high resolution PNG photos on line.
                </p>
                <ul class="list-inline">
                    <li>
                        <a aria-label="Share on Twitter" class="ico-social" href="https://twitter.com/PurePNGcom">
                            <i class="fa fa-twitter">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Share on Facebook" class="ico-social" href="https://www.facebook.com/Purepng-187287722034914/">
                            <i class="fa fa-facebook">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Share on Instagram" class="ico-social" href="https://www.instagram.com/purepng_official/">
                            <i class="fa fa-instagram">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Share on Pinterest" class="ico-social" href="https://www.pinterest.com/purepng/">
                            <i class="fa fa-pinterest">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a aria-label="Share on Google" class="ico-social" href="https://plus.google.com/b/102438531136113257875/102438531136113257875">
                            <i class="fa fa-google-plus">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 margin-tp-xs">
                <h4 class="margin-top-zero font-default">
                    About
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <a class="link-footer" href="https://purepng.com/page/terms-of-service">
                            Terms
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://purepng.com/page/support">
                            Support
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://purepng.com/page/press-resources">
                            Brand Resources
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://purepng.com/page/privacy-policy">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://purepng.com/page/upload-png">
                            Upload PNG
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://status.purepng.com/">
                            Status
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://howtomedia.co/threads/91/">
                            Changelog
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 margin-tp-xs">
                <h4 class="margin-top-zero font-default">
                    Categories
                </h4>
                <ul class="list-unstyled">
                    @foreach($footer_categories as $category)
                        <li>
                            <a class="link-footer" href="{{route('show_category', [$category->slug])}}">
                                {{$category->name}}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a class="link-footer" href="{{route('categories')}}">
                            <strong>
                                View all
                                <i class="fa fa-long-arrow-right">
                                </i>
                            </strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 margin-tp-xs">
                <h4 class="margin-top-zero font-default">
                    Links
                </h4>
       <!--          <ul class="list-unstyled">
                    <li>
                        <a class="link-footer" href="https://purepng.com/login">
                            Login
                        </a>
                    </li>
                    <li>
                        <a class="link-footer" href="https://purepng.com/register">
                            Sign Up
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</footer>
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center padding-top-20">
                <p>
                    © PurePNG | Free transparent CC0 PNG Image Library - 2019
                </p>
            </div>
        </div>
    </div>
</footer>