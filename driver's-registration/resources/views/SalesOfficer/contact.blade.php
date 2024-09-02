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
    

    <style>
       
        .form-container {
     margin-left: 15rem;
    background-color:transparent;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
}

form {
    display: flex;
    flex-direction: column;

}

h2 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #333;
}

label {
    margin-bottom: 0.5rem;
padding-top: 1rem;
    font-weight: bolder;
    color: #ffffff;
}

input[type="text"],
input[type="email"],
textarea {
    width: 40rem;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
    color: white;
    background: transparent;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 0.75rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    width: 35%;
}

input[type="submit"]:hover {
    background-color: #3e97f6;
    transition: all ease-in 0.1s;
}

@media (max-width: 600px) {
    .form-container {
        padding: 1rem;
    }

    h2 {
        font-size: 1.25rem;
    }

    button {
        padding: 0.5rem;
        font-size: 0.875rem;
    }
}
.message{
  width: 100%;
  background-color: lightgreen;
  font-size: 27px;
  padding: 10px;
  color: whitesmoke;
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
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/" class="navbar__links">HOME</a>
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

  
    @if(session('success'))
    <div class="message">
        {{ session('success') }}
    </div>
@endif

    <!-- Hero Section -->
    <div class="main"  style=" height:75%; background-image: url('https://adikataxi.com/assets/img/others/taxi1.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
      <div style="height: 100%;" class="main__container">
        <div class="main__content">
        <h1 style="text-align: center;padding-top:1rem;">Contact Form</h1>
        <div class="form-container">
            <form action="{{url('/sent_message')}}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                
                <label for="desc">Message:</label>
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your comment here" required></textarea>
                
                <input type="submit" value="SUBMIT">
            </form>
        </div>
        </div>
       
      </div>
    </div>

    <!-- Services Section -->
  





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