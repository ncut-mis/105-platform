
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
    <style>

        .pic2 {
            width: 280px;
            height: 280px;
        }
        .pic2 img {
            width: auto;
            height: 100%;

        }

        /*.body {*/
        /*!* background-image: url("https://unsplash.com/photos/gFyy2Po7T-k") ; *!*/
        /*background-color: #FF3333;*/
        /*}*/
    </style>
    <title>{{$restaurant->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grilling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link  href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link  href="{{ asset('/css/swipebox.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.swipebox.js') }}"></script>
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner">

    <div class="header"><!-- header -->
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="#">{{$restaurant->name }}</a></h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#menu" class="scroll">Menu</a></li>
                        <li><a href="#team" class="scroll">Team</a></li>
                        <li><a href="#gallery" class="scroll">Gallery</a></li>
                        <li><a href="#contact" class="scroll">Contact Us</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- //header -->
    <!-- banner-text -->

    <div class="banner-text">
        <div >
            <ul class="slides">
                <li>
                    <h2>AMAZING  </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
                    <a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a>
                </li>

        </div>
        <!-- modal -->
        <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Make Your Reservation Now</h4>
                    </div>
                    <div class="modal-body book-form">
                        <form action="#" method="post">
                            <div class="phone_email">
                                <label>Full Name : </label>
                                <div class="form-text">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    <input type="text" name="Name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="phone_email phone_email1">
                                <label>Email : </label>
                                <div class="form-text">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="phone_email">
                                <label>Phone Number : </label>
                                <div class="form-text">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                    <input type="text" name="Phone no" placeholder="Phone no" required="">
                                </div>
                            </div>
                            <div class="phone_email phone_email1">
                                <label>Address : </label>
                                <div class="form-text">
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                    <input type="text" name="address" placeholder="Your Address" required="">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="agileits_reservation_grid">
                                <div class="span1_of_1">
                                    <label>Date : </label>
                                    <div class="book_date">
                                        <span class="fa fa-calendar" aria-hidden="true"></span>
                                        <input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy" required="">
                                    </div>
                                </div>
                                <div class="span1_of_1">
                                    <!-- start_section_room -->
                                    <label>Time : </label>
                                    <div class="section_room">
                                        <span class="fa fa-clock-o" aria-hidden="true"></span>
                                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <option value="null">Lunch</option>
                                            <option value="null">Dinner</option>
                                            <option value="AX">Break Fast</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="span1_of_1">
                                    <label>No.of People : </label>
                                    <!-- start_section_room -->
                                    <div class="section_room">
                                        <span class="fa fa-users" aria-hidden="true"></span>
                                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                            <option value="null">1 People</option>
                                            <option value="null">2 People</option>
                                            <option value="null">3 People</option>
                                            <option value="AX">4 People</option>
                                            <option value="AX">More</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <input type="submit" value="Book Now" />
                        </form>
                    </div>
                    <!-- Calendar -->
                    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
                    <script src="{{ asset('js/jquery-ui.js') }}"></script>
                    <script>
                        $(function() {
                            $( "#datepicker" ).datepicker();
                        });
                    </script>
                    <!-- //Calendar -->
                </div>
            </div>
        </div>
        <!-- //modal -->
        <!-- FlexSlider -->
        <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlsContainer: $(".custom-controls-container"),
                    customDirectionNav: $(".custom-navigation a")
                });
            });
        </script>
        <!-- //FlexSlider -->
    </div>
    <!-- //banner-text -->
</div>
<!-- //banner -->
<!-- welcome -->
<div id="about" class="welcome">
    <div class="container">
        <div class="agile-title">
            <h3> Welcome !</h3>
        </div>
        <div class="w3ls-row">
            <div class="col-md-6 welcome-left">
                <div class="welcome-img">
                    <img src="http://uploads.qj.com.cn/images/63459/201706203694125.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="http://img.udn.com/image/product/S0001336/APPROVED/U003805716/copy_d_201403041809562763.jpg" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="http://images.meishij.net/p/20080623/34def5ab558998de91ec02cb7f8c071e.jpg" class="img-responsive zoom-img" alt=""/>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 welcome-right">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in lacinia dolor Itaque earum rerum hic tenetur a sapiente delectus . </p>
                <div class="open-hours-row">
                    <div class="col-md-3 open-hours-left">
                        <h4>OPENING HOURS </h4>
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>BREAKFAST</h6>
                        <h5>7am - 12am</h5>
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>MAIN MENU</h6>
                        <h5>12am - 12pm</h5>
                    </div>
                    <div class="col-md-3 open-hours-left">
                        <h6>SPECIALS</h6>
                        <h5>8pm - 11pm</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- slid -->
