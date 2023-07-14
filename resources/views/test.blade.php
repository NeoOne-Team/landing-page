<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <title>NeoOne</title>

  <link rel="stylesheet" href="{{ URL::asset('css/test.css') }}">
  <script src=""></script>
</head>
<body>

  <nav>
    <div class="left-nav">
      <img src="{{ URL::asset('images/logo.svg')}}" alt="">
    </div>
    <ul>
      <li><a href="#">How we work</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Account</a></li>
      <li><a href="#" class="btn">View plans</a></li>
    </ul>
    <div class="hamburger">
      <img src="{{ URL::asset('images/icon-hamburger.svg')}}" alt="" class="open">
      <img src="{{ URL::asset('images/icon-close.svg')}}" alt="" class="close">
    </div>
  </nav>

  <div class="second">
    <div class="content">
      <div class="left-second">
        <h1>Get Your Work Done.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi vero eligendi esse, maxime sapiente porro corrupti, accusamus temporibus voluptate et laudantium, sint cum omnis magni. Ipsam aliquam quasi sed!.</p>
        <button class="btn">View Plans</button>
      </div>
      <div class="right-second">
        <img src="{{ URL::asset('images/image-intro-desktop.jpg')}}" alt="">
      </div>
    </div>
  </div>

  <div class="third">
    <h1 class="utama">We're different</h1>
    <div class="divs">
      <div class="div">
        <img src="{{ URL::asset('images/icon-snappy-process.svg')}}" alt="">
        <h1>Snappy Process</h1>
        <p>Our application process can be completed in minutes, not hours. Don't get 
          stuck filling in tedious forms</p>
      </div>
      <div class="div">
        <img src="{{ URL::asset('images/icon-affordable-prices.svg')}}" alt="">
        <h1>Affordable Prices</h1>
        <p>We don't want you worrying about high monthly costs. Our prices may be low, 
          but we still offer the best coverage possible.</p>
      </div>
      <div class="div">
        <img src="{{ URL::asset('images/icon-people-first.svg')}}" alt="">
        <h1>People First</h1>
        <p>Our plans aren't full of conditions and clauses to prevent payouts. We make 
          sure you're covered when you need it.</p>
      </div>
    </div>
  </div>

  <div class="fourth">
    <div class="content-fourth">
      <h1>Find out more about how we work</h1>
      <button class="btn">How we work</button>
    </div>
  </div>

  <footer>
    <div class="nav-footer">
      <img src="{{ URL::asset('images/logo.svg')}}" alt="">
      <div>
        <img src="{{ URL::asset('images/icon-facebook.svg')}}" alt="">
        <img src="{{ URL::asset('images/icon-twitter.svg')}}" alt="">
        <img src="{{ URL::asset('images/icon-pinterest.svg')}}" alt="">
        <img src="{{ URL::asset('images/icon-instagram.svg')}}" alt="">
      </div>
    </div>
    <div class="content-footer">
      <div class="div">
        <h2>Our company</h2>
        <p>How we work</p>
        <p>Why Insure?</p>
        <p>View plans</p>
        <p>Reviews</p>
      </div>
      <div class="div">
        <h2>Help me</h2>
        <p>FAQ</p>
        <p>Terms of use</p>
        <p>Cookies</p>
      </div>
      <div class="div">
        <h2>Contact</h2>
        <p>Sales</p>
        <p>Support</p>
        <p>Live chat</p>
      </div>
      <div class="div">
        <h2>Others</h2>
        <p>Careers</p>
        <p>Press</p>
        <p>Licenses</p>
      </div>
    </div>
  </footer>
  
  <!-- <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Kevin Almer</a>.
  </div> -->
<script src="script.js"></script>
</body>
</html>