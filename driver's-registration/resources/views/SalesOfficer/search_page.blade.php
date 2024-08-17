<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      Site created by Brian Design on youtube @ www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adika Driver's Registration</title>
    <link rel="stylesheet" href="home/styles.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" href="images/logo (1).png" type="image/icon type">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="sales/record.css">
 
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"><i class="">   <img src="images/logo (1).png" alt=""></i></a>
        
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="{{url('/index')}}" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a  href="{{url('/driver_registration')}}" class="navbar__links">DriverRegistration</a>
          </li>
          <li class="navbar__item">
            <a href="{{url('/records')}}" class="navbar__links">Records</a>
          </li>
          <li class="navbar__btn"><x-app-layout></x-app-layout></li>
      </div>
    </nav>
<!--Card section-->

<h1 class="h1">TOTAL REGIESTERED DRIVERS</h1>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><spa aria-hidden="true">X</button>
  {{ session()->get('success') }}
</div>

@endif
   
<div class="column-container">  
    @foreach ($data as $data )
    <div class="column">
   
      <div class="card">
        <h1 class="h1">Driver's Information</h1>
        <h3>Vechile Name:{{$data->vehicle_name}}</h3>
        <h3>Vechile Type:{{$data->vehicle_type}}</h3>
        <h3>Plate Number:{{$data->plate_number}}</h3>
        <h3>Driver's Name:{{$data->driver_name}}</h3>
        <h3>Phone Number:{{$data->driver_phone_number}}</h3>
        <h3>Driver's Email:{{$data->driver_email}}</h3>
        <h3>Gender:{{$data->gender}}</h3>
    </div>
    </div>

 
    @endforeach
  </div>




    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/sign__up">advanced transportation services</a> <a href="/">meter taxis</a>
            <a href="/">car rentals</a> <a href="/">delivery</a>
            <a href="/">shipping, and carpooling.</a>
          </div>
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a> <a href="/">Contact:7000</a>
            <a href="/">Address:Bloom Tower, Addis Ababa, Ethiopia</a> <a href="/"> Email:contact@adikataxi.com</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Need Help ?</h2>
            <a href="/">FAQs</a> <a href="/">Private Policy</a>

          </div>
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a> <a href="/">Facebook</a>
            <a href="/">Youtube</a> <a href="/">Twitter</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="navbar__logo"><i class="">   <img src="images/logo (1).png" alt=""></i></a>
          </div>
          <p class="website__rights">© Adika 2024. All rights reserved</p>
          <div class="social__icons">
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Instagram"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              class="social__icon--link"
              href="//www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber"
              target="_blank"
              aria-label="Youtube"
            >
              <i class="fab fa-youtube"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Twitter"
            >
              <i class="fab fa-twitter"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="LinkedIn"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="home/script.js"></script>
  </body>
</html>