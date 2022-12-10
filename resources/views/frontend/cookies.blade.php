@extends('frontend.master')
@section('title', 'Cookies & Policy')
@section('content')

<main id="main">
   <!-- -----------services-section start-------------- -->
   <section class="services_section">
    <div class="container">
        <div class="row">
            <h2 class="text-center text-danger">{!!$cookies->title!!}</h2>
             <p class="text-justify">{!!$cookies->description!!}</p>
        </div>       
    </div>
</section>
  </main><!-- End #main -->
@endsection
