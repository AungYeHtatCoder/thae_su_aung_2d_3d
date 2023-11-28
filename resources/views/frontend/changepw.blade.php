@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 55px">
 <div class="col-lg-4 mx-auto" style="background-color: #fff1d0">
  <div style="height: 100vh" class="pt-3">
   <h6 class="text-center p-3 fs-6 fw-bold" style="color: #000">
    လျှို့ဝှက်နံပါတ်ပြောင်းမည်
   </h6>
   <div class="container">
    <div class="form-group">
     <input type="password" class="form-control" placeholder="လျှို့ဝှက်နံပါတ်အဟောင်း" name="" id="" />
    </div>
    <p class="text-center mt-1" style="font-size: 13px">
     ကျေးဇူးပြု၍လျှို့ဝှက်နံပါတ်အသစ်ကိုနှစ်ကြိမ်ရိုက်ထည့်ပါ။
    </p>
    <p class="text-center mt-1 text-primary" style="font-size: 13px">
     မှတ်ချက် - လျှို့ဝှက်နံပါတ် နှစ်ခုတူညီရပါမည်
    </p>
    <div class="form-group">
     <input type="password" class="form-control" placeholder="လျှို့ဝှက်နံပါတ်အသစ်" name="" id="" />
    </div>
    <div class="form-group mt-4">
     <input type="password" class="form-control" placeholder="အတည်လျှို့ဝှက်နံပါတ်" name="" id="" />
    </div>
    <a href="" style="
                  font-size: 14px;
                  text-align: right;
                  text-decoration: none;
                ">
     <p class="text-danger">လျှို့ဝှက်နံပါတ်မေ့နေပါသလား?</p>
    </a>
    <div class="form-group">
     <a href="" class="threeplay-btn btn">ပြောင်းမည်</a>
    </div>
   </div>
   <div class="container font-weight-bold" style="color: #000">
    <p>လျှို့ဝှက်နံပါတ်</p>
    <p>1. အကောင့်ဝင်ရန် အသုံးပြုရမည်<br /></p>
    <p>2. ငွေထုတ်ယူရန် အသုံးပြုရမည်</p>
    <p class="text-danger font-weight-bold">
     အကောင့်လုံခြုံမှုရှိစေရန် သင်၏ လျှို့ဝှက်နံပါတ် ကို
     မည်သူ့ကိုမျှမပြောပါနှင့်။
    </p>
   </div>
  </div>
 </div>
</div>
<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection