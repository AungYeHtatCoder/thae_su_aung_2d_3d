 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
   <h5 class="offcanvas-title" id="offcanvasRightLabel">
    Delight 2D | 3D
   </h5>
   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <div class="user-profile">
    <img src="{{ asset('user_app/assets/images/team-1.jpg') }}" alt="" />
    <div class="ms-3 mt-4">
     <p class="fw-bold">UserName <br /><span>0912345678</span></p>
    </div>
   </div>
   <div class="menu-item mt-4">
    <i class="fa-solid fa-list-check"></i>
    <a href="">ထီထိုးမှတ်တမ်း</a>
   </div>
   <div class="menu-item mt-2">
    <i class="fa-solid fa-2">D</i>
    <a href="{{ url('/twoD-history') }}"> ထွက်ဂဏန်းများ</a>
   </div>
   <div class="menu-item mt-2">
    <i class="fa-solid fa-3">D</i>
    <a href="threed-history.html"> ထွက်ဂဏန်းများ</a>
   </div>
   <div class="menu-item mt-2">
    <i class="fa-solid fa-landmark"></i>
    <a href="{{ url('/banks') }}">ဘဏ်အကောင့်များ</a>
   </div>
   <div class="menu-item mt-2">
    <i class="fa-solid fa-key"></i>
    <a href="{{ url('/changepw') }}">လျှို့ဝှက်နံပါတ် ပြောင်းရန်</a>
   </div>
   <div class="menu-item mt-2">
    <i class="fa-solid fa-right-to-bracket"></i>
    <a href="">ထွက်ခွာရန်</a>
   </div>
  </div>
 </div>