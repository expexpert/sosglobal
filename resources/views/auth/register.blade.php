@extends('layouts.backendApp')
@section('content')

<div class="nk-block nk-block-middle nk-auth-body wide-xs">
    <div class="brand-logo pb-4 text-center">
        <a href="#" class="logo-link">
            <img class="logo-img" src="{{ url('/') }}/public/images/logo.png" srcset="{{ url('/') }}/public/images/logo.png" alt="logo">                            </a>
        </div>
        <div class="card">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <!-- <h4 class="nk-block-title">Register for your 7 Day Free Trial</h4> -->
                        <h4 class="nk-block-title text-center">Registration</h4>
                        <div class="nk-block-des text-center">
                            <p>Create New Account</p>
                        </div>
                    </div>
                </div>
                <form method="POST" id="" action="{{ url('do-register') }}" class="uk-grid uk-form">
                    @csrf
                  
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <div class="form-control-wrap">
                           <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

                           @error('name')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



            <input type="hidden" name="plan_name" value="1">

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
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
                <label class="form-label" for="password">Passcode</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <!-- <em class="passcode-icon icon-show icon ni ni-eye"></em> -->
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>

                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter your passcode" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Confirm Passcode</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <!-- <em class="passcode-icon icon-show icon ni ni-eye"></em> -->
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>

                    <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirm passcode" name="password_confirmation" required autocomplete="new-password">

                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox"> I agree <a href="#" target="_blank">Privacy Policy</a> &amp; <a href="http://test.io/terms-conditions/" target="_blank"> Terms and Conditions.</a></label>
                </div>
            </div>

         

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
        </form>

        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ url('login') }}"><strong>Sign in instead</strong></a>
        </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(function(){

                          $(document).on("submit","#handleRegisterAjax",function(e){
                              e.preventDefault();
                              $.ajaxSetup({
                                  headers: {
                                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  }
                              });

                              $.ajax({

                                type:"POST",
                                url:"{{ url('do-register') }}",
                                data:$(this).serialize(),
                                dataType: 'json',
                                success: function(data){
                                    console.log(data);
                                    window.location.href = "{{ url('admin') }}";

                                },
                                error: function(xhr){
                                    console.log(xhr);
                                    $('#validation-errors').html('');
                                    $.each(xhr.responseJSON.errors, function(key,value) {
                                       $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                                   }); 

                                }
                            });
                              return false;
                          });

                      });
                  </script>

                  @endsection