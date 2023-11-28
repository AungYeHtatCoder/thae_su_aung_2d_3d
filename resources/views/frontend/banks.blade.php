@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 55px">
 <div class="col-lg-4 mx-auto" style="background-color: #fff1d0; height: 100vh">
  <h6 class="mx-auto p-3 mt-3 text-center fw-bold" style="color: #000">
   သင်ငွေလက်ခံမည့်ဘဏ်အကောင့်များ
  </h6>
  <div class="container">
   <div class="row">
    <div class="col-3">
     <img class="w-100 rounded" src="{{ asset('user_app/assets/images/bank/kpay.png') }}" alt="" />
    </div>
    <div class="col-3">
     <img class="w-100 rounded" src="{{ asset('user_app/assets/images/bank/wpay.png') }}" alt="" />
    </div>
    <div class="col-3">
     <img class="w-100 rounded" src="{{ asset('user_app/assets/images/bank/cbpay.png') }}" alt="" />
    </div>
    <div class="col-3">
     <img class="w-100 rounded" src="{{ asset('user_app/assets/images/bank/aya_logo.png') }}" alt="" />
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