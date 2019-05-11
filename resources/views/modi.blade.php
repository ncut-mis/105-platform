@extends('layouts.index')

@section('content')

    <section class="testimonials2 cid-rpAdd4sLfp mbr-fullscreen" id="testimonials2-n">

        <div class="container">
            <div class="media-container-row">

                <div class="mbr-figure pr-lg-5 col-md-6" style="margin-top:90px;">
                    <img src="{{'/img/person/20190505.jpg'}}">
                </div>

                    <div class="media-content px-3 align-self-center mbr-white py-2  col-md-3">
                        <form action="/personal/{{$member->id}}" method="POST" role="form">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
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
                        <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                            name：
                            <div>
                                <input name="name" class="form-control" placeholder="請輸入姓名" value="{{$member->name}}" required>
                            </div>
                        </p>
                        <p class="mbr-author-desc mbr-fonts-style display-7">
                            {{$member->email}}
                        </p>
                            <div class="col-md-4" style="text-align:center">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success">更新</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </section>
@endsection