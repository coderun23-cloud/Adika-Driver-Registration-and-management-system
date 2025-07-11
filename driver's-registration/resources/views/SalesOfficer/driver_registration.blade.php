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
    <link rel="icon" href="https://adikataxi.com/assets/img/favicon.png" sizes="20x20" type="image/png">
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
    <link rel="stylesheet" href="sales/register.css">
    <style>
      .navbar{
       position: sticky;
  
      }
      
    </style>
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
        <ul class="navbar__menu" >
          <li class="navbar__item">
            <a style="text-transform: capitalize;" href="{{url('/index')}}" class="navbar__links">HOME</a>
          </li>
          <li class="navbar__item">
            <a style="text-transform: capitalize;"  href="{{url('/driver_registration')}}" class="navbar__links">DRIVERREGISTRATION</a>
          </li>
          <li class="navbar__item">
            <a style="text-transform: capitalize;" href="{{url('/records')}}" class="navbar__links">RECORDS</a>
          </li>
          <li class="navbar__item">
            <a href="{{route('salesofficer.kpiDashboard')}}" class="navbar__links">KPI</a>
        </li>
          <li class="navbar__btn"><x-app-layout></x-app-layout></li>
      </div>
    </nav>
    <!--form-->
<div class="main_section">
    <div class="form_container">
      
        <form action="{{url('driver_form')}}" method="post">
        @csrf
       
        
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('success') }}
        </div>
        @elseif (session()->has('alert'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          {{ session()->get('alert') }}
      </div>
          @endif
      
        <h1 class="title">
            Driver's Registration Form
        </h1>
        <div class="user_details">
            <div class="input_box">
                <label class="details">
                    Vehicle Name
                </label>
                <input type="text" name="vname" id="" placeholder="enter the vehicle name" required>
            </div>
        
            <div class="input_box">
                <label class="details">
                    Plate Number
                </label>
                <input type="text" name="pnum" id="" placeholder="enter the plate number" required>
            </div>
            <div class="input_box">
                <label class="details">
                    Vehicle Type
                </label>
                <select name="type" id="type">
                    
                   @foreach ($data as $data )
                   <option value="{{$data->cat_title}}">{{$data->cat_title}}</option>  
             
                   @endforeach
                
                </select>
            </div>
            <div class="input_box">
                <label class="details">
                    Driver's Name
                </label>
                <input type="text" name="dname" id="" placeholder="enter the driver's name" required>
            </div>
            <div class="input_box">
                <label class="details">
                    Driver's Phone Number
                </label>
                <input type="text" name="dnum" id="" placeholder="enter the driver's phone number" required>
            </div>
            <div class="input_box">
                <label class="details">
                    Driver's Email
                </label>
                <input type="email" name="dmail" id="" placeholder="enter the driver's email" required>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">
                    Gender
                </span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="" value="male">
                    <label for="">Male</label>
                    <input type="radio" name="gender" id="" value="male">
                    <label for="">Female</label>
                </div>
            </div>
            
        </div>
        <div class="form-submit-tbn" >
                <input  type="submit" value="REGISTER">
              </div>
        </form>
    </div>
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