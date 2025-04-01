<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
       <link rel="stylesheet" href="{{ asset('css/home.css') }}">
       <script src="{{ asset('javascript/main.js') }}"></script>

   <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="{{ asset('/image/main_logo.png') }}" href="favicon.png">
       
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!-- Here i am adding teh code of the google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Home</title>
</head>
<body>
<!-- Here i am writing the code of the animation of the preloader of landing page -->
<div class="preloader">
        <div class="logo-sphere">
            <img src="{{ asset('/image/main_logo.png') }}" alt="NIITS Logo">
        </div>
    </div>

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
                        <li><a class="dropdown-item" href="{{ url('/Working-on-Page')}}">Hackthon</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Working-on-Page')}}">Gallery</a></li>
                <!-- Events Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="eventsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Certificats
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/Working-on-Page')}}">Pragyan Certificates</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Working-on-Page')}}">Internship Certificates</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Register') }}">Membership</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Working-on-Page')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/Working-on-Page')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>



  <!-- Here i am going to write the code of crousel image -->
     <!-- This is the body section of the code -->
       <!-- Here i am going to the write the code of the crousel image -->
<!-- <div id="carouselExampleAutoplaying" class="carousel slide d-block d-lg-none" style="margin-top:57px" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/image/slider-1.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider-2.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider-3.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/image/slider-4.png')}}" class="d-block w-100" alt="...">
    </div>
  </div> 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<!-- Here i am going to create a new about of the NIITS -->
<section class="py-md-2 d-none d-md-block" style="margin-top:70px">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
          <div class="col-12 col-lg-6">
            <div class="row justify-content-xl-center">
              <div class="col-12 col-xl-10">
                <h1 class="mb-3 fs-4 fw-bold">Transforming Your Vision into Reality</h1>
                <h2 class="mb-3 text-primary fs-4 fw-bold">NIITS empowers innovation, education, networking, ethics, and industry advancement.</h2>
                <div class="d-flex align-items-center mb-3">
                  <div class="me-3 text-secondary">
                    <p class="fs-6 m-0 text-secondry"></p>
                  </div>
                </div>
                <!-- Provide the better link here for the connections-->
                <a href="tel:+91 7081023366"><button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect Now</button></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 ">
            <video   height="364px" width="650px" autoplay muted loop src = "{{ asset('/image/Niits Website Videos.mp4')}}" frameborder="0"  type="video/mp4"></video>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Here i am writing the code for the motice board in the strip form -->
    <div class="container" style="margin-top:70px">
    <div class="notice-container">
        <!-- Sticky Notice Board Label -->
        <div class="notice-label">
            NOTICE
        </div>
        <!-- Marquee Notice Strip -->
        <div class="notice-marquee text-primary">
            <marquee behavior="scroll" direction="left" scrollamount="7">
                <a href="#" style="text-decoration:none">🔹 Notice 1: School Annual Function on March 25 | </a>
                🔹 Notice 2: Exam Results Released | 
                🔹 Notice 3: Admissions Open for 2025 | 
                🔹 Notice 4: Sports Day on April 10 | 
                🔹 Notice 5: Parent-Teacher Meeting on March 20 | 
                🔹 Notice 6: Library Closed on March 30 | 
                🔹 Notice 7: New Timetable Effective from April 1 |
            </marquee>
        </div>
    </div>
</div>

    <!-- Here a creating a quick link of the socila media --> 
    <div class="container mt-3">
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="custom-card p-3">
                        <h5 class="text-light fw-bold">Hackathons</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="custom-card p-3">
                        <h5 class="text-light fw-bold">Internships</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="custom-card p-3">
                        <h5 class="text-light fw-bold">Coding</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="custom-card p-3">
                        <h5 class="text-light fw-bold">Developmets</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
   <hr>
    <!-- This is the cards of the mentors by the college -->
     <h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)"> Our Mentors </h3>
    
     <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">My mentors at NIITS are visionary leaders, including esteemed HODs and our dedicated Dean Sir. Their guidance, expertise, and support drive innovation, technical excellence, and professional growth in our society.</p>

 <div class="container col-12 col-lg-6 mt-0">
    <div class="row row-cols-2 row-cols-md-4 g-2">  
        <!-- Mentor 1 -->
        <div class="col">
            <div class="class-3">
                <img src="{{ asset('/image/Dean sir.jpeg')}}" alt="Mentor 1">
                <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Mr. Durgesh Verma</p>
                <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Dean Accademics</p>
            </div>
        </div>

        <!-- Mentor 2 -->
        <div class="col">
            <div class="class-3">
                <img src="{{ asset('/image/IT HOD.jpg')}}" alt="Mentor 2">
                <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Dr. J.P. Dixit</p>
                <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Head of Department- IT</p>
            </div>
        </div>

        <!-- Mentor 3 -->
        <div class="col">
            <div class="class-3">
                <img src="{{ asset('/image/Chandan sir.jpg')}}" alt="Mentor 3">
                <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Mr. Chandan Gupta</p>
                <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Head of Department- CSD, AIML</p>
            </div>
        </div>

        <!-- Mentor 4 -->
        <div class="col">
            <div class="class-3">
                <img src="{{ asset('/image/IT HOD.jpg')}}" alt="Mentor 4">
                <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Mrs. Neha Singh</p>
                <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Head of Departments CSE</p>
            </div>
        </div>
    </div>
