@extends('frontend.master')
@section('title', 'Privacy & Policy')
@section('content')

<main id="main">
   <!-- -----------services-section start-------------- -->
   <section class="services_section">
    <div class="container">
        <div class="row">
            <h2 class="text-center text-danger">{!!$policy->title!!}</h2>
            <p class="text-justify">{!!$policy->description!!}</p>
        </div>       
    </div>
</section>
  </main><!-- End #main -->
@endsection
