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
    <link rel="stylesheet" href="sales/register.css">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"><i class="fas fa-gem"></i>ADIKA</a>
        
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
    <!--form-->
<div class="main_section">
    <div class="form_container">
      
        <form action="{{url('/driver_form')}}" method="post">
        @csrf
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
                <input type="number" name="pnum" id="" placeholder="enter the plate number" required>
            </div>
            <div class="input_box">
                <label class="details">
                    Vehicle Type
                </label>
                <select name="type" id="type">
             
                    <option value="">Toyota</option>
                    <option value="">Suzuki</option>
                    <option value="">Hyundai</option>
                    <option value="">Other</option>
                
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
                <input type="number" name="dnum" id="" placeholder="enter the driver's phone number" required>
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
                    <input type="radio" name="male" id="">
                    <label for="">Male</label>
                    <input type="radio" name="female" id="">
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
            <a href="/" id="footer__logo"><i class="fas fa-gem"></i>ADIKA</a>
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