@php $contact = App\Models\Contact::first(); 
@endphp

  <!-- -------header-top------ -->
  <section class="header_top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
           <div class="d-flex align-items-center">
            <div class="d-flex align-items-center me-3">
                <p><i class="far fa-envelope top_address_icon"></i>{{ $contact->email_two }}</p>
            </div>
            <div class="d-flex align-items-center">
                <p><i class="fas fa-mobile-alt top_address_icon"></i>{{ $contact->phone_one }}</p>
            </div>
           </div>
           <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ $contact->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{ $contact->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $contact->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{ $contact->youtube }}" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="{{ $contact->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
           </div>
        </div>
    </div>
</section>
  <!-- -------------Header-section------------------- -->
  <section class="header-section sticky-top">
    <nav class="navbar navbar-expand-lg  bg-light nanbar-light ">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img class="naver_logo" src="{{asset('frontend/assets/img/JMGremit-Logo.png')}}" alt=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/aboutus')}}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/service')}}" tabindex="-1" aria-disabled="true">service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/contactus')}}" tabindex="-1" aria-disabled="true">contact</a>
                    </li>
                    <a href="https://worldwide.jmgremit.co.uk/" class="btn navebar-btn">Login/Register</a>
                </ul>
            </div>
        </div>
    </nav>
</section>