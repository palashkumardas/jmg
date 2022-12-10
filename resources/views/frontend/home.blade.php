@extends('frontend.master')
@section('title', 'Home')
@section('content')

@include('frontend.include.hero')

<main id="main">
    <!-- ------------about-section start------------- -->
    <section class="about_section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6 col-12">
                    <div class="about_image">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{asset('frontend/assets/img/low .jpg')}}" alt="" data-aos="fade-left">
                            <img class="ms-3" src="{{asset('frontend/assets/img/fast payment.jpg')}}" alt="" data-aos="fade-right">
                        </div>
                        <img class="d-block  m-auto" src="{{asset('frontend/assets/img/confident-business-team-with-leader_1098-3228.jpg')}}" alt="" data-aos="fade-up">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="about_content">
                        <div class="d-flex align-items-center" data-aos="fade-left">
                            <div class="about_icon">
                                <img src="{{asset('frontend/assets/img/icon1.png')}}" alt="">
                            </div>
                            <div>
                            <h3>Low Transaction Fee</h3>
                            <p>Low transaction fees and reliable</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-5" data-aos="fade-left">
                            <div class="about_icon">
                                <img src="{{asset('frontend/assets/img/ico2.png')}}" alt="">
                            </div>
                            <div>
                            <h3>Fast Payments</h3>
                            <p>Fastest payments method</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" data-aos="fade-left">
                            <div class="about_icon">
                                <img src="{{asset('frontend/assets/img/icon3.png')}}" alt="">
                            </div>
                            <div>
                            <h3>Dedicated Team</h3>
                            <p>Dedicated team to give you best support when you need</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <!-- -----------about-us start------------ -->
   <section class="about_us">
        <div class="container">
            <div class="about_us_content" data-aos="fade-up">
                <button>about us</button>
                {!! $about->description !!}
                {{-- <p>Our aim is to provide fast and secure money transfers with online as well as shop to Bangladesh.</p>
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
            <img src="{{asset('frontend/assets/img/about.jpg')}}" alt="" data-aos="fade-up">
        </div>
   </section>
  <!--end of total about section-->

  <!-- -----------services-section start-------------- -->
  <section class="services_section">
    <div class="container">
        <div class="services_title" data-aos="fade-up">
            <h2>Services</h2>
            <h3>Our Core <span>Services</span></h3>
            <p>we brought to you best service ever to send your money ,access your money anywhere easily.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-left">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon4.png')}}" alt="">
                    </div>
                    <h4><a href="https://worldwide.jmgremit.co.uk/">Real Time Money Tracking</a></h4>
                    <p>track your money easily and use calculator to calculate fast</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-left">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon5.png')}}" alt="">
                    </div>
                    <h4><a href="https://worldwide.jmgremit.co.uk/">Mobile Banking &amp; Payment</a></h4>
                    <p>Send money directly to a mobile money account</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-left">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon6.png')}}" alt="">
                    </div>
                    <h4><a href="https://worldwide.jmgremit.co.uk/">Cash Pickup</a></h4>
                    <p>Send money to over 250,000
                        pick-up locations </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of service section-->
 <!-- ---------mobile-app-section-start-------- -->
 <section class="mobile_app_section" data-aos="fade-right">
    <div class="container">
        <div class="row gx-4 gy-5 align-items-center">
            <div class="col-md-6 col-12 order-2 order-md-1" >
                <div class="mobile_content">
                    <h3>Mobile app</h3>
                <p class="mt-4 mb-4">We developed a mobile app that will allow you to send money in the comfort of your own home. 
                    </p>
                    <p>
                        The interface is user-friendly which will allow you to navigate the features with ease. The goal is to help you execute tasks or enjoy our services remotely and conveniently.</p>
                <div class="mt-5">
                    <img class="img-fluid me-5" src="{{asset('frontend/assets/img/playstore.png')}}" alt="">
                    <img class="img-fluid mt-3 mt-sm-0" src="{{asset('frontend/assets/img/apple.png')}}" alt="">
                </div>
                </div>
            </div>
            <div class="col-md-6 col-12 tex-start order-1 order-md-2">
               <div class="mobile_img">
                <img class="d-block m-auto" src="{{asset('frontend/assets/img/Mobile.png')}}" alt="">
               </div>
            </div>
        </div>
    </div>
</section>
<!-- -----------website-section---------- -->
<section class="website_section" data-aos="fade-up">
<div class="container">
    <div class="row gx-4 gy-5 align-items-center">
        <div class="col-lg-5 col-md-6 col-12 tex-start ">
            <div class="laptop_img">
             <img class=" float-md-start d-block m-auto " src="{{asset('frontend/assets/img/Laptop.png')}}" alt="">
            </div>
            </div>
        <div class=" col-lg-7 col-md-6 pe-0 pe-lg-5 pe-md-0">
            <div class="mobile_content">
                <h3>Website</h3>
            <p class="mt-4">We created an interactive and dynamic website where you can make transactions locally and internationally. We also customize the website design to cater to your specific needs and requirements. The aim is to fuse aesthetics and functionality in one.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ------------shop-section start----------- -->
<section class="mobile_app_section" data-aos="fade-left">
<div class="container">
    <div class="row gx-4 gy-5 align-items-center mt-5">
        <div class="col-md-6 col-12 order-2 order-md-1">
          <div class="mobile_content">
            <h3>Shop</h3>
            <p class="mb-4 mt-4">Some customers might not be comfortable making the transaction themselves,so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time.</p>
            <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
          </div>
        </div>
        <div class="col-md-6 col-12 text-md-end tex-start order-1 order-md-2">
            <img class="img-fluid " src="{{asset('frontend/assets/img/shop.png')}}" alt="">
        </div>
    </div>
</div>
</section>
<!-- ------------carusel-section-------- -->
<section class="carusel_section" data-aos="fade-up">
    <div class="container">
        <div id="carusel" class="owl-carousel owl-theme text-center home_review">
            <div class="item">
              <img src="{{asset('frontend/assets/img/testimonials-1.jpg')}}" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p><i class="fas fa-quote-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="fas fa-quote-right"></i>
              </p>
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/img/testimonials-2.jpg')}}" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p><i class="fas fa-quote-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="fas fa-quote-right"></i>
              </p>
              </p>
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/img/testimonials-2.jpg')}}" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p><i class="fas fa-quote-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="fas fa-quote-right"></i>
              </p>
              </p>
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/img/testimonials-3.jpg')}}" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p><i class="fas fa-quote-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="fas fa-quote-right"></i>
              </p>
            </div>
          </div>
    </div>
</section>
</main><!-- End #main -->
@endsection
