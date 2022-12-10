@extends('frontend.master')
@section('title', 'Service')
@section('content')

<main id="main">
   <!-- -----------services-section start-------------- -->
   <section class="services_section">
    <div class="container">
        <div class="services_title">
            <h2>Services</h2>
            <h3>Our Core <span>Services</span></h3>
            <p>we brought to you best service ever to send your money ,access your money anywhere easily.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon4.png')}}" alt="">
                    </div>
                    <h4><a href="#">Real Time Money Tracking</a></h4>
                    <p>track your money easily and use calculator to calculate fast</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon5.png')}}" alt="">
                    </div>
                    <h4><a href="#">Mobile Banking &amp; Payment</a></h4>
                    <p>Send money directly to a mobile money account</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="h-100 icon_card">
                    <div class="service_icon">
                        <img src="{{asset('frontend/assets/img/icon6.png')}}" alt="">
                    </div>
                    <h4><a href="#">Cash Pickup</a></h4>
                    <p>Send money to over 250,000
                        pick-up locations </p>
                </div>
            </div>
        </div>
    </div>
</section>
  </main><!-- End #main -->
@endsection
