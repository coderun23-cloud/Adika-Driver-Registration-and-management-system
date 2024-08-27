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
            <a href="{{url('/')}}" class=" navbar__links">HOME</a>
          </li>
          <li class="navbar__item">
            <a href="{{url('/contact')}}" class="navbar__links">CONTACT <span style="margin-left: 10px;">US</span></a>
          </li>
          <li class="navbar__item">
            <a href="{{url('/about')}}" class="navbar__links">ABOUT</a>
          </li>
          <li class="navbar__btn"><a href="{{route('login')}}" class="button">Sign In</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="main" style="background-image: url('https://adikataxi.com/assets/img/others/taxi1.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;">
      <div class="main__container">
        <div class="main__content">
          <h1 style="font-size: 3rem;">ADIKA TAXI SERVICE</h1>
          <h2 style="font-size: 2rem;">DRIVER'S <span style="color: red">REGISTARTION</span> SITE</h2>
        
          <button class="main__btn"><a href="{{route('login')}}">Get Started</a></button>
        </div>
       
      </div>
    </div>

    <!-- Services Section -->
    <div class="services">
      <h1>See what the hype is about</h1>
      <div class="services__container">
        <div class="services__card">
          <h2>Each Mile With a Smile</h2>
          <p>Join Us</p>
            
          <button>Get Started</button>
        </div>
        <div class="services__card">
          <h2>Are you Ready?</h2>
          <p>Take the leap</p>
          <button>Get Started</button>
        </div>
      </div>
    </div>
    <div class="services">
      <h1>Our Service</h1>
      <div class="services__container">
        <div class="services__card" style="background-color:rgb(171, 171, 171); background-image: linear-gradient(
          to bottom,
          rgba(0, 0, 0, 0) 0%,
          rgba(255, 255, 255, 1) 100%
        ),
        url('/images/taxihail.png');">
          <h2 style="color:black; font-weight:bold;">Taxi Hailing</h2>
          <p style="color:black; font-weight:bold;">Join Us</p>
            
          <button>Get Started</button>
        </div>
        <div class="services__card" style="background-color:rgb(171, 171, 171); background-image: linear-gradient(
        to bottom,
        rgba(121, 121, 121, 0) 0%,
        rgba(255, 255, 255, 1) 100%
      ),
      url('/images/deli.png');">
          <h2 style="color:black; font-weight:bold;">Delivery Service</h2>
          <p style="color:black; font-weight:bold;">Make Your First Delivery</p>
          <button>Get Started</button>
        </div>
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
            <a href="/">Address:Bloom Tower, Addis Ababa, Ethiopia</a> <a href="/">Email:contact@adikataxi.com</a>
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