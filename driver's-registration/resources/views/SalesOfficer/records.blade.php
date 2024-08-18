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
    <link rel="stylesheet" href="sales/record.css">
  <style>
    input[type="search"]{
        float: right;
  border: none;
  margin-bottom:70px;
  margin-right: 20px;
  font-size: 17px;
    }
    @media screen and (max-width: 600px) {
   input[type="search"] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    border: 1px solid #ccc;  
  }
  
  

}
.navbar{
       position: sticky;
        border-bottom: 1px solid white;
      }
      .dropdown{
        margin-left: 20px;

      }
      .dropbtn{
        border-radius: 20px;
        margin-top:16px;
        width: 130px;
    
      }
      .dropdown-content{
        border-radius: 20px;
        padding: 16px;
        width: 100%;
      }
      #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 80px;
 
}
  #customers td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
 
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
/* Stack rows into block elements on small screens */
@media screen and (max-width: 600px) {
    #customers, #customers tr, #customers th, #customers td {
        display: block;
        width: 100%;
    }

    #customers tr {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
    }

    #customers th, #customers td {
        text-align: right;
        position: relative;
        padding-left: 50%;
        padding-right: 1rem;
        box-sizing: border-box;
    }

    #customers th::before, #customers td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 0.5rem;
        font-weight: bold;
        white-space: nowrap;
    }
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
            <a  href="{{url('/driver_registration')}}" class="navbar__links">DRIVERREGISTRATION</a>
          </li>
          <li class="navbar__item">
            <a href="{{url('/records')}}" class="navbar__links">RECORDS</a>
          </li>
          <li class="navbar__btn"><x-app-layout></x-app-layout></li>
      </div>
    </nav>
<!--Card section-->
<!--<div class="main-section">
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Try</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam aspernatur officiis quos. Iure eveniet consequuntur ad impedit! Eligendi culpa molestiae id sed eaque unde nostrum quia eius ex quisquam.</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Try</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam aspernatur officiis quos. Iure eveniet consequuntur ad impedit! Eligendi culpa molestiae id sed eaque unde nostrum quia eius ex quisquam.</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Try</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam aspernatur officiis quos. Iure eveniet consequuntur ad impedit! Eligendi culpa molestiae id sed eaque unde nostrum quia eius ex quisquam.</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>
    
</div>-->

<h1 class="h1">TOTAL REGISTERED DRIVERS</h1>
<div class="search">
    
    @if (session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">X</button>
  </div>
 
    @endif
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Sort By</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="{{url('/asc_date')}}">sort date asc</a>
          <a href="{{url('/vechile_type')}}">sort by plate number</a>
          <a href="{{url('/driver_name')}}">sort by driver name</a>
        </div>
      </div>
<form  action="{{url('/search')}}" method="post" role="search">
    @csrf
    <input style="  border: 1px solid black;padding-left: 20px;" class="search" type="search" name="search" id="" required placeholder="search here">
  
  </form>
</div><br>

   

  <table id="customers">
    <tr>
      <th>n<span style="text-decoration: underline;">o</span></th>
      <th>Vehicle Name</th>
      <th>vehicle Type</th>
      <th>Plate Number</th>
      <th>Driver's Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Gender</th>
    </tr>
    @foreach ($data as $data )
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->vehicle_name}}</td>
        <td>{{$data->vehicle_type}}</td>
        <td>{{$data->plate_number}}</td>
        <td>{{$data->driver_name}}</td>
        <td>{{$data->driver_phone_number}}</td>
        <td>{{$data->driver_email}}</td>
        <td>{{$data->gender}}</td>
    </tr>
    @endforeach
  </table>




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
    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
  </body>
</html>