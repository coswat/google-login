<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePen - Responsive Login Form - Onboarding Slider</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css'><link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- https://dribbble.com/shots/15392711-Dashboard-Login-Sign-Up/-->

<div class="login-container">
  <div class="login-form">
    <div class="login-form-inner">
      <div class="logo"><svg height="512" viewBox="0 0 192 192" width="512" xmlns="http://www.w3.org/2000/svg">
          <path d="m155.109 74.028a4 4 0 0 0 -3.48-2.028h-52.4l8.785-67.123a4.023 4.023 0 0 0 -7.373-2.614l-63.724 111.642a4 4 0 0 0 3.407 6.095h51.617l-6.962 67.224a4.024 4.024 0 0 0 7.411 2.461l62.671-111.63a4 4 0 0 0 .048-4.027z" />
        </svg></div>
      <h1>Forget Password</h1>
      <p class="body-text">
        @if(Session::has('alert'))
        {{ Session::get('alert') }}
        @endif
      </p>


      <div class="sign-in-seperator">
        <span>Forget Password? Reset From Here</span>
      </div>
<form action="{{ route('forget.pass.action') }}" method="post">
  @csrf
      <div class="login-form-group">
        <label for="email">Email <span class="required-star">*</span></label>
        <input type="text" placeholder="email@website.com" value="{{ old('email') }}"name="email">
        @error('email')
        <p class="body-text">
        {{ $message }}
        </p>
        @enderror
      </div>
      




      <button class="rounded-button login-cta">Send Reset Link</button>
</form>


  <div class="onboarding">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide color-1">
          <div class="slide-image">
            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/startup-launch.png" loading="lazy" alt="" />
          </div>
          <div class="slide-content">
            <h2>Turn your ideas into reality.</h2>
            <p>Consistent quality and eperience across all platform and devices</p>
          </div>
        </div>
        <div class="swiper-slide color-1">
          <div class="slide-image">
            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/cloud-storage.png" loading="lazy" alt="" />
          </div>
          <div class="slide-content">
            <h2>Turn your ideas into reality.</h2>
            <p>Consistent quality and eperience across all platform and devices</p>
          </div>
        </div>

        <div class="swiper-slide color-1">
          <div class="slide-image">
            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/cloud-storage.png" loading="lazy" alt="" />
          </div>
          <div class="slide-content">
            <h2>Turn your ideas into reality.</h2>
            <p>Consistent quality and eperience across all platform and devices</p>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.0/js/swiper.min.js'></script><script  src="{{ url('js/sbcript.js') }}"></script>

</body>
</html>
