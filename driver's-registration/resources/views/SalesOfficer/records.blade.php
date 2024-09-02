<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata and Stylesheets -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adika Driver's Registration</title>
    <link rel="stylesheet" href="home/styles.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://adikataxi.com/assets/img/favicon.png" sizes="20x20" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="sales/record.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .h1 {
            font-weight: bolder;
            padding-bottom: 50px;
        }
        .center {
            margin-left: 35rem;
        }
        .center_sort {
            margin: auto;
        }
        .search {
            margin: 20px;
        }
        .no-results {
            text-align: center;
            font-weight: bold;
            color: rgb(255, 0, 0);
            font-size: 1.5em;
            padding: 15px;
         
            background-color: transparent;
            width: 100%;
          
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo"><img src="images/logo (1).png" alt=""></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span> <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="{{ url('/index') }}" class="navbar__links">HOME</a>
                </li>
                <li class="navbar__item">
                    <a href="{{ url('/driver_registration') }}" class="navbar__links">DRIVER <span style="margin-left: 10px;">REGISTRATION</span></a>
                </li>
                <li class="navbar__item">
                    <a href="{{ url('/records') }}" class="navbar__links">RECORDS</a>
                </li>
                <li class="navbar__item">
                    <a href="{{route('salesofficer.kpiDashboard')}}" class="navbar__links">KPI</a>
                </li>
                <li class="navbar__btn"><x-app-layout></x-app-layout></li>
            </ul>
        </div>
    </nav>

    <div class="main-area">
        <h1 class="h1">TOTAL REGISTERED DRIVERS</h1>

        <div class="search">
            <form action="{{ url('/records') }}" method="get" role="search">
                @csrf
                <input type="search" name="search" placeholder="Search by plate number or driver name" value="{{ request('search') }}" />
                <select name="sort" class="form-control" style="display: inline-block; width: auto;">
                    <option value="">Sort By</option>
                    <option value="plate_number" {{ request('sort') == 'plate_number' ? 'selected' : '' }}>Plate Number</option>
                    <option value="driver_name" {{ request('sort') == 'driver_name' ? 'selected' : '' }}>Driver Name</option>
                </select>
                <input type="date" name="filter_date" class="form-control" style="display: inline-block; width: auto;" value="{{ request('filter_date') }}" />
                <select name="status" class="form-control" style="display: inline-block; width: auto;">
                    <option value="">Filter by Status</option>
                    <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="applied" {{ request('status') == 'applied' ? 'selected' : '' }}>Applied</option>
                </select>
                <button type="submit" class="btn btn-primary">Apply</button>
                <a class="btn btn-danger" href="{{url('/records')}}">Reset</a>
            </form>
        </div>

        @if($data->isEmpty())
            <p class="no-results">No results found for your search.</p><br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        @else
       
            <div class="table">
                <table id="customers">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Type</th>
                            <th>Plate Number</th>
                            <th>Driver's Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $datas)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $datas->vehicle_name }}</td>
                                <td>{{ $datas->vehicle_type }}</td>
                                <td>{{ $datas->plate_number }}</td>
                                <td>{{ $datas->driver_name }}</td>
                                <td>{{ $datas->driver_phone_number }}</td>
                                <td>{{ $datas->driver_email }}</td>
                                <td>{{ $datas->gender }}</td>
                                <td>{{ $datas->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="center">
                    {{ $data->appends(request()->input())->links() }}
                </div>
            </div>
        @endif
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign__up">advanced transportation services</a>
                    <a href="/">meter taxis</a>
                    <a href="/">car rentals</a>
                    <a href="/">delivery</a>
                    <a href="/">shipping, and carpooling.</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact</a>
                    <a href="/">Contact: 7000</a>
                    <a href="/">Address: Bloom Tower, Addis Ababa, Ethiopia</a>
                    <a href="/">Email: contact@adikataxi.com</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Need Help?</h2>
                    <a href="/">FAQs</a>
                    <a href="/">Privacy Policy</a>
                </div>
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a>
                    <a href="/">Facebook</a>
                    <a href="/">YouTube</a>
                    <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="navbar__logo"><img src="images/logo (1).png" alt=""></a>
                </div>
                <p class="website__rights">© Adika 2024. All rights reserved</p>
                <div class="social__icons">
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="social__icon--link" href="//www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber" target="_blank" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script src="home/script.js"></script>
</body>
</html>
