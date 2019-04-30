@extends('layouts.index')

@section('content')

    <section class="cid-roVOPuBJb3 mbr-fullscreen" id="pricing-tables1-e">
        @foreach($customers as $cs)
        <div class="container">
            <div class="media-container-row row">

                <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                    <div class="plan-header text-center pt-5">
                        <h3 class="plan-title mbr-fonts-style display-5">
                            {{$cs->StartTime}}
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
                                    hello world!
                                </li>
                                <li class="list-group-item mbr-bold">
                                    母親節優惠折10%
                                </li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center pt-2">
                            <a href="{{ route('order.history.item',$cs->id) }}" class="btn btn-primary display-4">詳細資訊</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </section>

@endsection






