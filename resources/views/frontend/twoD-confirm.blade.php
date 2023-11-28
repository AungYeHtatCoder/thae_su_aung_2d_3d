@extends('user_layout.app')

@section('content')
<div class="row" style="margin-top: 55px">
 <div class="col-lg-4 sub-nav py-2 mx-auto">
  <a href="twod-play.html" class="d-flex"><i class="fa-solid fa-arrow-left mt-2 ps-2 pe-3"></i>
   <h6 class="mt-1 d-flex align-items-center">2D ထိုးမည်</h6>
  </a>
  <i class="fa-solid fa-plus mt-2 ps-2 pe-3"></i>
 </div>
</div>
<!-- content section -->
<div class="row">
 <div class="col-lg-4 mx-auto" style="background: #fff1d0;">
  <div style="height: 100vh;">
   <h6 class="mt-3 py-2 text-center fw-bold text-warning">ထိုးမည့်ဂဏန်းများ</h6>
   <table class="table text-dark text-center">
    <tr>
     <th>စဉ်</th>
     <th>ဂဏန်း</th>
     <th>ငွေပမာဏ</th>
     <th>ပြင် / ဖျက်</th>
    </tr>
    <tr>
     <td>1</td>
     <td>123</td>
     <td>100</td>
     <td>
      <div class="d-flex justify-content-center">
       <a href=""><i class="fa-regular fa-pen-to-square mx-3"></i></a>
       <a href=""><i class="fa-regular fa-trash-can text-danger"></i></a>
      </div>
     </td>
    </tr>
    <tr>
     <td>2</td>
     <td>223</td>
     <td>100</td>
     <td>
      <div class="d-flex justify-content-center">
       <a href=""><i class="fa-regular fa-pen-to-square mx-3"></i></a>
       <a href=""><i class="fa-regular fa-trash-can text-danger"></i></a>
      </div>
     </td>
    </tr>
    <tr>
     <td>3</td>
     <td>223</td>
     <td>100</td>
     <td>
      <div class="d-flex justify-content-center">
       <a href=""><i class="fa-regular fa-pen-to-square mx-3"></i></a>
       <a href=""><i class="fa-regular fa-trash-can text-danger"></i></a>
      </div>
     </td>
    </tr>
   </table>

   <div class="d-flex justify-content-around text-dark">
    <p>စုစုပေါင်းငွေပမာဏ</p>
    <p>200 ကျပ်</p>
   </div>
   <hr />
   <div class="text-center" style="background: #2c74b3; border-radius: 5px; padding: 5px">
    <p>လက်ကျန်ငွေ</p>
    <p>0 ကျပ်</p>
   </div>

  </div>
 </div>
</div>

<!-- content section -->

<!-- footer section -->
<div class="row">
 <div class="col-lg-4 mx-auto py-3 text-center fixed-bottom">
  <div class="row">
   <div class="col-6">
    <a href="twoD-play.html" class="btn recollect-btn mx-3">ပြန်ရွေးမည်</a>
   </div>
   <div class="col-6">
    <a href="" class="btn play-btn">ထိုးမည်</a>
   </div>
  </div>
 </div>
</div>
<!-- footer section -->
@endsection