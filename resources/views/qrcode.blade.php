@extends('layouts.index')

@section('content')

    <section class="counters2 counters mbr-fullscreen cid-roUkerX0B9" id="counters2-d">
        <div class="container ">
            <div class="media-container-row">
                <div class="media-block" style="width: 50%;margin-top: 100px" >

                    <div class="mbr-figure align-center">

                        {!! QrCode::size(250)->generate('http://localhost:8000/member/' . Auth::user()->id. '/verify/'. Auth::user()->verification_code ); !!}
                        <p>http://localhost:8000/member/{{ Auth::user()->id }}/verify/{{ Auth::user()->verification_code }}</p>

                    </div>

                    <h3 class="mbr-section-title mbr-bold pt-5 align-center mbr-fonts-style display-5">
                        餐廳讀取你的行動條碼後，即可確認你的會員身分。
                    </h3>
                </div>
            </div>
        </div>
    </section>



@endsection