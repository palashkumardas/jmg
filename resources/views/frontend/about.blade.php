@extends('frontend.master')
@section('title', 'About Us')
@section('content')

<main id="main">
  <!-- -----------about-us start------------ -->
  <section class="about_us">
    <div class="container">
        <div class="about_us_content">
            <button>about us</button>
             {!!$about->description!!} 

           {{--  <p>Our aim is to provide fast and secure money transfers with online as well as shop to Bangladesh.</p>
            <p>Our aim is to provide fast and secure money transfers with online as well as shop to Bangladesh.</p>
            <p>We ensure customer privacy and we are regulated FCA & MLA to secure every single transaction.</p>
            <p>As a technology equipped era we are introducing mobile apps to transfer money by seating home in peace with good rates and low fees.   
            </p> --}}
        </div>
    </div>
</section>
 <!-- -----------abou-image-section------------- -->
 <section class="about_image_section">
  <div class="container">
      <img src="{{asset('frontend/assets/img/about.jpg')}}" alt="">
  </div>
</section>

  </main><!-- End #main -->
@endsection
