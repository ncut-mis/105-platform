@extends('layouts.index')

@section('content')


    <section class="testimonials2 cid-rpAdd4sLfp mbr-fullscreen" id="testimonials2-n">
        <div class="container">
            <div class="media-container-row">
                <div class="media-content px-3 align-self-center mbr-white py-2  col-md-6">
                    訂閱餐廳列表：<br>
                    @foreach($member_restaurants as $mr)
                        {{$mr->name}}
                        <form action="{{ route('restaurant.unsubscribe', $mr->id) }}" method="POST" onsubmit="return ConfirmDelete()">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input name="restaurant_id" type="hidden" class="form-control" placeholder="請輸入狀態" value="{{$mr->id}}" required>
                            <button  class="btn"><i class="fa fa-trash"></i> 解除訂閱</button>
                        </form>
                    @endforeach
                    <script>
                        function ConfirmDelete()
                        {
                            var x = confirm("確定要解除我們餐廳的訂閱嗎，以後將再也收不到我們的優惠卷囉？");
                            if (x)
                                return true;
                            else
                                return false;
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>

@endsection