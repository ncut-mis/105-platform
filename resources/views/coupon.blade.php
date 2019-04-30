@extends('layouts.index')

@section('content')
    <section class="features8 cid-roWi99jfvR mbr-fullscreen mbr-parallax-background" id="features8-h">

        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
        </div>
        @foreach($coupons as $cs)
        <div class="container">
            <div class="media-container-row row">

                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                            <img src="/img/coupon/1555345797.jpg">
                    </div>
                    <div class="card-box align-center">

                        <h4 class="card-title mbr-fonts-style display-5">

                            剩餘  {{$cs->EndTime}}  天


                        </h4>

                        <p class="mbr-text mbr-fonts-style display-7">
                            {{$cs->content}}
                        </p>
                        <div class="mbr-section-btn text-center">
                            <a href="" class="btn btn-secondary display-4">
                                打開優惠卷
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection

