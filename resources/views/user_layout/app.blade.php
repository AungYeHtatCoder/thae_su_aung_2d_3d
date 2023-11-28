@include('user_layout.head')
@yield('style')

<body>
 <div class="container-fluid">

  @yield('content')
  @include('user_layout.header')

  <!-- sidebar  -->
  @include('user_layout.side-nav')
  <!-- sidebar -->

 </div>

 @include('user_layout.js')
 @yield('script')