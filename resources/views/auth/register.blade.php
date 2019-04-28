@extends('layouts.index')

@section('content')
    <section class="cid-rohXKaKjuv mbr-fullscreen mbr-parallax-background" id="header2-1">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

        <div class="container align-center">
            <div class="row justify-content-center">
                <div class="mbr-white col-md-8">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" style="margin-top: 80px">
                        歡迎一起加入我們
                    </h1>
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                        偶像劇女神邵雨薇，私底下是個「硬派女孩」，無論工作或是肌膚保養，都不放過任何細節。
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <div class="media-container-column" data-form-type="formoid">

                            <form class="mbr-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <p class="mbr-white mbr-bold mbr-text pb-3 mbr-fonts-style display-5">
                                    註冊(Register)
                                </p>
                                <div data-for="name">
                                    <div class="form-group row mbr-white">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} px-3 "
                                                   name="name" value="{{ old('name') }}" data-form-field="Name"
                                                   placeholder="Name" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div data-for="email">
                                    <div class="form-group row mbr-white">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} px-3 "
                                                   name="email" value="{{ old('email') }}" data-form-field="Email"
                                                   placeholder="Email" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div data-for="password">
                                    <div class="form-group row mbr-white">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} px-3"
                                                   name="password" data-form-field="Password" placeholder="Password"
                                                   required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div data-for="password-confirm">
                                    <div class="form-group row mbr-white">
                                        <label for="password-confirm"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control px-3"
                                                   name="password_confirmation" data-form-field="Password-Confirm"
                                                   placeholder="Password-Confirm" required>
                                        </div>
                                    </div>
                                </div>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-form btn-success display-4">
                                        <span style="font-weight:bold">
                                            註冊
                                        </span>
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
