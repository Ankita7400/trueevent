
@extends('frontend.layout.main')
@section('main-container')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>About</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>


    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('public/frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us - Tru Events</h3><br>
            <p>
             Welcome to *Tru Events*, your one-stop destination for unforgettable celebrations and seamless event experiences.

             <br><br><br>

               Founded with a passion for creativity and a commitment to excellence, Tru Events specializes in *birthday decorations, **wedding setups, **professional photography, and **fun-filled entertainment activities* for all age groups. From elegant floral designs to vibrant balloon themes, we turn your vision into reality with style and flair.
            </p>
            <!-- <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul> -->
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <h2> What We Do:</h2>
        

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('public/frontend/assets/img/img.png')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Birthday Decoration</h4>
                
                <p>
                   From dreamy kids’ parties to milestone birthdays, we create personalized themes, stunning backdrops, and magical moments that make every celebration unique.
                </p>
                
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('public/frontend/assets/img/img2.png')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Wedding Decoration</h4>
               
                <p>
                  Whether it's a grand wedding or an intimate ceremony, we design elegant and culturally rich wedding decor that reflects your style and love story.
                </p>
                
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{asset('public/frontend/assets/img/img3.png')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Photography</h4>
                
                <p>
                  Our professional photographers capture candid emotions and timeless memories with creativity and precision.
                </p>
                
              </div>
            </div>
          </div><!-- End Team Member -->


           <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{asset('public/frontend/assets/img/img.png')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Entertainment & Extra Activities</h4>
                
                <p>
                  Elevate your event with our<b> *live music performances, **magicians, **interactive games, and crowd-favorite attractions like **balloon gun shooting, **tattoo art*,</b> and more!
                </p>
                
              </div>
            </div>
          </div>


        </div>

      </div>

    </section><!-- /Team Section -->

    
    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <h2>Why Choose Tru Events?</h2>
        
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" >
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Creative & Customized Decor</h3>
                
                
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Experienced Event Coordinators</h3>
               
                
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Quality Props & Materials</h3>
                
               
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Full-Service Planning & Execution</h3>
                <div class="faq-content">
                  
                </div>
                
              </div><!-- End Faq item-->

              <div class="faq-item" >
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>On-time Delivery & Professional Support</h3>
                
                <!-- <i class="faq-toggle bi bi-chevron-right"></i> -->
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq Section -->




     <!-- Section Title -->
     

      <div class="container">

        <div class="row">
          <p >At Tru Events, we believe in celebrating life’s special moments with <b>*joy, beauty, and a touch of magic. Whether you're planning a birthday bash, a dreamy wedding, or a family function full of laughter and surprises, we are here to make it **truly unforgettable*.</b><br>

       <center>Let’s create your next celebration — the *Tru way!*</center></p>


          

        </div>

      </div>

    </section><!-- /Team Section -->

    
  </main>
  @endsection
