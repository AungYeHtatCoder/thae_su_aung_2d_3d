@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 55px">
 <div class="col-lg-4 mx-auto" style="background-color: #fff1d0; height: 100vh">
  <div class="card py-3 mt-4 shadow">
   <div class="d-flex text-warning ps-3">
    <img src="https://www.svgrepo.com/download/295402/user-profile.svg" width="50px" height="50px" />
    <p class="d-block ms-2">
     UserName <span class="d-block text-danger">0 Ks</span>
    </p>
   </div>
   <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
   <div class="d-flex justify-content-around">
    <a href="{{ url('/topUp') }}" class="text-decoration-none">
     <img src="{{ asset('user_app/assets/images/loss.png') }}" width="50px" height="50px" alt="" />
     <p class="text-success fw-bold">ငွေဖြည့်</p>
    </a>
    <a href="{{ ('/withdraw') }}" class="text-decoration-none">
     <img src="{{ asset('user_app/assets/images/profit.png') }}" width="50px" height="50px" alt="" />
     <p class="text-primary fw-bold">ငွေထုတ်</p>
    </a>
    <a class="text-decoration-none">
     <img src="{{ asset('user_app/assets/images/briefcase.png') }}" width="50px" height="50px" alt="" />
     <p class="text-success fw-bold">မှတ်တမ်း</p>
    </a>
   </div>
  </div>
  <div class="card wallet-card mt-3">
   <h5 class="text-center">ငွေဖြည့်လိုပါက</h5>
   <div>
    <p>၁။ "ငွေဖြည့်" ကို နှိပ်ပါ။</p>
    <p>
     ၂။ KBZ Pay, Wave Pay, CB Pay နှင့် AYA Pay တို့မှ
     မိမိငွေဖြည့်မည့် ဘဏ်ကို ရွေးပါ။
    </p>
    <p>
     ၃။ သက်ဆိုင်ရာ Pay ဖြင့် ငွေသွင်းနိုင်သော App မှအကောင့်များ
     ပေါ်လာပါလိမ့်မည်။
    </p>
   </div>
  </div>
 </div>

 <div class="container"></div>
</div>
<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection