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

    <style>
        hr.style-one {
            border: 0;
            height: 1px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);
        }
    </style>

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
                <a class="navbar-brand" href="#mu-slider"><img src="{{url('img/logo/'. $restaurant->logo)}}" alt="img"></a>
                <!--  Image based logo  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->


            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                    <li><a href="#mu-slider"><font face="Comic Sans MS" size="4" color="black">HOME</font></a></li>
                    <li><a href="#mu-about-us"><font face="Comic Sans MS" size="4" color="black">ABOUT US</font></a></li>
                    <li><a href="#mu-restaurant-menu"><font face="Comic Sans MS" size="4" color="black">MENU</font></a></li>
                    <li><a href="#mu-gallery"><font face="Comic Sans MS" size="4" color="black">NEWS</font></a></li>
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
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3><br>
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
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3><br>
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
                    <h3><b><font face="Comic Sans MS" color="#ffffff">Let's ENJOY</font></b></h3><br>
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
                <div style="padding: 10px">
                    <h2><font face="Comic Sans MS">TASTy SHOPS-<font face="微軟正黑體">台中金典綠園道店</font></font></h2>
                </div>

                <div class="col-md-12">
                    <div class="col-md-5" style="padding: 20px">
                        <img src="{{url('img/slider/'. $restaurant->map)}}" class="img-responsive zoom-img" alt=""/>
                    </div>
                    <div class="col-md-7" style="padding: 5px;line-height: 43px">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"> </i><font face="微軟正黑體" size="3">　{{$restaurant->phone }}</font></li>
                            <li><i class="fa fa-map" aria-hidden="true"> </i><font face="微軟正黑體" size="3">　{{$restaurant->address }}</font></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><font face="Comic Sans MS" size="3">　service@tasty.com.tw</font></li>
                            <div class="store_data_google" title="Let's Go Google地圖">
                                <button class="btn btn-info-outline"><a href="https://www.google.com.tw/maps?q={{$restaurant->address }}" target="_blank" id="googlemap"><font face="微軟正黑體">查看店鋪位址</font></a></button>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="open-hours-row">
                        <div class="col-md-4 open-hours-left">
                            <h4><font face="Comic Sans MS" size="6">OPENING HOURS</font></h4>
                        </div>
                        <div class="col-md-4 open-hours-left">
                            <h5><font face="Comic Sans MS">LUNCH</font></h5>
                            <h5><font face="Comic Sans MS">11:30-14:30</font></h5>
                        </div>
                        <div class="col-md-4 open-hours-left">
                            <h5><font face="Comic Sans MS">DINNER</font></h5>
                            <h5><font face="Comic Sans MS">17:30-22:00</font></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-top:30px">
                    <h3><i class="fa fa-info-circle" aria-hidden="true"><font face="微軟正黑體"><b> 停 車 資 訊</b></font></i></h3>
                </div>
                <div class="col-md-12" style="margin-top:15px;line-height: 20px">
                    <font face="微軟正黑體">　1. 消費發票(滿)$500抵1HR，$1,000抵2HR，$2,000元抵3HR，<p>　　最多抵6HR(即消費$5,000)。<br />　2. 超過折抵時數後，平日停車$40/HR、假日$60/HR。<br />　3. 禮券消費會開立憑證抵停車費。</font>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About us -->

<!-- Start Counter Section -->
<section id="mu-counter">
    <div class="mu-counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-counter-area">

                        <ul class="mu-counter-nav">

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Fresh</span>
                                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
                                    <p>Breakfast Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Delicious</span>
                                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>
                                    <p>Lunch Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Hot</span>
                                    <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>
                                    <p>Coffee Items</p>
                                </div>
                            </li>

                            <li class="col-md-3 col-sm-3 col-xs-12">
                                <div class="mu-single-counter">
                                    <span>Satisfied</span>
                                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>
                                    <p>Customers</p>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Section -->

