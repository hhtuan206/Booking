@extends('layouts.app')

@section('content') 
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
           <div class="breadcrumbs">
            <h2>LOGIN</h2> 
            <ul class="breadcrumbs-list">
              <li>
                  <a title="Return to Home" href="index.html">Home</a>
              </li>
              <li>Login</li>
          </ul>
      </div>
  </div>
</div>
</div>
</div> 
<!-- Breadcrumbs Area Start --> 
<!-- Loging Area Start -->
<div class="login-account section-padding">
 <div class="container">
    <div class="row text-center  ">
        <div class="offset-md-3 col-md-12 col-sm-12">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="heading-title">
                    Login
                </h2>
                <p class="form-row">
                    <input type="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p class="form-row">
                    <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p class="form-row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </p>
                <p class="lost-password form-group">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif

                </p>
                <div class="form-group">
                    <a class="btn btn-link" href="{{ route('register') }}">
                        Dont't have account?Create one
                    </a>
                </div> 
                <div class="submit">                    
                    <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                        <span>
                            <i class="fa fa-user left"></i>
                            SIGN IN
                        </span>
                    </button>
                </div>                          
            </form>
        </div>
    </div>               
</div>
</div>
<!-- Loging Area End -->
@endsection