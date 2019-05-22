<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OsteriaX | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <!-- Gallery Lightbox -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!-- Icon -->
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">

    <!-- Main style sheet -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!--舊模板-->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">


    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

    <style type="text/css">
        ul li {
            list-style-image:url('img/slider/20130930173146.gif');
        }
    </style>

</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- LOGO -->

                <!--  Text based logo  -->
{{--                <a class="navbar-brand" href="000"><img src="img/logo/1552986617.jpg" alt="img"></a>--}}
                <a class="navbar-brand" href="000"><img src="{{url('img/logo/'. $restaurant->logo)}}" alt="img"></a>
                <!--  Image based logo  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->


            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                    <li><a href="000"><font face="Comic Sans MS" size="4" color="black">HOME</font></a></li>
                    <li><a href="#mu-about-us"><font face="Comic Sans MS" size="4" color="black">ABOUT US</font></a></li>
                    <li><a href="#mu-restaurant-menu"><font face="Comic Sans MS" size="4" color="black">MENU</font></a></li>
{{--                    <li><a href="#mu-reservation">RESERVATION</a></li>--}}
                    <li><a href="#mu-gallery"><font face="Comic Sans MS" size="4" color="black">GALLERY</font></a></li>
                    <li><a href="#mu-chef"><font face="Comic Sans MS" size="4" color="black">OUR CHEFS</font></a></li>
                    <li><a href="#mu-contact"><font face="Comic Sans MS" size="4" color="black">CONTACT</font></a></li>
                    <li><font face="微軟正黑體"><button class="btn btn-info-outline" onclick="return go()">訂閱！</button></font></li>
                </ul>
            </div>
            <script>
                function go()
                {
                    var x = confirm("請先登入會員!");
                    if (x)
                        return true;
                    else
                        return false;
                }
            </script>
            <!--/.nav-collapse -->
        </div>
    </nav>
</header>
<!-- End header section -->


<!-- Start slider  -->
<section id="mu-slider">
    <div class="mu-slider-area">

        <!-- Top slider -->
        <div class="mu-top-slider">

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{url('img/slider/'. $restaurant->pic1)}}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title"><font face="Comic Sans MS">Welcome</font></span>
                    <h2 class="mu-slider-title"><font face="微軟正黑體">歡樂美味　盡在西堤</font></h2>
                    <h2><b><font face="Comic Sans MS" color="#ffffff">Let's TASTy</font></b></h2>
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3>
                    <a href="#mu-restaurant-menu" class="mu-readmore-btn mu-reservation-btn">Menu</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{url('img/slider/'. $restaurant->pic2)}}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title"><font face="Comic Sans MS">Preferential</font></span>
                    <h2 class="mu-slider-title"><font face="微軟正黑體">優惠方案-套餐組合</font></h2>
                    <h2><b><font face="Comic Sans MS" color="#ffffff">Let's TASTy</font></b></h2>
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3>
                    <a href="#mu-gallery" class="mu-readmore-btn mu-reservation-btn">Gallery</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
                <img src="{{url('img/slider/'. $restaurant->pic3)}}" alt="img">
                <!-- Top slider content -->
                <div class="mu-top-slider-content">
                    <span class="mu-slider-small-title"><font face="Comic Sans MS">Get In Touch</font></span>
                    <h2 class="mu-slider-title"><font face="微軟正黑體">想對我們說什麼呢^-^</font></h2>
                    <h2><b><font face="Comic Sans MS" color="#ffffff">Let's TASTy</font></b></h2>
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3>
                    <a href="#mu-contact" class="mu-readmore-btn mu-reservation-btn">Contact</a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->

        </div>
    </div>
</section>
<!-- End slider  -->

