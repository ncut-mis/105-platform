@extends('layouts.index')

@section('content')

    <section class="cid-roVOPuBJb3 mbr-fullscreen" id="pricing-tables1-e">
        <div class="container">
            <div class="media-container-row row">
                <form action="order/history/{{$orders->id}}" method="GET" role="form">
                    <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                        <div class="plan-header text-center pt-5">
                            <font face="微軟正黑體" size="5"><b>餐點詳細內容</b></font><p></p>
                            <h3 class="plan-title mbr-fonts-style display-5">{{date('Y/m/d',strtotime($orders->StartTime))}}</h3>
                            <div class="plan-price">
                                <span class="price-value mbr-fonts-style display-5">$</span>
                                <span class="price-figure mbr-fonts-style display-1">{{$orders->total}}</span>
                            </div>
                        </div>
                        <div class="plan-body pb-5">
                            <div class="plan-list align-center">
                                <ul class="list-group list-group-flush mbr-fonts-style display-7">
                                    <li class="list-group-item mbr-bold">
                                        @foreach($items as $is)
                                            <div>
                                                <font face="微軟正黑體">{{$is->name}}</font>
                                            </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>

                            <div class="mbr-section-btn text-center pt-2">
                                <a href="{{ route('order.history') }}" class="btn btn-primary display-4"><font face="微軟正黑體"><span class="mbri-undo mbr-iconfont mbr-iconfont-btn "></span>回上頁</font></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection


