@extends('layouts.backendApp')
@section('content')

                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="html/index.html" class="logo-link">
<img class="logo-img" src="{{ url('/') }}/public/images/logo.png" srcset="{{ url('/') }}/public/images/logo.png" alt="logo">                      </a>
                  </div>
                  <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">{{ __('Reset Password') }}</h4>
                                <div class="nk-block-des">
                                    <p>Forgot your password ?</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}" class="uk-grid uk-form">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="default-01">{{ __('E-Mail Address') }}</label>
                                </div>
                                <div class="form-control-wrap">
                                    


                                   <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                  
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </form>
    <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ url('login') }}"><strong>Sign in instead</strong></a>
                                </div>
                    </div>
                   <!--  <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div>
                    <ul class="nav justify-center gx-4">
                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
       
@endsection