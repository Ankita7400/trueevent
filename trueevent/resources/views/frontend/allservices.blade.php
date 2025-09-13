
@extends('frontend.layout.main')
@section('main-container')


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>All Services</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">All Service</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      
       <div class="container">

        <div class="row gy-4">
    @foreach($categories as $category)
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <a href="{{ route('category.show', $category->slug) }}">
               
                  <img src="{{asset('public/'.$category->image ?: 'public/backend/assets/img/default.png') }}" alt="" class="img-fluid">
                  </a>
              </div>
               </div>
                     <a href="{{ route('category.show', $category->slug) }}">
              <h3 align="center"style="margin-top:15px;font-size:30px;"> {{ $category->name }}</h3>
              </a>
              
           
          </div><!-- End Card Item -->

             @endforeach

          

        </div>
 {{-- <div class="mt-4">
   {{ $categories->links() }}
<!-- Laravel pagination -->
  </div> --}}
      </div>

    </section><!-- /Pricing Section -->


  </main>

@endsection
