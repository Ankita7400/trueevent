
@extends('frontend.layout.main')
@section('main-container')


{{-- <div class="container">
    <h2>{{ $category->name }} - SubCategories</h2>
    <div class="row">
        @foreach($subcategories as $subcategory)
            <div class="col-md-3">
                <a href="{{ route('subcategory.show', $subcategory->slug) }}">
                    <div class="card mb-3">
                        <img src="{{ asset($subcategory->image) }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subcategory->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div> --}}



  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{asset('public/frontend/assets/img/page-title-bg.jpg')}});">
      <div class="container position-relative">
        <h1>{{ $category->name }}</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">{{ $category->name }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        {{-- <span>Pricing</span> --}}
        <h3 style="background-color: #6b8271;color:#ffffff;padding:10px;border-radius: 10px;"> Theme Based on {{ $category->name }}</h3>
        
      </div><!-- End Section Title -->

       <div class="container">

        <div class="row gy-4">

                @foreach($subcategories as $subcategory)
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100" >
            <div class="card">
              <div class="card-img" >
                <a href="{{ route('subcategory.show', $subcategory->slug) }}">
                <img src="{{asset('public/'.$subcategory->image ?: 'public/backend/assets/img/default.png') }}" alt="" class="img-fluid" >
                </a>
              </div>
               </div>
               <a href="{{ route('subcategory.show', $subcategory->slug) }}">
              <h3 align="center"style="margin-top:15px;font-size:30px;">{{ $subcategory->name }}</h3>
              </a>
              <!-- <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p> -->
           
          </div><!-- End Card Item -->

             @endforeach




        </div>

      </div>

    </section><!-- /Pricing Section -->





{{-- 
     <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Pricing</span>
        <h3 style="background-color: #6b8271;color:#ffffff;padding:10px;border-radius: 10px;">  Wedding Decoration</h3>
        
      </div><!-- End Section Title -->

       <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img.png" alt="" class="img-fluid">
              </div>
               </div>
              <!-- <h3 align="center"style="margin-top:15px;font-size:30px;"> Pokemon</h3> -->
              <!-- <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p> -->
           
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img2.png" alt="" class="img-fluid">
              </div>
              </div>
              <!-- <h3 align="center"style="margin-top:15px;font-size:30px;"><a href="#" class="stretched-link">Teddy</a></h3> -->
              <!-- <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p> -->
            
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img3.png" alt="" class="img-fluid">
              </div>
              </div>
              <!-- <h3 align="center"style="margin-top:15px;font-size:30px;"><a href="#" class="stretched-link"> Krishna</a></h3> -->
              <!-- <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p> -->
            
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img.png" alt="" class="img-fluid">
              </div>
              </div>
              <!-- <h3><a href="#" class="stretched-link">Trucking</a></h3>
              <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p> -->
            
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img2.png" alt="" class="img-fluid">
              </div>
              </div>
              <!-- <h3>Packaging</h3>
              <p>Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur maiores beatae consequatur magni voluptates</p> -->
            
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img3.png" alt="" class="img-fluid">
              </div>
              </div>
              <!-- <h3><a href="#" class="stretched-link">Warehousing</a></h3>
              <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam aut nostrum unde et qui est non quo nulla</p> -->
            
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->
 --}}
    <h3 align="center"><b> We are currently working in these cities</b></h3>

<br>
    <div class="mb-4" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
          <iframe style="border:0; width: 30%; height: 270px; " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
        </div><!-- End Google Maps -->


        <div class="col-lg-12">
           <div style="padding:60px;">
               <h3 align="center" style="background-color: #6b8271;color:#ffffff;padding:10px;border-radius: 10px;">  Please fill in your details accurately and completely</h3>

                <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" >
                
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
           <button class="btn btn-primary" style="background-color: #6b8271; padding:10px 30px;">Send Message</button>
        </div>
              </div>
            </form>
          </div>
          </div>
         
          <!-- End Contact Form -->
          
          
          <section id="faq" class="faq section">

          <div class="container section-title" data-aos="fade-up">
        <span>Frequently Asked Questions</span>
        <h2><b>Frequently Asked Questions</b></h2>
        <p> Here are some common questions about our services atb Tru Event</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What services do you offer ?</h3>
                <div class="faq-content">
                  <p>
 At Tru Events, we provide a range of ser4vices including decorationb,photography,and entertainment activities.whether its a wedding birthday 
party ,or anniversary we ensure every detail is perfect.our goal is to create unfortable experience tailoredf to your needs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> How can I book?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Do you offer packages?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What is your pricing?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Can I see reviews</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section>


    

  </main>


@endsection
