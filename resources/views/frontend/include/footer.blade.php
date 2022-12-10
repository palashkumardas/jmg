@php $contact = App\Models\Contact::first(); @endphp

<footer id="footer" class="footer mt-0">
    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-8 col-12 pe-md-5 pe-0">
            <div class="footer-info footer-newsletter">
              <!-- <h3>Razikeen</h3> -->
              <a href="{{url('/')}}"><img src="{{asset('frontend/assets/img/JMGremit-White-Logo.png')}}" alt="JMG" class="img-fluid" width="150"></a><br><br>
              {{-- <p style="padding-left:7px">
                "JMG Cargo & Travel Limited, a company incorporated in England with registered number 05576500 whose registered address is at 8 Fordham Street, London, United Kingdom, E11HS is authorised by the Financial Conduct Authority (“FCA”) under Worldwide west 2 east services limited, trading as WORLDWIDE SERVICES (The Principal), with registered number 07684314 whose address is at 92a Plumstead High Street, London, England, SE18 1SL, FRN 563795, the Payment Services Regulations 2009 (SI 2009 No. 209) (the “Regulations”) for the provision of payment services, with FCA register number 981345 as a PSD agent." --}}
                {{-- {{ $contact->address }}<br><br>
                <strong>Phone:</strong> <a href="tel:{{ $contact->phone_one }}" style="color: #fff;">{{ $contact->phone_one }}</a><br>
                <strong>Email:</strong> <a href="mailto:{{ $contact->email_one }}" style="color: #fff;">{{ $contact->email_one }}</a><br> --}}
                {{-- JMG Remit, a company incorporated in England with registered number 05576500 whose registered address is at 8 Fordham Street, London, E11HS is authorised by the Financial Conduct Authority (“FCA”) under the Payment Services Regulations 2009 for the provision of payment services with FCA register number 981345. --}}
              {{-- </p> --}}
              <h5>Our Newsletter</h5>
              <form action="#" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
              <div class="my-5">
                {{-- <p><img src="frontend/assets/img/payment_method.png" alt="" height="40"></p> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-12 footer-links">
            <h4 style="padding-left: 30%;">Useful Links</h4>
            <ul>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/aboutus')}}">About us</a></li>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/service')}}">Services</a></li>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/termsinfo')}}">Terms of service</a></li>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/policyinfo')}}">Privacy policy</a></li>
              <li style="padding-left: 30%;"><i class="bi bi-chevron-right"></i> <a href="{{url('/cookieinfo')}}">Cookies policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 col-12 footer-links">
            <h4 style="padding-left: 25%;">Our Services</h4>
            <ul>
              <li style="padding-left: 24%;"><i class="bi bi-chevron-right"></i> <a href="#">Bank Transfer</a></li>
              <li style="padding-left: 24%;"><i class="bi bi-chevron-right"></i> <a href="#">Cash Pickup</a></li>
              <li style="padding-left: 24%;"><i class="bi bi-chevron-right"></i> <a href="#">Mobile Wallet</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-12  text-center">
            <strong class="">Powered By</strong>
            <div>
              <p><img src="{{asset('frontend/assets/img/logo-white.png')}}" alt="" class="img-fluid my-3" width="64%" alt="Worldwide"></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 mt-4 pe-md-5 pe-0">
            <P>JMG CARGO & TRAVEL LIMITED, a company incorporated in England with registered number 05576500 at 8 Fordham Street, London, United Kingdom E1 1HS. The JMG Cargo & Travels Limited is registered with FCA as PSD agent, FRN 981345 under Worldwide West 2 East services Limited, trading as WORLDWIDE SERVICES (The Principal). Worldwide Services FRN in FCA register is 563795 with company registration no 07684314 at address, 92A Plumstead High Street London SE18 1SL, United Kingdom.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>JMG remit</span></strong>. All Rights Reserved
          </div>
        </div>
        <div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{{ $contact->twitter }}" class="twitter"  target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="{{ $contact->facebook }}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="{{ $contact->instagram }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="{{ $contact->youtube }}" class="google-plus" target="_blank"><i class="bi bi-youtube"></i></a>
          <a href="{{ $contact->linkedin }}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


