@extends('backend.layout.main')
@section('main-container')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>My Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">profile</li>
          <li class="breadcrumb-item active">my profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">My Profile</h5>

              <!-- General Form Elements -->
              <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name <span style="color:red;">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                    
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email <span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required>

                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                  </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">New Password <span style="color:red;">*</span></label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Confirm Password <span style="color:red;">*</span></label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </div>

              </form><!-- End Profile Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection
