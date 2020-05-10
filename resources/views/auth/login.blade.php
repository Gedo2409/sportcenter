@extends('backend.layouts.login')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <div class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-51">
                       Login | Sportcenter
                    </span>

                <div class="panel-body">
                    <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="wrap-input100 validate-input m-b-16{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="wrap-input100 validate-input m-b-16">
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autofocus  placeholder="email">

                                @if ($errors->has('email'))
                                    <span class="focus-input100">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16{{ $errors->has('password') ? ' has-error' : '' }}">
                           {{-- <label for="password" class="col-md-4 control-label">Password</label>--}}

                            <div class="wrap-input100 validate-input m-b-16">
                                <input id="password" type="password" class="input100" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="focus-input100">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-24">
                            <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="ckb1">
                                    <label class="label-checkbox100" for="ckb1">
                                         Remember Me
                                    </label>

                            </div>
                            <div>
                                 <a class="txt1" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>

                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-17">

                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