<div class="slid">
    <div class="container">
        <h4>Today Special</h4>
        <h5>50% <span>Offer</span></h5>
        <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis. Etiam id enim sem. Suspendisse commodo tempor magna </p>
    </div>
</div>
<!-- //slid -->
<!-- menu -->
<div id="menu" class="menu">
    <div class="container">
        <div class="agile-title">
            <h3> Our Menu</h3>
        </div>
        <ul class="accordion">
            @foreach($meals as $meal)



                <li class="slide-01">
                    <div class="menu-left">
                        <div class="pic2">
                            <img src="{{$meal->photo }}" style="border:5px white solid; alt=""/>
                        </div>
                        <div class="menu-right">
                            <h4>{{$meal->name }} </h4>
                            <h5>${{$meal->price }} </h5>
                            <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //menu -->
<!-- team -->
<div id="team" class="team">
    <div class="container">
        <div class="agile-title">
            <h3> Our Team</h3>
        </div>
        <div class="team-row">
            <div class="col-md-3 team-grids">
                <div class="w3ls-effect">
                    <img src="http://www.canyin88.com/uploads/image/20151104/1446618908740300.jpg" alt="img">
                    <div class="view-caption">
                        <h4>John Smith</h4>
                        <p>Chef</p>
                    </div>
                    <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="w3ls-effect">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.InPOeJdKFf4WkbvXTmQ6agHaE5&pid=15.1&P=0&w=282&h=187" alt="img">
                    <div class="view-caption">
                        <h4>Thomson Doe</h4>
                        <p>Chef</p>
                    </div>
                    <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="w3ls-effect">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.Xy_Wd_0ABFV2yoVu-Yr--AHaE-&pid=15.1&P=0&w=259&h=175" alt="img">
                    <div class="view-caption">
                        <h4>Smith Kevin</h4>
                        <p>Chef</p>
                    </div>
                    <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="w3ls-effect">
                    <img src="http://static.admin.eladies.sina.com.tw/news_images/img_tw/sinabj/2014/1211/14182956128064.jpg" alt="img">
                    <div class="view-caption">
                        <h4>機師 阿</h4>
                        <p>Chef</p>
                    </div>
                    <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <div class="agile-title">
            <h3> Our Gallery</h3>
        </div>
        <div class="gallery-agileinfo-row">
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g1.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g2.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g3.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids gallery-grids-mdl">
                <div class="hover ehover14">
                    <a href="images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. ">
                        <img src="images/g4.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids gallery-grids-mdl">
                <div class="hover ehover14">
                    <a href="images/g5.jpg" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g5.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids gallery-grids-mdl">
                <div class="hover ehover14">
                    <a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g6.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g3.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g3.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
                        <img src="images/g4.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grids">
                <div class="hover ehover14">
                    <a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="images/g1.jpg" alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>gallery</h4>
                            <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!-- //gallery -->
<!-- address -->
<div id="contact" class="address">
    <div class="container">
        <div class="agile-title">
            <h3> Contact Us</h3>
        </div>
        <ul>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$restaurant->address }}</li>
            <li><i class="fa fa-phone" aria-hidden="true"> </i>  {{$restaurant->phone }}</li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //address -->
<!-- contact -->
<div class="contact">
    <div class="col-md-6 contact-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.4659083715702!2d120.68828058370418!3d24.17198324265401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917dd4dba3f95%3A0x81bacc5a96203fe0!2zNDA25Y-w5Lit5biC5YyX5bGv5Y2A5paH5b-D6Lev5Zub5q61Njk16Jmf!5e0!3m2!1szh-TW!2stw!4v1552386787322" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="col-md-6 contact-right">
        <div class="wthree-contact-row">
            <h4>Get In TOuch</h4>
            <form action="#" method="post">
                <input type="text" name="Name" placeholder="Name" required="">
                <input class="email" type="text" name="Email" placeholder="Email" required="">
                <textarea placeholder="Message" name="Message" required=""></textarea>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="social-icon">
            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
        </div>
        <p>© 2016 Grilling. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->
<!-- swipe box js -->

<script src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>