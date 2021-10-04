@extends('layouts.app')

@section('content')
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
   <div class="container">
    <div class="row">
     <div class="col-md-12">
         <div class="breadcrumbs">
            <h2>REGISTER</h2> 
            <ul class="breadcrumbs-list">
              <li>
                  <a title="Return to Home" href="{{route('index')}}">Home</a>
              </li>
              <li>Register</li>
          </ul>
      </div>
  </div>
</div>
</div>
</div> 
<!-- Breadcrumbs Area Start --> 
<div class="login-account section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-sm-12">
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="heading-title">
                    CREATE AN ACCOUNT
                </h2>

                <p class="form-row">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="FullName" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>


                <p class="form-row">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </p>


                <p class="form-row">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </p>

                <p class="form-row">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirm">

                </p>
                <p class="form-row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" >

                        <label class="form-check-label" for="remember">
                            Tôi đồng ý các Chính sách của Trang web 
                        </label>
                    </div>
                </p>
                <div class="submit">                    
                    <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                        <span>
                            <i class="fa fa-user left"></i>
                            Register
                        </span>
                    </button>
                </div>  
            </form>
        </div>
    </div>
</div>
</div>
@endsection
