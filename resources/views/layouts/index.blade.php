<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.8.10, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.10, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/assets/images/fork-122x122.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/assets/theme/css/style.css">
    <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<section class="menu cid-rmWBAV1VCf" once="menu" id="menu1-9">


    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                {{--<span class="navbar-logo">--}}
                    {{--<a href="">--}}
                         {{--<img src="assets/images/fork-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">--}}
                    {{--</a>--}}
                {{--</span>--}}
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4"
                                                     href="">
                        尚食併狂
                    </a></span>
            </div>
        </div>

        @guest
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                                                               href="{{ route('register') }}">
                        <span class=" mbr-iconfont mbr-iconfont-btn "></span>
                        註冊
                    </a></div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                                                               href="{{ route('login.create') }}">
                        <span class=" mbr-iconfont mbr-iconfont-btn "></span>
                        登入
                    </a></div>
            </div>
        @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span
                                    class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>會員資料</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('restaurant') }}"><span
                                    class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>搜尋餐廳</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span
                                    class="mbri-mobile2 mbr-iconfont mbr-iconfont-btn"></span>點餐掃描</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span
                                    class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>用餐紀錄</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span
                                    class="mbri-cash mbr-iconfont mbr-iconfont-btn"></span>優惠卷</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span
                                    class="mbri-sites mbr-iconfont mbr-iconfont-btn"></span>會員憑證</a></li>
                </ul>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                                                               href="{{ route('logout') }}">
                        <span class=" mbr-iconfont mbr-iconfont-btn "></span>
                        登出
                    </a></div>
            </div>
        @endguest





    </nav>
</section>

@yield('content')

<script src="/assets/web/assets/jquery/jquery.min.js"></script>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/smoothscroll/smooth-scroll.js"></script>
<script src="/assets/dropdown/js/script.min.js"></script>
<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/parallax/jarallax.min.js"></script>
<script src="/assets/theme/js/script.js"></script>

</body>
</html>