<!-- Start Restaurant Menu -->
<section id="mu-restaurant-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-restaurant-menu-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Discover</span>
                        <h2><font face="Comic Sans MS">OUR MENU</font></h2>
                    </div>

                    <div class="mu-restaurant-menu-content">
                        <ul class="nav nav-tabs mu-restaurant-menu">
{{--                            <li class="active"><a href="#all" data-toggle="tab"><font face="微軟正黑體">ALL</font></a></li>--}}
                            <li class="active"><a href="#main_course" data-toggle="tab"><font face="微軟正黑體">主餐</font></a></li>
                            <li><a href="#appetizer-1" data-toggle="tab"><font face="微軟正黑體">開胃品</font></a></li>
                            <li><a href="#salad" data-toggle="tab"><font face="微軟正黑體">沙拉</font></a></li>
                            <li><a href="#appetizer-2" data-toggle="tab"><font face="微軟正黑體">前菜</font></a></li>
                            <li><a href="#soup" data-toggle="tab"><font face="微軟正黑體">湯品</font></a></li>
                            <li><a href="#dessert" data-toggle="tab"><font face="微軟正黑體">甜點</font></a></li>
                            <li><a href="#drink" data-toggle="tab"><font face="微軟正黑體">飲料</font></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
{{--                            <div class="tab-pane fade in active" id="all">--}}
{{--                                <div class="mu-tab-content-area">--}}
{{--                                    <div class="row">--}}
{{--                                        @foreach($meals as $meal)--}}
{{--                                            @if(($meal->id)%2==1)--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <div class="mu-tab-content-left">--}}
{{--                                                        <ul class="mu-menu-item-nav">--}}
{{--                                                            <li>--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <div class="media-left">--}}
{{--                                                                        <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body">--}}
{{--                                                                        <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>--}}
{{--                                                                        <span class="mu-menu-price">${{$meal->price}}</span>--}}
{{--                                                                        <div>--}}
{{--                                                                            <font face="微軟正黑體">{{$meal->ingredients}}</font>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <hr class="style-one" />--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            @if(($meal->id)%2==0)--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <div class="mu-tab-content-right">--}}
{{--                                                        <ul class="mu-menu-item-nav">--}}
{{--                                                            <li>--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <div class="media-left">--}}
{{--                                                                        <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body">--}}
{{--                                                                        <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>--}}
{{--                                                                        <span class="mu-menu-price">${{$meal->price}}</span>--}}
{{--                                                                        <div>--}}
{{--                                                                            <font face="微軟正黑體">{{$meal->ingredients}}</font>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <hr class="style-one" />--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="tab-pane fade in active" id="main_course">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==1)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <div>
                                                                                <font face="微軟正黑體">{{$meal->ingredients}}</font>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <div>
                                                                                <font face="微軟正黑體">{{$meal->ingredients}}</font>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="appetizer-1">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==2)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="salad">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==3)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="appetizer-2">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==4)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="soup">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==5)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="dessert">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==6)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="drink">
                                <div class="mu-tab-content-area">
                                    <div class="row">
                                        @foreach($meals as $meal)
                                            @if($meal->category_id==7)
                                                @if(($meal->id)%2==1)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-left">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(($meal->id)%2==0)
                                                    <div class="col-md-6">
                                                        <div class="mu-tab-content-right">
                                                            <ul class="mu-menu-item-nav">
                                                                <li>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <a><img class="media-object" src="{{url('img/meal/'. $meal->photo)}}" alt="img"></a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading"><a><font face="微軟正黑體">{{$meal->name}}</font></a></h4>
                                                                            <span class="mu-menu-price">${{$meal->price}}</span>
                                                                            <p><font face="微軟正黑體">{{$meal->ingredients}}</font></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="style-one" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Restaurant Menu -->

