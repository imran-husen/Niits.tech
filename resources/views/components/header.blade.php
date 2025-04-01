<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
       <script src="{{ asset('javascript/main.js') }}"></script>

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="{{ asset('/image/main_logo.png') }}" href="favicon.png">
       
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">

    <!-- Here i am adding teh code of the google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>{{$title}}</title>
</head>
<body>
<!-- I am goin the writing the code of the navigation bar -->
<nav class="navbar navbar-expand-lg glass-navbar fixed-top">
    <div class="container">
        <!-- User Profile Image Instead of Brand Name -->
        <a class="navbar-brand" href="{{ url('/')}}">
            <img src="{{ asset('/image/main_logo.png') }}" alt="Profile" class="profile-img">
        </a>

        <!-- White Toggle Button with No Focus Effect -->
        <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
                
                <!-- Events Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="eventsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Events
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/Pragyan-2025')}}">Pragyan 2k25</a></li>
                        <li><a class="dropdown-item" href="#">Hackthon</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link text-white" href="#">Gallery</a></li>
                <!-- Events Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="eventsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Certificats
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pragyan Certificates</a></li>
                        <li><a class="dropdown-item" href="#">Internship Certificates</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Register') }}">Membership</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- This is the body section of the page -->
{{$bodycode}}


<!-- I will create a footers -->
<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- About NIITS -->
            <div class="col-md-4 mb-4">
                <h5>About NIITS Society</h5>
                <p>NIITS is dedicated to empowering students with technical skills, fostering innovation, and building a strong community of future leaders.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5>Contact Us</h5>
                <p>Email: <a href="mailto:info@niits.com">info@niits.com</a></p>
                <p>Phone: +91 98765 43210</p>
                <p>Location: RRGI Campus, India</p>
            </div>
        </div>

        <hr class="bg-light">
        
        <!-- Footer Bottom -->
        <div class="text-center">
            <p class="mb-0">© 2025 NIITS Society. All Rights Reserved.</p>
        </div>
    </div>
</footer>



    <!-- Here i am add the canvas library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
