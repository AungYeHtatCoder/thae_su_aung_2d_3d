@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 60px; height: 100vh">
 <div class="col-lg-4 mx-auto" style="background-color: #fff1d0">
  <h6 class="text-center fw-bold mt-4 fs-5" style="color: #dd1c1a">
   ကျွန်ုပ်တို့ကို ဆက်သွယ်ရန်
  </h6>
  <div class="row mt-5 px-2">
   <div class="col-6">
    <div class="telegram">
     <i class="fa-brands fa-telegram"></i>
     <p>telegram</p>
     <small class="d-block fw-bold fs-6">091234567</small>
    </div>
   </div>
   <div class="col-6">
    <div class="viber">
     <i class="fa-brands fa-viber"></i>
     <p>Viber</p>
     <small class="d-block fw-bold fs-6">091234567</small>
    </div>
   </div>
  </div>
  <div class="row mt-5">
   <div class="col-6">
    <div class="facebook">
     <i class="fa-brands fa-facebook"></i>
     <p>Facebook</p>
     <small class="d-block fw-bold fs-6">delight</small>
    </div>
   </div>
   <div class="col-6">
    <div class="phone">
     <i class="fa-solid fa-phone"></i>
     <p>Phone</p>
     <small class="d-block fw-bold fs-6">091234567</small>
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