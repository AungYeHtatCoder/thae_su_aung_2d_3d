@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row mt-5" style="height: 70vh">
 <div class="col-lg-4  mx-auto pt-4" style="background: #fff1d0">
  <h4 class="text-center text-dark">2D ကံထူးရှင်စာရင်း</h4>
  <table class="responsive-table mt-3 table text-center text-primary" style="margin-bottom: 400px">
   <tr>
    <th>စဉ်</th>
    <th>အမည်</th>
    <th>ထိုးငွေ</th>
    <th>ထီပေါက်ငွေ</th>
   </tr>
   <tr>
    <td>1.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>2.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>3.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>4.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>5.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>6.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
   <tr>
    <td>7.</td>
    <td class="d-flex">
     <img src="{{ url('user_app/assets/images/team-1.jpg') }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
     <div class="ps-2">
      UserName
      <span class="d-block">09123456</span>
     </div>
    </td>
    <td>10,000</td>
    <td>
     <i class="fa fa-money" style="font-size: 20px"></i> 20,000
    </td>
   </tr>
  </table>
 </div>
</div>
<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection