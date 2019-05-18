@extends('layouts.index')

@section('content')

    <section class="cid-roVOPuBJb3 mbr-fullscreen" id="pricing-tables1-e">

        <div class="container">
            <div class="media-container-row row">
                @foreach($customers as $cs)
                    <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                        <div class="plan-header text-center pt-5">
                            <h3 class="plan-title mbr-fonts-style display-5">
                                {{date('Y/m/d',strtotime($cs->StartTime))}}
                            </h3>
                            <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                                <span class="price-figure mbr-fonts-style display-1">
                                    {{$cs->total}}
                            </span>
                            </div>
                        </div>
                        <div class="plan-body pb-5">
                            <div class="plan-list align-center">
                                <ul class="list-group list-group-flush mbr-fonts-style display-7">
                                    <li class="list-group-item mbr-bold">

                                        @php
                                            $num=0;
                                            $num2=0;
                                        @endphp
                                        @foreach($items as $item)
                                            @if($num<4)
                                                @if($cs->id == $item->order_id)
                                                    <font face="微軟正黑體">{{$item->meal->name}}</font>
                                                    <br>
                                                    @php($num++)
                                                @endif
                                            @endif
                                        @endforeach
                                        @for($i=$num;$i<4;$i++)
                                            <font color="#E9E6E6" face="微軟正黑體">{{'-無品項-'}}</font>
                                            <br>
                                        @endfor

                                    </li>
                                    <li class="list-group-item mbr-bold">
                                        @foreach($coupons as $coupon)
                                            @if($coupon->order_id==$cs->id)
                                                <font face="微軟正黑體">{{$coupon->coupon->title}}</font>
                                                @php($num2++)
                                            @endif
                                        @endforeach
                                        @if($num2<1)
                                            <font color="#E9E6E6" face="微軟正黑體">{{'-無使用優惠卷-'}}</font>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn text-center pt-2">
                                <a href="{{ route('order.history.item',$cs->id) }}" class="btn btn-primary display-4"><font face="微軟正黑體">詳細資訊</font></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection






