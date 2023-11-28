@extends('user_layout.app')

@section('content')
<div class="row" style="margin-top: 55px">
 <div class="col-lg-4 sub-nav py-2 mx-auto">
  <a href="index.html" class="d-flex align-items-center">
   <i class="fa-solid fa-arrow-left"></i>
  </a>
  <a href="index.html" class="d-flex">
   <h5 class="mt-1">12:00 AM</h5>
  </a>
 </div>
</div>
<!-- content section -->
<div class="row" style="height: 90vh">
 <div class="col-lg-4 mx-auto" style="background: #fff1d0;">
  <div class="d-flex justify-content-around mt-3">
   <div>
    <button class="btn btn-choose mt-2 d-block">R မည်</button>
   </div>
   <button class="btn btn-choose mt-2 d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
    အမြန်ရွေး
   </button>
  </div>

  <div class="form-group text-center mt-2 play-amount">
   <input type="text" placeholder="ငွေပမာဏ" />
  </div>
  <div class="d-flex justify-content-between">
   <a href="" class="d-flex mt-2" style="text-decoration: none">
    <p class="text-warning fw-bold mt-2 px-2 fs-6">
     <i class="fa-solid fa-circle-info"></i> အရောင်ရှင်းလင်းချက်
    </p>
   </a>
  </div>

  <div class="scroll-container mx-auto mt-2">
   <div class="d-flex justify-content-around">
    <div class="digit-box btn">
     00
     <div class="progress-bar mt-2"></div>
    </div>

    <div class="digit-box btn">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box btn">
     00
     <div class="progress-bar mt-2"></div>
    </div>

    <div class="digit-box btn">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box btn">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box btn">
     00
     <div class="progress-bar mt-2"></div>
    </div>

    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
   </div>
   <div class="d-flex justify-content-around">
    <div class="digit-box">
     00
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     01
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     02
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     03
     <div class="progress-bar mt-2"></div>
    </div>
    <div class="digit-box">
     04
     <div class="progress-bar mt-2"></div>
    </div>
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
    <a href="" class="btn recollect-btn mx-3">ဖျက်မည်</a>
   </div>
   <div class="col-6">
    <a href="{{ url('/twoD-confirm') }}" class="btn play-btn">ထိုးမည်</a>
   </div>
  </div>
 </div>
</div>
<!-- footer section -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">
     အမြန်ရွေးရန်
    </h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <div class="row ms-1">
     <div class="quick-box col-2">0</div>
     <div class="quick-box col-2">1</div>
     <div class="quick-box col-2">2</div>
     <div class="quick-box col-2">3</div>
     <div class="quick-box col-2">4</div>
     <div class="quick-box col-2">5</div>
     <div class="quick-box col-2">6</div>
     <div class="quick-box col-2">7</div>
     <div class="quick-box col-2">8</div>
     <div class="quick-box col-2">9</div>
    </div>
    <hr />
    <div class="d-flex justify-content-around">
     <div class="quick-box1">မမ</div>
     <div class="quick-box1">စုံစုံ</div>
     <div class="quick-box1">မမ အပူး</div>
     <div class="quick-box1">စုံစုံ အပူး</div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- model -->
@endsection