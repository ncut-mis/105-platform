@extends('layouts.index')

@section('content')
    <section class="features8 cid-roWi99jfvR mbr-fullscreen mbr-parallax-background" id="features8-h">

        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row row">
                <form action="coupon/{{$coupons->id}}" method="GET" role="form">
                    <div class="card col-md-12">
                        <div class="card-img">
                            <h2><font face="微軟正黑體" color="#f0f8ff"><b>優惠券詳細資訊</b></font><p></p></h2>
                            <img src="{{url('img/coupon/'.$coupons->photo)}}"><p></p>
                        </div>
                        <div class="card-box">
                            <font face="微軟正黑體" color="#f0f8ff">
                                <label>　　餐廳名稱</label><tr>　　　　{{$coupons->name}}</tr><br>
                                <label>　　優惠卷標題</label>　　　{{$coupons->title}}<br>
                                <label>　　優惠卷內容</label>　　　{{$coupons->content}}<br>
                                <label>　　折扣</label>　　　　　　{{$coupons->discount}}<br>
                                <label>　　低消</label>　　　　　　{{$coupons->lowestprice}}<br>
                                @if($coupons->status==0)
                                    <label>　　使用狀態</label>　　　　尚未使用<br>
                                @elseif($coupons->status==1)
                                    <label>　　使用狀態</label>　　　　已使用<br>
                                @endif
                                <label>　　有效期限(起)</label>　　{{$coupons->StartTime}}<br>
                                <label>　　有效期限(迄)</label>　　{{$coupons->EndTime}}<br>
                                <div style="text-align: center">
                                    @if(\Carbon\Carbon::now()->diffInDays($coupons->EndTime, false)>=0)
                                        <h4><font face="微軟正黑體" style="background-color:red"><b>{{\Carbon\Carbon::now()->diffInDays($coupons->EndTime, false) }}  天後失效</b></font></h4>
                                    @elseif(\Carbon\Carbon::now()->diffInDays($coupons->EndTime, false)<0)
                                        <h4><font face="微軟正黑體" style="background-color:red"><b><b>有效期限已過期</b></b></font></h4>
                                    @endif
                                </div>
                            </font>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="{{ route('coupon') }}" class="btn btn-primary display-4"><font face="微軟正黑體"><span class="mbri-undo mbr-iconfont mbr-iconfont-btn "></span>回上頁</font></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection


