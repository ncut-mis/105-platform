@extends('layouts.index')

@section('content')
    <section class="cid-roPyfW0GBB mbr-fullscreen mbr-parallax-background" id="header2-1">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

        <div class="container align-center">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container">
                        <div class="media-container-column" data-form-type="formoid">
                            <form class="mbr-form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <p class="mbr-white mbr-bold mbr-text pb-3 mbr-fonts-style display-5">
                                    <font face="微軟正黑體">會員登入(Login)</font>
                                </p>
                                <div data-for="email">
                                    <div class="form-group">
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} px-3" name="email" value="{{ old('email') }}" data-form-field="Email" placeholder="帳號：" id="email" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div data-for="password">
                                    <div class="form-group">
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} px-3" name="password" data-form-field="Password" placeholder="密碼：" id="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input px-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label mbr-white" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                </div>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary btn-form display-4"><font face="微軟正黑體">登入</font></button>
                                </span>
                                <div class="form-group">
                                    <div class="form-check">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link mbr-white" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
@endsection
