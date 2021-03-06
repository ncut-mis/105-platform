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
@extends('layouts.index')

@section('content')
    <section class="testimonials2 cid-rpAdd4sLfp mbr-fullscreen" id="testimonials2-n">
        <div class="container">
            <div class="media-container-row">
                <div class="media-content px-3 align-self-center mbr-white py-2  col-md-6">
                    <form action="/personal/{{$member->id}}/update" method="POST" role="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <p><br></p>
                        <p class="mbr-author-desc mbr-fonts-style display-7" >
                            birth：
                        </p>
                        <div>
                            <input name="birthday" class="form-control" placeholder="請輸入生日" value="{{$member->birthday}}" required>
                        </div>
                        <p class="mbr-author-desc mbr-fonts-style display-7" >
                            phone：
                        </p>
                        <div>
                            <input name="phone" class="form-control" placeholder="請輸入電話" value="{{$member->phone}}" required>
                        </div>
                        <p class="mbr-author-desc mbr-fonts-style display-7" >
                            address：
                        </p>
                        <div>
                            <input name="address" class="form-control" placeholder="請輸入地址" value="{{$member->address}}" required>
                        </div>
                        <p class="mbr-author-desc mbr-fonts-style display-7">
                            name：
                        </p>
                        <div>
                            <input name="name" class="form-control" placeholder="請輸入姓名" value="{{$member->name}}" required>
                        </div>

                        <p id="token" hidden></p>
                        <script>

                                const messaging = firebase.messaging();
                                messaging.requestPermission().then(res=>
                                    {
                                        return messaging.getToken();
                                    }
                                    , err => {
                                        // 若拒絕通知
                                        console.log(err);
                                    })
                                    .then(token => {
                                        // 成功取得 token
                                        console.log(token);
                                        document.getElementById("token").innerHTML = "目前個人驗證碼為：<br>" +token;
                                        document.getElementById("abc").value=token;
                                    });
                        </script>
                        <div>
                            <input name="token" class="form-control" placeholder="請輸入下方顯示之個人驗證碼" id="abc" type="hidden">
                        </div>

                        <div class="col-md-12" style="text-align:center">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success"><span class="mbri-update"></span><font face="微軟正黑體">更新</font></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection