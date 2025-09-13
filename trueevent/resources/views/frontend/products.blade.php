
@extends('frontend.layout.main')
@section('main-container')


{{-- <div class="container">
    <h2>{{ $subcategory->name }} - Products</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ asset($product->image) }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">₹{{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Pricing</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Pricing</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      
       <div class="container">

        <div class="row gy-4">
     @foreach($products as $product)
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('public/'.$product ->image ?: 'public/backend/assets/img/default.png') }}" alt="" class="img-fluid">
              </div>
               </div>
              <h3 align="center"style="margin-top:15px;font-size:30px;"> {{ $product->name }}</h3>
               <p>₹ {{ $product->price }}</p> 
           
          </div><!-- End Card Item -->

             @endforeach

          

        </div>

      </div>

    </section><!-- /Pricing Section -->


  </main>

@endsection
