@extends('layouts.app')

@section('content')
 
  <link href=" {{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
  <link href=" {{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
  <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page" >
          <div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom">Gold Herbal Care</strong> </h3>
            </div> 


            <div class="panel-body">
            
            <form class="form-horizontal m-t-20" id="form" method="get" id="login_form"  action="{{ url('/dashboard')}}">                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                        <span class="help-block"></span>
                    </div>
                </div>           
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-info btn-block text-uppercase waves-effect waves-light" id="signin">Log In</button>
                    </div>
                </div>

                <!-- <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="#" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div> -->
            </form>             
            </div>   
            </div>                              
        </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/plugins/notifyjs/js/notify.js') }}"></script>
<script src="{{ asset('assets/plugins/notifications/notify-metro.js') }}"></script>
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>


</body>
</html>

@endsection
