@extends('layouts.app')

@section('content')
<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 align-self-center">
                <div class="sign-in-from bg-white">
                <img src="{{ asset('public/Fontend/image/agranilogo.svg')}}" alt="">
                    {{-- <h1 class="mb-0">Sign in</h1> --}}
                    <p>Enter your email address and password to access admin panel.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>

                            <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email"> --}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            {{-- <a href="#" class="float-right">Forgot password?</a> --}}
                            <input id="password" type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password"> --}}
                        </div>

                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Sign in</button>
                        </div>

                        {{-- <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2">Don't have an account?

                            @if (Route::has('register'))

                                <a href="{{ route('register') }}">Sign up</a>
                            @endif
                            </span>
                            <ul class="iq-social-media">
                                <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            </ul>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