<!-- Start About us -->
<section id="mu-about-us">
    <div class="container">
        <div class="mu-about-us-area">
            <div class="mu-title">
                <span class="mu-subtitle">Discover</span>
                <h2><font face="Comic Sans MS">ABOUT US</font></h2>
            </div>
            <div class="col-md-6 welcome-left">
                <div class="welcome-img">
                    <img src="{{url('img/slider/'. $restaurant->pic4)}}" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-7 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="{{url('img/slider/'. $restaurant->pic5)}}" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
                <div class="col-md-5 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="{{url('img/slider/'. $restaurant->pic6)}}" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
            </div>

            <div class="col-md-6 welcome-right">
                <h2><font face="微軟正黑體">經 營 理 念</font><font face="Comic Sans MS">　S.T.I.S</font></h2>
                <h3>
                    <font face="微軟正黑體">
                        　<span class="mbri-magic-stick mbr-iconfont mbr-iconfont-btn"></span> <b>誠實</b><font face="Comic Sans MS">　SINCERITY</font><br>
                        　<span class="mbri-magic-stick mbr-iconfont mbr-iconfont-btn"></span> <b>群力</b><font face="Comic Sans MS">　TEAMWORK</font><br>
                        　<span class="mbri-magic-stick mbr-iconfont mbr-iconfont-btn"></span> <b>創新</b><font face="Comic Sans MS">　INNOVATION</font><br>
                        　<span class="mbri-magic-stick mbr-iconfont mbr-iconfont-btn"></span> <b>敏捷</b><font face="Comic Sans MS">　Shrewd</font>
                    </font>
                </h3>
{{--營業時間~尚未設定--}}
{{--                <div class="open-hours-row">--}}
{{--                    <div class="col-md-4 open-hours-left">--}}
{{--                        <h4>OPENING HOURS </h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 open-hours-left">--}}
{{--                        <h5><font face="微軟正黑體">午餐</font></h5>--}}
{{--                        <br>--}}
{{--                        <h6>11:30-14:30</h6>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 open-hours-left">--}}
{{--                        <h5><font face="微軟正黑體">晚餐</font></h5>--}}
{{--                        <h6>17:30-22:00</h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-about-us-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Discover</span>--}}
{{--                        <h2>ABOUT US</h2>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6" style="text-align: center">--}}
{{--                            <div class="mu-about-us-left">--}}
{{--                                <img src="{{url('img/slider/'. $restaurant->pic4)}}" alt="img" width="80%">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="mu-about-us-right">--}}
{{--                                <h2><font face="微軟正黑體">公司簡介</font></h2>--}}
{{--                                <ul>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>--}}
{{--                                </ul>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
<!-- End About us -->

<!-- Start Counter Section -->
{{--<section id="mu-counter">--}}
{{--    <div class="mu-counter-overlay">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="mu-counter-area">--}}

{{--                        <ul class="mu-counter-nav">--}}

{{--                            <li class="col-md-3 col-sm-3 col-xs-12">--}}
{{--                                <div class="mu-single-counter">--}}
{{--                                    <span>Fresh</span>--}}
{{--                                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>--}}
{{--                                    <p>Breakfast Items</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="col-md-3 col-sm-3 col-xs-12">--}}
{{--                                <div class="mu-single-counter">--}}
{{--                                    <span>Delicious</span>--}}
{{--                                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>--}}
{{--                                    <p>Lunch Items</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="col-md-3 col-sm-3 col-xs-12">--}}
{{--                                <div class="mu-single-counter">--}}
{{--                                    <span>Hot</span>--}}
{{--                                    <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>--}}
{{--                                    <p>Coffee Items</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="col-md-3 col-sm-3 col-xs-12">--}}
{{--                                <div class="mu-single-counter">--}}
{{--                                    <span>Satisfied</span>--}}
{{--                                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>--}}
{{--                                    <p>Customers</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Counter Section -->

<!-- Start Restaurant Menu -->
{{--<section id="mu-restaurant-menu">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-restaurant-menu-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Discover</span>--}}
{{--                        <h2>OUR MENU</h2>--}}
{{--                    </div>--}}

{{--                    <div class="mu-restaurant-menu-content">--}}
{{--                        <ul class="nav nav-tabs mu-restaurant-menu">--}}
{{--                            <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>--}}
{{--                            <li><a href="#meals" data-toggle="tab">Meals</a></li>--}}
{{--                            <li><a href="#snacks" data-toggle="tab">Snacks</a></li>--}}
{{--                            <li><a href="#desserts" data-toggle="tab">Desserts</a></li>--}}
{{--                            <li><a href="#drinks" data-toggle="tab">Drinks</a></li>--}}
{{--                        </ul>--}}

{{--                        <!-- Tab panes -->--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade in active" id="breakfast">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-left">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-1.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-2.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-1.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-right">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-1.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-2.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-1.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="meals">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-left">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-3.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-4.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-3.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-right">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-4.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-3.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-4.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="snacks">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-left">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-5.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-6.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-5.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-right">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-5.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-6.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-5.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="desserts">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-left">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-7.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-8.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-7.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-right">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-8.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-7.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-8.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="drinks">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-left">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-9.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-10.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-9.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mu-tab-content-right">--}}
{{--                                                <ul class="mu-menu-item-nav">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-9.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">English Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-10.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$11.95</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <img class="media-object" src="img/menu/item-9.jpg" alt="img">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>--}}
{{--                                                                <span class="mu-menu-price">$15.85</span>--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Restaurant Menu -->

<!-- Start Reservation section -->
{{--<section id="mu-reservation">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-reservation-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Make A</span>--}}
{{--                        <h2>Reservation</h2>--}}
{{--                    </div>--}}

{{--                    <div class="mu-reservation-content">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <div class="mu-reservation-left">--}}
{{--                                <form class="mu-reservation-form">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control" placeholder="Full Name">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="email" class="form-control" placeholder="Email">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control" placeholder="Phone Number">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <select class="form-control">--}}
{{--                                                    <option value="0">How Many?</option>--}}
{{--                                                    <option value="1 Person">1 Person</option>--}}
{{--                                                    <option value="2 People">2 People</option>--}}
{{--                                                    <option value="3 People">3 People</option>--}}
{{--                                                    <option value="4 People">4 People</option>--}}
{{--                                                    <option value="5 People">5 People</option>--}}
{{--                                                    <option value="6 People">6 People</option>--}}
{{--                                                    <option value="7 People">7 People</option>--}}
{{--                                                    <option value="8 People">8 People</option>--}}
{{--                                                    <option value="9 People">9 People</option>--}}
{{--                                                    <option value="10 People">10 People</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control" id="datepicker" placeholder="Date">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="mu-readmore-btn">Make Reservation</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-5 col-md-offset-1">--}}
{{--                            <div class="mu-reservation-right">--}}
{{--                                <div class="mu-opening-hour">--}}
{{--                                    <h2>Opening Hours</h2>--}}
{{--                                    <ul class="list-unstyled">--}}
{{--                                        <li>--}}
{{--                                            <p>Monday &amp; Tuesday</p>--}}
{{--                                            <p>9:00 AM - 4:00 PM</p>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <p>Wednesday &amp; Thursday</p>--}}
{{--                                            <p>9:00 AM - Midnight</p>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <p>Friday &amp; Saturday</p>--}}
{{--                                            <p>9:00 AM - Midnight</p>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <p>Sunday</p>--}}
{{--                                            <p>9:00 AM - 11:00 PM</p>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Reservation section -->

<!-- Start Gallery -->
{{--<section id="mu-gallery">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-gallery-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Discover</span>--}}
{{--                        <h2>Our Gallery</h2>--}}
{{--                    </div>--}}

{{--                    <div class="mu-gallery-content">--}}

{{--                        <!-- Start gallery image -->--}}
{{--                        <div class="mu-gallery-body">--}}
{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/1.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/1.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/2.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/2.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/3.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/3.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/4.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/4.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/5.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/5.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/6.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/6.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/7.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/7.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/8.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/8.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                            <!-- start single gallery image -->--}}
{{--                            <div class="mu-single-gallery col-md-4">--}}
{{--                                <div class="mu-single-gallery-item">--}}
{{--                                    <figure class="mu-single-gallery-img">--}}
{{--                                        <a class="mu-imglink" href="img/gallery/9.jpg">--}}
{{--                                            <img alt="img" src="img/gallery/9.jpg">--}}
{{--                                            <div class="mu-single-gallery-info">--}}
{{--                                                <img class="mu-view-btn" src="img/plus.png" alt="plus icon img">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End single gallery image -->--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Gallery -->

<!-- Start Client Testimonial section -->
{{--<section id="mu-client-testimonial">--}}
{{--    <div class="mu-overlay">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="mu-client-testimonial-area">--}}

{{--                        <div class="mu-title">--}}
{{--                            <span class="mu-subtitle">Testimonials</span>--}}
{{--                            <h2>What Customers Say</h2>--}}
{{--                        </div>--}}

{{--                        <!-- testimonial content -->--}}
{{--                        <div class="mu-testimonial-content">--}}
{{--                            <!-- testimonial slider -->--}}
{{--                            <ul class="mu-testimonial-slider">--}}
{{--                                <li>--}}
{{--                                    <div class="mu-testimonial-single">--}}
{{--                                        <div class="mu-testimonial-info">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="mu-testimonial-bio">--}}
{{--                                            <p>- David Muller</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="mu-testimonial-single">--}}
{{--                                        <div class="mu-testimonial-info">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="mu-testimonial-bio">--}}
{{--                                            <p>- David Muller</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="mu-testimonial-single">--}}
{{--                                        <div class="mu-testimonial-info">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="mu-testimonial-bio">--}}
{{--                                            <p>- David Muller</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Client Testimonial section -->

<!-- Start Chef Section -->
{{--<section id="mu-chef">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-chef-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Our Professionals</span>--}}
{{--                        <h2>MASTER CHEFS</h2>--}}
{{--                    </div>--}}

{{--                    <div class="mu-chef-content">--}}
{{--                        <ul class="mu-chef-nav">--}}
{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-1.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Simon Jonson</h4>--}}
{{--                                        <span>Head Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-2.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Kelly Wenzel</h4>--}}
{{--                                        <span>Pizza Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-3.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Greg Hong</h4>--}}
{{--                                        <span>Grill Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-4.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Marty Fukuda</h4>--}}
{{--                                        <span>Burger Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-5.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Simon Jonson</h4>--}}
{{--                                        <span>Head Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-1.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Kelly Wenzel</h4>--}}
{{--                                        <span>Pizza Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-2.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Greg Hong</h4>--}}
{{--                                        <span>Grill Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="mu-single-chef">--}}
{{--                                    <figure class="mu-single-chef-img">--}}
{{--                                        <img src="img/chef/chef-3.jpg" alt="chef img">--}}
{{--                                    </figure>--}}
{{--                                    <div class="mu-single-chef-info">--}}
{{--                                        <h4>Marty Fukuda</h4>--}}
{{--                                        <span>Burger Chef</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-single-chef-social">--}}
{{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Chef Section -->



<!-- Start Contact section -->
{{--<section id="mu-contact">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-contact-area">--}}

{{--                    <div class="mu-title">--}}
{{--                        <span class="mu-subtitle">Get In Touch</span>--}}
{{--                        <h2>Contact Us</h2>--}}
{{--                    </div>--}}

{{--                    <div class="mu-contact-content">--}}
{{--                        <div class="row">--}}

{{--                            <div class="col-md-6">--}}
{{--                                <div class="mu-contact-left">--}}
{{--                                    <!-- Email message div -->--}}
{{--                                    <div id="form-messages"></div>--}}
{{--                                    <!-- Start contact form -->--}}
{{--                                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="name">Your Name</label>--}}
{{--                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="email">Email address</label>--}}
{{--                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="subject">Subject</label>--}}
{{--                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="message">Message</label>--}}
{{--                                            <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="mu-send-btn">Send Message</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <div class="mu-contact-right">--}}
{{--                                    <div class="mu-contact-widget">--}}
{{--                                        <h3>Office Address</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.</p>--}}
{{--                                        <address>--}}
{{--                                            <p><i class="fa fa-phone"></i> (850) 457 6688</p>--}}
{{--                                            <p><i class="fa fa-envelope-o"></i>contact@markups.io</p>--}}
{{--                                            <p><i class="fa fa-map-marker"></i>368 St. Panama City, Florida, USA</p>--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                    <div class="mu-contact-widget">--}}
{{--                                        <h3>Open Hours</h3>--}}
{{--                                        <address>--}}
{{--                                            <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>--}}
{{--                                            <p><span>Saturday</span> 9.00 am to 10 pm</p>--}}
{{--                                            <p><span>Sunday</span> 10.00 am to 12 pm</p>--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Contact section -->

<!-- Start Map section -->
{{--<section id="mu-map">--}}
{{--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>--}}
{{--</section>--}}
<!-- End Map section -->

<!-- Start Footer -->
{{--<footer id="mu-footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="mu-footer-area">--}}
{{--                    <div class="mu-footer-social">--}}
{{--                        <a href="#"><span class="fa fa-facebook"></span></a>--}}
{{--                        <a href="#"><span class="fa fa-twitter"></span></a>--}}
{{--                        <a href="#"><span class="fa fa-google-plus"></span></a>--}}
{{--                        <a href="#"><span class="fa fa-linkedin"></span></a>--}}
{{--                        <a href="#"><span class="fa fa-youtube"></span></a>--}}
{{--                    </div>--}}
{{--                    <div class="mu-footer-copyright">--}}
{{--                        <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<!-- End Footer -->

<!-- jQuery library -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('js/simple-animated-counter.js') }}"></script>
<!-- Gallery Lightbox -->
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Date Picker -->
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>