<!-- Start Gallery -->
<section id="mu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-gallery-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Discover</span>
                        <h2><font face="Comic Sans MS">OUR NEWS</font></h2>
                    </div>
{{--Old 模板--}}
                    <div class="gallery-agileinfo-row">
                        @foreach($posts as $post)
                            <div class="col-md-4 gallery-grids">
                                <div class="hover ehover14">
                                    <a class="swipebox">
                                        <img src="{{url('img/post/'. $post->pic)}}" width="70%" alt="123" class="img-responsive" style="margin-left: 15%"/>
                                        <div class="overlay">
                                            <h4>{{$post->title}}</h4>
                                            <br><div class="info nullbutton button" data-toggle="modal" data-target="#exampleModal{{$post->id}}">Show More</div>
                                        </div>
                                        <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel" style="text-align: center">{{$post->title}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-12" style="text-align:justify;text-justify: distribute;margin-top: 20px">
                                                        <font face="微軟正黑體">{{$post->content}}</font>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 20px">
                                                        <img src="{{url('img/post/'. $post->pic)}}" width="70%" alt="123" style="margin-left: 15%"/>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="col-md-12" style="text-align: center;margin-top: 20px">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<section id="mu-chef">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-chef-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Our Professionals</span>
                        <h2><font face="Comic Sans MS">MASTER CHEFS</font></h2>
                    </div>
{{--Old 模板--}}
                    <div class="team-row">
                        <div class="col-md-3 team-grids">
                            <div class="w3ls-effect">
                                <img src="http://www.canyin88.com/uploads/image/20151104/1446618908740300.jpg" alt="img">
                                <div class="view-caption">
                                    <h4><font face="Comic Sans MS">John Smith</font></h4>
                                    <p><font face="Comic Sans MS">Chef</font></p>
                                </div>
                                <div class="social-icon">
                                    <a class="social-button twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="social-button facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="social-button google"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 team-grids">
                            <div class="w3ls-effect">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.InPOeJdKFf4WkbvXTmQ6agHaE5&pid=15.1&P=0&w=282&h=187" alt="img">
                                <div class="view-caption">
                                    <h4><font face="Comic Sans MS">Thomson Doe</font></h4>
                                    <p><font face="Comic Sans MS">Chef</font></p>
                                </div>
                                <div class="social-icon">
                                    <a class="social-button twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="social-button facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="social-button google"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 team-grids">
                            <div class="w3ls-effect">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.Xy_Wd_0ABFV2yoVu-Yr--AHaE-&pid=15.1&P=0&w=259&h=175" alt="img">
                                <div class="view-caption">
                                    <h4><font face="Comic Sans MS">Smith Kevin</font></h4>
                                    <p><font face="Comic Sans MS">Chef</font></p>
                                </div>
                                <div class="social-icon">
                                    <a class="social-button twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="social-button facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="social-button google"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 team-grids">
                            <div class="w3ls-effect">
                                <img src="/img/chef/4.jpg" alt="img">
                                <div class="view-caption">
                                    <h4><font face="微軟正黑體">阿基師</font></h4>
                                    <p><font face="Comic Sans MS">Chef</font></p>
                                </div>
                                <div class="social-icon">
                                    <a class="social-button twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="https://zh.wikipedia.org/wiki/%E9%98%BF%E5%9F%BA%E5%B8%AB" class="social-button facebook"><i class="fa fa-wikipedia-w"></i></a>
                                    <a class="social-button google"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Chef Section -->

<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">

                    <div class="mu-title">
                        <span class="mu-subtitle">Get In Touch</span>
                        <h2><font face="Comic Sans MS">Contact Us</font></h2>
                    </div>

                    <div class="contact">
                        <div class="col-md-12 contact-right">
                            <div class="wthree-contact-row">
                                <h4><font face="Comic Sans MS">Get In Touch</font></h4>
                                <form action="#" method="post">
                                    <div><input type="text" name="Name" placeholder="Name" required="">　<input class="email" type="text" name="Email" placeholder="Email" required=""></div>
                                    <textarea placeholder="Message" name="Message" required=""></textarea>
                                    <div style="text-align: center"><input type="submit" value="SUBMIT"></div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->

<!-- Start Map section -->
{{--<section id="mu-map">--}}
{{--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>--}}
{{--</section>--}}
<!-- End Map section -->

<!-- Start Footer -->
<footer id="mu-footer">
    <div class="container">
        <div class="mu-footer-area">
            <div class="social-icon">
                <a class="social-button twitter"><i class="fa fa-twitter"></i></a>
                <a class="social-button facebook"><i class="fa fa-facebook"></i></a>
                <a class="social-button google"><i class="fa fa-google-plus"></i></a>
                <a class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                <a class="social-button skype"><i class="fa fa-skype"></i></a>
            </div>
            <font face="Comic Sans MS" color="#ffffff">Copyright @ TASTy Steak . All right reserved.</font>
        </div>
    </div>
</footer>
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