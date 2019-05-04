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

    <script src="/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="/assets/popper/popper.min.js"></script>
    <script src="/assets/tether/tether.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="/assets/dropdown/js/script.min.js"></script>
    <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="/assets/parallax/jarallax.min.js"></script>

    <script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="/assets/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>

    <script src="/assets/theme/js/script.js"></script>

    <script src="/assets/gallery/player.min.js"></script>
    <script src="/assets/gallery/script.js"></script>
    <script src="/assets/slidervideo/script.js"></script>
    <script src="/assets/formoid/formoid.min.js"></script>

@endsection


