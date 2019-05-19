@extends('layouts.index')

@section('content')


    <section class="testimonials2 cid-roVOPuBJb3 mbr-fullscreen" id="testimonials2-n">
        <div class="container">
            <div class="media-container-row">
                <div class="media-content px-3 align-self-center mbr-white py-2  col-md-6">
                    <div class="col-md-10">
                        <div class="card" style="text-align:center">
                            <div class="card-header" style="text-align:center;background-color: lightgray">
                                <font face="微軟正黑體" color="black" size="5"><b><span class="mbri-link mbr-iconfont mbr-iconfont-btn"></span> 訂閱餐廳列表 <span class="mbri-link mbr-iconfont mbr-iconfont-btn"></span></b></font>
                            </div>
                            <div class="card-body" style="text-align:center;background-color: lavender">
                                @foreach($member_restaurants as $mr)
                                    <font face="微軟正黑體" color="black" size="5"><b>{{$mr->name}}</b></font>
                                    <form action="{{ route('restaurant.unsubscribe', $mr->id) }}" method="POST" onsubmit="return ConfirmDelete()">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-info"><b><span class="mbri-unlink mbr-iconfont mbr-iconfont-btn "></span></b><font face="微軟正黑體">  取消訂閱</font></button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function ConfirmDelete()
        {
            var x = confirm("確定要取消我們餐廳的訂閱嗎，以後將再也收不到我們的優惠卷囉？");
            if (x)
                return true;
            else
                return false;
        }
    </script>

@endsection