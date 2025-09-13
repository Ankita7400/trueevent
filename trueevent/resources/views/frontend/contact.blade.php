@extends('frontend.layout.main')
@section('main-container')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Visit Us At:</h3>
                <p>Gaurishankar Nagar, A.G. More
Doranda, Ranchi, Jharkhand – 834002</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3> Call or WhatsApp:</h3>
                <p><b>*Primary:*</b> +91 6200272141</p>
                <p><b>*Alternate:* </b>+91 6201931278</p>

              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>trueevents.in@gmail.com</p>
              </div>
            </div><!-- End Info Item -->


            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
             <i class="fa-solid fa-clock"></i>
              <div>
                <h3>Business Hours:</h3>
                <p>Monday – Sunday:<b> *9:00 AM to 9:00 PM*</b></p>
                <p>We’re available on weekends and holidays too!</p>
              </div>
            </div>


          </div>

          <div class="col-lg-8">
{{-- 
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}


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


            <form action="{{route('contact.store')}}" method="post" class="php-email-form" >
               @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                   <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name *"  value="{{ old('name') }}">
                   @error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                </div>

                <div class="col-md-6 ">
                    <input type="number" class="form-control @error('number') is-invalid @enderror" name="number" placeholder="Mobile No. *"  value="{{ old('number') }}">
                    @error('number')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                </div>

                <div class="col-md-6">
                
                    <select name="event" class="form-control" >
                    <option value="">Select Event</option>
                    <option value="Birthday Decoration" {{ old('event') == 'Birthday Decoration' ? 'selected' : '' }}>Birthday Decoration</option>
                    <option value="Wedding Decoration" {{ old('event') == 'Wedding Decoration' ? 'selected' : '' }}>Wedding Decoration</option>
                    <option value="Pre Wedding Photography" {{ old('event') == 'Pre Wedding Photography' ? 'selected' : '' }}>Pre Wedding Photography</option>
                    <option value="Wedding Photography" {{ old('event') == 'Wedding Photography' ? 'selected' : '' }}>Wedding Photography</option>
                    <option value="Pre birthday Photography" {{ old('event') == 'Pre birthday Photography' ? 'selected' : '' }}>Pre birthday Photography</option>
                    <option value="Birthday Photography" {{ old('event') == 'Birthday Photography' ? 'selected' : '' }}>Birthday Photography</option>
                    <option value="Maternity Photography" {{ old('event') == 'Maternity Photography' ? 'selected' : '' }}>Maternity Photography</option>
                </select>
                </div>

                <div class="col-md-6">
                         <input type="date" class="form-control" name="eventdate" placeholder="Select Date For Event"  value="{{ old('eventdate') }}">
                </div>
                 <div class="col-md-12">
                      <textarea class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address *" >{{ old('address *') }}</textarea>
                      @error('address')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                </div>
{{-- 
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div> --}}

        <!-- ✅ Centered Submit Button -->
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary px-4">Send Message</button>
        </div>
              </div>
                
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
  @endsection