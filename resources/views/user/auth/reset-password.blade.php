@extends('frontend.main_master')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class='active'>Reset Password</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Reset Password</h4>
                        <p class="">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>
                        <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('user.password.store') }}">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="email">{{ __('Email Address') }} <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input" name="email"
                                    id="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">{{ __('Password') }} <span>*</span></label>
                                <input type="password" class="form-control unicase-form-control text-input" name="password" id="password" required autocomplete="new-password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">{{ __('Confirm Password') }} <span>*</span></label>
                                <input type="password" class="form-control unicase-form-control text-input" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" >
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="btn-upper btn btn-primary checkout-page-button">{{ __('Reset Password') }}</button>
                        </form>
                    </div>
                    <!-- Sign-in -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('frontend.inc.brands')
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
