@extends('backend.auth.layout.main')
@section('main-container')
<!-- Page Content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-md-8 offset-md-2">

<!-- Login Tab Content -->
<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left " style="margin:auto;">
<img src="{{asset('public/backend/assets/img/bnr.png')}}" class="img-fluid" alt="Login">	
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
      <!-- Display Success Message -->
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

@if (session('danger'))
<div class="alert alert-danger">
    {{ session('danger') }}
</div>
@endif
<h3>Login <span></span></h3>
</div>
<form action="{{route('store.login')}}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group form-focus">
<input type="text" class="form-control floating  @error('email_or_username') is-invalid @enderror" name="email_or_username">
<label class="focus-label">Email or Username</label>

@error('email_or_username')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>


<div class="form-group form-focus">
<input type="password" class="form-control floating @error('password') is-invalid @enderror" name="password">
<label class="focus-label">Password</label>

@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="text-right">
<a class="forgot-link" href="#">Forgot Password ?</a>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="text-center dont-have">Don’t have an account? <a href="#">Register</a></div>
</form>
</div>
</div>
</div>
<!-- /Login Tab Content -->

</div>
</div>

</div>

</div>		
<!-- /Page Content -->
@endsection