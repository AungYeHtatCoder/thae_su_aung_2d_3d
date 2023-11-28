@extends('user_layout.app')

@section('content')
<!-- content section -->
<div class="row" style="margin-top: 55px; height: 120vh">
  <div class="col-lg-4 pb-5 mx-auto" style="background: #fff1d0">
    <!-- <div class="container">
            <div class="row">
              <div class="col-6 deposit">
                <p class="mt-3">Deposit</p>
              </div>
              <div class="col-6 withdraw">
                <p class="mt-3">Withdraw</p>
              </div>
            </div>
          </div> -->

    <div class="fill-money mt-4 pb-4 card shadow">
      <div class="p-3 d-flex">
        <div>
          <p class="fs-5 fw-bold">Bank</p>
          <img src="{{ asset('user_app/assets/images/bank/kpay.png') }}" alt="" />
        </div>
        <div class="ps-3">
          <p class="fs-5 fw-bold">Account Number</p>
          <p class="fw-bold">********89</p>
        </div>
      </div>
      <div class="container">
        <div class="form-group m-3">
          <label for="" class="form-lable ps-3">သင်၏ ဖုန်းနံပါတ်ထဲ့ပါ</label>
          <input type="text" id="" placeholder="" class="form-control mt-1" />
        </div>
        <div class="form-group m-3">
          <label for="" class="form-lable ps-3">လုပ်ဆောင်မှုအမှတ်စဥ် (နောက်ဆုံးဂဏန်း ၆ လုံး)</label>
          <input type="number" id="" placeholder="ဂဏန်း ၆ လုံး ဖြည့်ပါ" class="form-control mt-1" />
        </div>
        <div class="form-group m-3">
          <label for="" class="form-lable ps-3">ငွေဖြည့်ပမာဏ</label>
          <input type="number" id="inputField" placeholder="ငွေပမာဏဖြည့်ပါ" class="form-control mt-1" />
        </div>
        <div class="d-flex justify-content-between m-4">
          <div class="fill-box" data-value="1000" onclick="fillInputBox(this)">
            <p>1,000</p>
          </div>
          <div class="fill-box" data-value="5000" onclick="fillInputBox(this)">
            5,000
          </div>
          <div class="fill-box" data-value="10000" onclick="fillInputBox(this)">
            10,000
          </div>
        </div>
        <div class="d-flex justify-content-between m-4">
          <div class="fill-box" data-value="100000" onclick="fillInputBox(this)">
            100,000
          </div>
          <div class="fill-box" data-value="200000" onclick="fillInputBox(this)">
            200,000
          </div>
          <div class="fill-box" data-value="500000" onclick="fillInputBox(this)">
            500,000
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{{ url('/topUp') }}" class="btn back-btn">မလုပ်တော့ပါ</a>
          <a href="#" class="btn top-up-btn">ဆက်လုပ်ရန်</a>
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

@section('script')
<script>
  function fillInputBox(element) {
    let value = element.getAttribute('data-value');
    console.log(value);
    let inputField = document.getElementById('inputField');
    inputField.value = value;
  }
</script>
@endsection