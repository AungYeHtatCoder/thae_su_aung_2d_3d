@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row mt-5" style="height: 120vh">
  <div class="col-lg-4 mx-auto" style="background: #fff1d0">
    <div class="card py-3 mt-4 shadow">
      <div class="d-flex text-warning ps-3">
        <img src="https://www.svgrepo.com/download/295402/user-profile.svg" width="50px" height="50px" />
        <p class="d-block ms-2">
          UserName <span class="d-block text-danger">0 Ks</span>
        </p>
      </div>
      <hr style="height: 2px; color: #dd1c1a; margin: 10px" />
      <div class="d-flex justify-content-around">
        <div class="">
          <img src="{{ asset('user_app/assets/images/loss.png') }}" width="50px" height="50px" alt="" />
          <p class="text-success fw-bold">ငွေဖြည့်</p>
        </div>
        <div class="">
          <img src="{{ asset('user_app/assets/images/profit.png') }}" width="50px" height="50px" alt="" />
          <p class="text-primary fw-bold">ငွေထုတ်</p>
        </div>
        <div class="">
          <img src="{{ asset('user_app/assets/images/briefcase.png') }}" width="50px" height="50px" alt="" />
          <p class="text-success fw-bold">မှတ်တမ်း</p>
        </div>
      </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade mt-3" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://thailotto123.net/assets/img/banners/banner6551a36c29352.png" style="max-height: 500px" class="d-block w-100" alt="..." />
          <div class="marquee">
            <div class="marquee-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Dolorem ea id exercitationem. Quos consequuntur vitae soluta
              aliquid odit temporibus beatae iste autem?
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://thailotto123.net/assets/img/banners/banner6551a35f3f8a0.png" style="max-height: 500px" class="d-block w-100" alt="..." />
          <div class="marquee">
            <div class="marquee-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Dolorem ea id exercitationem. Quos consequuntur vitae soluta
              aliquid odit temporibus beatae iste autem?
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://thailotto123.net/assets/img/banners/banner6551a3505d2c9.png" style="max-height: 500px" class="d-block w-100" alt="..." />
          <div class="marquee">
            <div class="marquee-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Dolorem ea id exercitationem. Quos consequuntur vitae soluta
              aliquid odit temporibus beatae iste autem?
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="my-3 mx-2">
      <div class="play-card">
        <a href="{{ url('/twoD') }}"><span class="play-text">2D</span></a>
      </div>
      <div class="play-card mt-2">
        <a href="twoD.html"><span class="play-text">3D</span></a>
      </div>
    </div>
  </div>
</div>
<!-- content section -->

<!-- footer section -->
@include('user_layout.footer')
<!-- footer section -->
@endsection