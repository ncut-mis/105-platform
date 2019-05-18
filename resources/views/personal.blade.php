@extends('layouts.index')

@section('content')


    <section class="testimonials2 cid-rpAdd4sLfp mbr-fullscreen" id="testimonials2-n">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure pr-lg-5 col-md-6" style="margin-top:90px;">
                    <img src="{{'/img/person/20190505.jpg'}}">
                </div>
                @foreach($member as $mb)
                <div class="media-content px-3 align-self-center mbr-white py-2  col-md-6">
                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                       birth：{{$mb->birthday}}<br>
                        phone：{{$mb->phone}}<br>
                        address：{{$mb->address}}
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                        {{$mb->name}}
                    </p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                        {{$mb->email}}
                    </p>
                     <p class="mbr-author-desc mbr-fonts-style display-7">
                        個人驗證碼：{{$mb->token}}
                    </p>
                    <div class="mbr-section-btn text-center pt-2">
                        <a href="{{route('personal.modi',$mb->id)}}" class="btn btn-primary display-4">修改個人資料</a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection