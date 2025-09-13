@extends('backend.auth.layout.main')
@section('main-container')
<!-- Page Content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-md-8 offset-md-2">

<!-- Register Content -->
<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left" style="margin:auto;">
<img src="{{asset('public/backend/assets/img/bnr.png')}}" class="img-fluid">	
</div>
<div class="col-md-5 col-lg-6 login-right">
<div class="login-header">

</div>

<!-- Register Form -->
<form method="POST" action="{{route('register.store')}}">
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
<input type="text" name="username" class="form-control floating @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus>
<label class="focus-label">Username</label>
@error('username')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group form-focus">
    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
    <label class="focus-label">Email</label>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>

<div class="form-group form-focus">
<input type="text" name="mobile" class="form-control floating @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" required autocomplete="mobile">
<label class="focus-label">Mobile Number</label>
@error('mobile')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group form-focus">
<input type="password" name="password" class="form-control floating @error('password') is-invalid @enderror">
<label class="focus-label">Create Password</label>
@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="text-right">
<a class="forgot-link" href="{{route('login')}}">Already have an account?</a>
</div>

<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
<div class="login-or">
<span class="or-line"></span>

</div>


</form>
<!-- /Register Form -->

</div>
</div>
</div>
<!-- /Register Content -->

</div>
</div>

</div>

</div>		
<!-- /Page Content -->



{{-- <script>
    const password = document.getElementById('password');
    const passwordConfirmation = document.getElementById('password_confirmation');

    const length = document.getElementById('length');
    const uppercase = document.getElementById('uppercase');
    const lowercase = document.getElementById('lowercase');
    const number = document.getElementById('number');
    const special = document.getElementById('special');
    const match = document.getElementById('match');

    password.addEventListener('input', validatePassword);
    passwordConfirmation.addEventListener('input', validatePassword);

    function validatePassword() {
        const value = password.value;
        const confirmValue = passwordConfirmation.value;

        // Password length
        if (value.length >= 8) {
            length.classList.add('valid');
            length.classList.remove('invalid');
        } else {
            length.classList.add('invalid');
            length.classList.remove('valid');
        }

        // Uppercase letters
        if (/[A-Z]/.test(value)) {
            uppercase.classList.add('valid');
            uppercase.classList.remove('invalid');
        } else {
            uppercase.classList.add('invalid');
            uppercase.classList.remove('valid');
        }

        // Lowercase letters
        if (/[a-z]/.test(value)) {
            lowercase.classList.add('valid');
            lowercase.classList.remove('invalid');
        } else {
            lowercase.classList.add('invalid');
            lowercase.classList.remove('valid');
        }

        // Numbers
        if (/\d/.test(value)) {
            number.classList.add('valid');
            number.classList.remove('invalid');
        } else {
            number.classList.add('invalid');
            number.classList.remove('valid');
        }

        // Special characters
        if (/[!@#$%^&*]/.test(value)) {
            special.classList.add('valid');
            special.classList.remove('invalid');
        } else {
            special.classList.add('invalid');
            special.classList.remove('valid');
        }

        // Password match
        if (value && value === confirmValue) {
            match.classList.add('valid');
            match.classList.remove('invalid');
        } else {
            match.classList.add('invalid');
            match.classList.remove('valid');
        }
    }
</script> --}}

@endsection