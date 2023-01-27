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
      <h1>Change Password</h1>
      <p class="body-text">
        @if(Session::has('alert'))
        {{ Session::get('alert') }}
        @endif
      </p>


      <div class="sign-in-seperator">
        <span>Change Password Page</span>
      </div>
<form action="{{ route('change.pass') }}" method="post">
  @csrf
      <div class="login-form-group">
        <label for="password">Enter Password <span class="required-star">*</span></label>
        <input type="text" placeholder="Minimum 8 Characters" value="{{ old('password') }}"name="password">
        @error('password')
        <p class="body-text">
        {{ $message }}
        </p>
        @enderror
      </div>
      <div class="login-form-group">
        <label for="password">Confirm Password <span class="required-star">*</span></label>
        <input type="password" placeholder="Repeat The Password" value="" name="confirm_password">
        @error('confirm_password')
        <p class="body-text">
        {{ $message }}
        </p>
        @enderror
      </div>
 <input type="hidden" name="usermail" value="{{ encrypt($email) }}" />
 <input type="hidden" name="token" value="{{ encrypt($token) }}" />
      <button class="rounded-button login-cta">Change Password</button>
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