</div>

<!-- thsi is the coding of teh upcomungs evets -->
<h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)" id="event">Upcomings most Events</h3>
<p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">"Participate in the exciting upcoming events at NIITS and college-level competitions to showcase your talent, enhance your skills, network with peers, and gain invaluable experience for your academic and professional growth."</p>
<!-- The cards size is 300x310 and image size in 300x200  -->
<div class="container d-flex justify-content-center">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="event-cards text-center mt-2">
            <a href="{{ url('/Pragyan-2025')}}"> <img src="{{ asset('/image/Digital-Pragyan 2k25.png')}}" class="card-img-top" alt="Event Image"></a>
            </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href="{{ url('/Working-on-Page')}}"> <img src="{{ asset('/image/Codeathon 2k25.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href="{{ url('/Working-on-Page')}}"> <img src="{{ asset('/image/Hackathon 2k25.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
    </div>
</div>

<!-- Here i am creating a cards for the most executive member of the Society -->
<h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)">Executive members</h3>
    
    <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">"The core team executive members of the NIITS Technical Society at RRGI Campus are dedicated leaders committed to fostering innovation, collaboration, and technical excellence among students."</p>

<div class="container col-12 col-lg-6 mt-0">
   <div class="row row-cols-2 row-cols-md-4 g-2">  
       <!-- Mentor 1 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Roushan.jpg')}}" alt="Mentor 1">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Roushan Kumar</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">President</p>
           </div>
       </div>

       <!-- Mentor 2 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Imran.jpeg')}}" alt="Mentor 2">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Imran Husen</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Vice-President</p>
           </div>
       </div>

       <!-- Mentor 3 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Sushant.jpeg')}}" alt="Mentor 3">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Sushant Pandey</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Secretary</p>
           </div>
  </div>
   </div>
</div>

    <!-- This is cards of the upcoming events -->
    <h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)">Major Past Events </h3>
    
    <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">NIITS has successfully organized numerous technical events, including coding competitions, hackathons, AI workshops, cybersecurity seminars, and cloud computing boot camps. These events provided hands-on learning, industry exposure, and mentorship, empowering students to excel in the evolving tech landscape.</p>

     <center>
     <div class="container">
    <div class="carousel-container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 1">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 2">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 3">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 4">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 5">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-1">
                        <img src="" alt="Image 6">
                    </div>
                </div>
            </div>
            <!-- Pagination & Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</center>

<!-- Here i am writing the code for the footter -->
<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- About NIITS -->
            <div class="col-md-4 mb-4">
                <h5 style="color:blue; font-weight:bold"">About NIITS Society</h5>
                <p>NIITS is dedicated to empowering students with technical skills, fostering innovation, and building a strong community of future leaders.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5 style="color:blue; font-weight:bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#event">Events</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5 style="color:blue; font-weight:bold">Contact Us</h5>
                <p>Email: <a href="mailto:niits2025@rrimt.in">niits2025@rrimt.in</a></p>
                <p>Phone: +91 70810 23366</p>
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
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3, // Desktop: Show 3 cards
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 10 }, // Mobile: Show 1 card
            768: { slidesPerView: 3, spaceBetween: 30 } // Desktop: Show 3 cards
        }
    });
</script>

    
<script>
        // Hide preloader after 5 seconds
        window.onload = function () {
            setTimeout(() => {
                document.querySelector(".preloader").style.opacity = "0";
                setTimeout(() => {
                    document.querySelector(".preloader").style.display = "none";
                }, 1000);
            }, 3000);
        };
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>