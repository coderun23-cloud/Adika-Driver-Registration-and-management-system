<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
  /* Container styling */
.container {
    margin: 0 auto;
    padding: 20px;
    max-width: 1200px;
}

/* Header styling */
h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

h4 {
    font-size: 1.8rem;
    margin-bottom: 15px;
    color: #ffffff;
}

/* KPI Summary Table */
.kpi-summary {
    margin-bottom: 30px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table-bordered th,
.table-bordered td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.table-bordered thead {
    background-color:transparent;
}

.table-bordered thead th {
    font-weight: bold;
}

/* Form Styling */
.achieve-kpi-form {
    background-color:transparent;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}
.form-group input{
  background-color: transparent;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-success {
    background-color: #28a745;
    border: none;
    color: #000000;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 0;
    cursor: pointer;
    border-radius: 4px;
}

.btn-success:hover {
    background-color: #218838;
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
            <a href="{{url('/index')}}" class="navbar__links">HOME</a>
          </li>
          <li class="navbar__item">
            <a  href="{{url('/driver_registration')}}" class="navbar__links">DRIVER <span style="margin-left: 5px;">REGISTRATION</span></a>
          </li>
          <li class="navbar__item">
            <a href="{{url('/records')}}" class="navbar__links">RECORDS</a>
          </li>
          <li class="navbar__item">
            <a href="{{route('salesofficer.kpiDashboard')}}" class="navbar__links">KPI</a>
        </li>
          <li class="navbar__btn"><x-app-layout></x-app-layout></li>
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
        
            <div class="container">
                <h2>Performance Dashboard</h2>
            
                <div class="kpi-summary">
                    <h4>Current KPIs</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>KPI Type</th>
                                <th>Goal</th>
                                <th>Achieved</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Daily</td>
                                <td>{{ $dailyKpi->kpi_value ?? 'Not Set' }}</td>
                                <td>{{ $kpis['daily']->kpi_value ?? 'Not Set' }}</td>
                            </tr>

                        
                        </tbody>
                    </table>
                </div>
            
                <div class="achieve-kpi-form">
                    <h4>Register Achieved KPI</h4>
                    <form action="{{ route('salesofficer.registerAchievedKpi') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="registration_date">Date of Registration:</label>
                            <input type="date" name="registration_date" class="form-control" required>
                        </div>
            
                        <div class="form-group">
                            <label for="number_of_registrations">Number of Registrations:</label>
                            <input type="number" name="number_of_registrations" class="form-control" required min="1">
                        </div>
            
                        <button type="submit" class="btn btn-success">Submit Achievement</button>
                    </form>
                </div>
            </div> 
        </div>
       
      </div>
    </div>


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
            <a href="/">Address:Bloom Tower, Addis Ababa, Ethiopia</a><a href="/">Email:contact@adikataxi.com</a>
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