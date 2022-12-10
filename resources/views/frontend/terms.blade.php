@extends('frontend.master')
@section('title', 'Term & Condition')
@section('content')

<main id="main">
    <section class="services_section">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-danger">{!!$terms->title!!}</h2>
                <p class="text-justify">{!!$terms->description!!}</p>
            </div>
        </div>
    </section>
</main>
<!-- end of main -->
@endsection
