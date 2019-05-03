@extends('layouts.index')

@section('content')

    <section class="mbr-gallery mbr-slider-carousel mbr-fullscreen cid-roXq90UqiS" id="gallery2-i">


        <div class="container">
            <div>
                <form method="get"  action="{{ route('restaurant.search') }}" >
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" name="booksearch" id="task-name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> 查詢
                        </button>
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> 顯示全部
                        </button>
                    </div>
                </form>
                <div class="mbr-gallery-filter container gallery-filter-active">
                    <ul buttons="0">
                        <li class="mbr-gallery-filter-all">
                            <a class="btn btn-md btn-success-outline active display-7" href="">全部</a>
                        </li>
                    </ul>
                </div>
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>

                                @foreach($restaurants as $rs)
                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false"
                                     data-tags="{{$rs->category}}">
                                    <div href="#lb-gallery2-i" data-slide-to="0" data-toggle="modal">
                                        <img src="{{url('img/logo/'. $rs->logo)}}" height="163" alt="" title="">
                                        <span class="icon-focus"></span>
                                        <span class="mbr-gallery-title mbr-fonts-style display-7">{{$rs->name}}</span>
                                    </div>
                                    <form method="POST" action="{{route('restaurant{id}.home',$rs->id)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('get') }}
                                        <td style="text-align: center"> <button type="submit" class="btn btn-primary col-md-11 " style="font-family: 微軟正黑體; font-weight: bold;">
                                                {{ __('前往') }}
                                            </button>
                                        </td>
                                    </form>
                                </div>
                            @endforeach
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection


