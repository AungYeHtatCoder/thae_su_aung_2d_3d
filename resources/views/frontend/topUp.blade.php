@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 55px; height: 100vh">
 <div class="col-lg-4 mx-auto" style="background: #fff1d0">
  <div class="container mt-3">
   <div class="row">
    <div class="col-12 deposit">
     <p class="mt-3">ငွေဖြည့်ပါ</p>
    </div>
   </div>
  </div>
  <div class="container shadow balance-card mt-3">
   <div class="d-flex justify-content-between pt-3">
    <div class="balance-text">
     <p>လက်ကျန်ငွေ</p>
     <p>0 <span class="text-danger">ကျပ်</span></p>
    </div>
    <div>
     <a href="{{ url('/wallet') }}" class="btn btn-choose">Back</a>
    </div>
   </div>
   <div class="banks-section">
    <div class="card bank ps-2">
     <a href="{{ url('/topUp-confirm') }}"><img src="{{ asset('user_app/assets/images/bank/kb1.png') }}" alt="" /> KBZ Bank
      <i class="fa-solid fa-chevron-right float-end mt-3 pe-2"></i>
     </a>
    </div>
    <div class="card bank ps-2 mt-2">
     <a href="{{ url('/topUp-confirm') }}"><img src="{{ asset('user_app/assets/images/bank/cbpay.png') }}" alt="" /> CB Bank
      <i class="fa-solid fa-chevron-right float-end mt-3 pe-2"></i>
     </a>
    </div>
    <div class="card bank ps-2 mt-2">
     <a href="{{ url('/topUp-confirm') }}"><img src="{{ asset('user_app/assets/images/bank/wpay.png') }}" alt="" /> Wave Bank
      <i class="fa-solid fa-chevron-right float-end mt-3 pe-2"></i>
     </a>
    </div>
    <div class="card bank ps-2 mt-2">
     <a href="{{ url('/topUp-confirm') }}"><img src="{{ asset('user_app/assets/images/bank/aya_logo.png') }}" alt="" /> AYA
      Bank
      <i class="fa-solid fa-chevron-right float-end mt-3 pe-2"></i>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection