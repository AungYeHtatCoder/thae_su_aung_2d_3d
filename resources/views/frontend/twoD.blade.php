@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="height: 100vh">
 <div class="col-lg-4 mx-auto" style="background: #fff1d0; margin-top: 50px">
  <div class="result-section mt- pb-3 mx-auto">
   <span>73</span>
  </div>
  <p class="text-center mt-1" style="color: #dd1c1a">
   Updated: 09-11-2023 4:30:00 PM
  </p>
  <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
  <div class="card py-3 mb-3 shadow">
   <div class="d-flex justify-content-around text-center">
    <div class="">
     <img src="{{ asset('user_app/assets/images/order-history.png') }}" width="50px" height="50px" alt="" />
     <p class="text-primary fw-bold">မှတ်တမ်း</p>
    </div>
    <a class="text-decoration-none" href="{{ url('/twoD-winner') }}">
     <img src="{{ asset('user_app/assets/images/winner.png') }}" width="50px" height="50px" alt="" />
     <p class="text-warning fw-bold">ကံထူးရှင်များ</p>
    </a>
    <div class="">
     <img src="{{ asset('user_app/assets/images/calendar.png') }}" width="50px" height="50px" alt="" />
     <p class="text-dark fw-bold">ပိတ်ရက်</p>
    </div>
   </div>
  </div>
  <hr style="height: 2px; color: #dd1c1a; margin: 10px" />

  <div class="card shadow result-card px-3 py-3">
   <div class="d-flex justify-content-between">
    <p class="fw-bold">10:30 AM</p>
    <a href="{{ url('/twoD-play') }}" class="btn twod-play-btn">ထိုးမည်</a>
   </div>
   <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
   <div class="d-flex justify-content-between">
    <p class="fw-bold">12:00 PM</p>
    <a href="{{ url('/twoD-play') }}" class="btn twod-play-btn">ထိုးမည်</a>
   </div>
   <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
   <div class="d-flex justify-content-between">
    <p class="fw-bold">02:30 PM</p>
    <a href="{{ url('/twoD-play') }}" class="btn twod-play-btn">ထိုးမည်</a>
   </div>
   <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
   <div class="d-flex justify-content-between">
    <p class="fw-bold">04:00 PM</p>
    <a href="{{ url('/twoD-play') }}" class="btn twod-play-btn">ထိုးမည်</a>
   </div>
  </div>
 </div>
</div>

<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection