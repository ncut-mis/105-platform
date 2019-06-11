@extends('layouts.index')
<head>
    <script src="https://www.gstatic.com/firebasejs/6.1.1/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCTnmGUSXbyvJKbrmIcXtXMze3mecGKF-A",
            authDomain: "project-restaurants-ncut.firebaseapp.com",
            databaseURL: "https://project-restaurants-ncut.firebaseio.com",
            projectId: "project-restaurants-ncut",
            storageBucket: "project-restaurants-ncut.appspot.com",
            messagingSenderId: "390650303893",
            appId: "1:390650303893:web:2ea9767ea995ff31"
        };
        firebase.initializeApp(config);
    </script>
</head>
@section('content')
    <body>

    <script>
        const messaging = firebase.messaging();
        messaging.onMessage(payload => {
            console.log('onMessage: ', payload);
            var notifyMsg = payload.notification;
            var notification = new Notification(notifyMsg.title, {
                body: notifyMsg.body,
                icon: notifyMsg.icon
            });
        });
    </script>
    <section class="features8 cid-roWi99jfvR mbr-fullscreen mbr-parallax-background" id="features8-h">

        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
        </div>

        <div class="container">
            <div class="media-container-row row">
                @foreach($coupons as $cs)
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                            <img src="{{url('img/coupon/'. $cs->photo)}}">
                    </div>
                    <div class="card-box align-center">

                        <h4 class="card-title mbr-fonts-style display-5">
                            @if(\Carbon\Carbon::now()->diffInDays($cs->EndTime, false)>=0)
                                <font face="微軟正黑體">剩餘  {{\Carbon\Carbon::now()->diffInDays($cs->EndTime, false) }}  天</font>
                            @elseif(\Carbon\Carbon::now()->diffInDays($cs->EndTime, false)<0)
                                <font face="微軟正黑體">有效期限已過期</font>
                            @endif
                        </h4>

                        <p class="mbr-text mbr-fonts-style display-7">
                            <font face="微軟正黑體">{{$cs->title}}</font>
                        </p>
                        <div class="mbr-section-btn text-center">
                            <a href="{{route('coupon.index',$cs->id)}}" class="btn btn-secondary display-4">
                                <font face="微軟正黑體">打開優惠卷</font>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    </body>
@endsection

