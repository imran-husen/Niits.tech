<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pragyan 2025</title>
    
    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS File -->
    <link href="{{ asset('css/pragyan.css') }}" rel="stylesheet">

    <!-- Here i am adding teh code of the google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background: linear-gradient(90deg, #004aad, #00c6ff);">
    <div class="container-fluid">
        <!-- Left side navbar menu -->
        <a class="navbar-brand fw-bold text-danger" href="#">Digi-Pragyan 2025</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Menu -->
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/External-Participants')}}">External Participants</a>
                </li>

                <!-- Events Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{ url('/Working-on-Page')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="{{ url('/Cultural-Events-Participants-List')}}">Cultural</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ url('/sport-Events-Participants-List')}}">Sport</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ url('/Academic-Events-Participants-List')}}">Academic</a></li>
                    </ul>
                </li>

                <!-- Certificates Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarCertificates" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Certificates
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarCertificates">
                        <li><a class="dropdown-item text-dark" href="{{ url('/Working-on-Page')}}">Cultural</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ url('/Working-on-Page')}}">Academic</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ url('/Working-on-Page')}}">Sports</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right side admin panel and buttons -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <!-- Admin Panel Button -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/Login-Accountant')}}">Registration</a>
                </li>
                <!-- Buttons -->
                <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('/Log-in-Admin')}}"> <button class="btn btn-outline-light" type="button">Admin</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Navigation bar has been closed -->

 <!-- Section with Heading and Description -->
  <!-- Section with Heading and Description -->
  <section class="container my-2">
    <div class="row">
      <!-- Left Section -->
      <div class="col-md-6 d-flex justify-content-start align-items-center">
        <div>
          <h4 class=" text-center fw-bold" style=" color: rgb(7, 241, 27)"> Digital-Pragyan 2k25</h4>
          <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">
          Digital Pragyan is an annual tech festival in BTech colleges, featuring coding challenges, gaming tournaments, workshops, and networking opportunities, blending technology, innovation, and entertainment for an engaging and educational experience.
          </p>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-md-6 d-flex justify-content-end align-items-center">
        <div>
        <h4 class=" text-center fw-bold" style=" color: rgb(7, 241, 27)"> What is new?</h4>
          <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">
          Digital Pragyan introduces new workshops on emerging technologies like AI, blockchain, and IoT, along with innovative competitions, virtual events, and collaboration opportunities, enhancing learning, creativity, and industry engagement for students.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- This is the section of the executive board member -->
    <!-- This is the cards of the mentors by the college -->
    <h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)">Executive Events Member</h3>
    
    <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">My mentors at NIITS are visionary leaders, including esteemed HODs and our dedicated Dean Sir. Their guidance, expertise, and support drive innovation, technical excellence, and professional growth in our society.</p>

<div class="container col-12 col-lg-6 mt-0">
   <div class="row row-cols-2 row-cols-md-4 g-2">  
       <!-- Mentor 1 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Pragyan 2025/Vikas Sir.jpg')}}" alt="Mentor 1">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);"> Mr. Vikas Singh</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Dean Student Walefare</p>
           </div>
       </div>

       <!-- Mentor 2 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/IT HOD')}}" alt="Mentor 2">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Ritik</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Head Fest</p>
           </div>
       </div>

       <!-- Mentor 3 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Pragyan 2025/Prachi Tiwari.jpg')}}" alt="Mentor 3">
               <p style="font-size:15px; font-weight:bold; padding:0px; margin:0px; color: rgb(5, 220, 244);">Prachi Tiwari</p>
               <p style="font-size:12px; font-weight:bold; padding:0px; margin:0px">Head Fest</p>
           </div>
       </div>

       <!-- Mentor 4 -->
       <div class="col">
           <div class="class-3">
               <img src="{{ asset('/image/Pragyan 2025/Jya Mishra.jpg')}}" alt="Mentor 4">
               <p style="font-size:15px; font-weight:bold; padding:0px;margin:0px; color: rgb(5, 220, 244);">Laxyajya Mishra</p>
               <p style="font-size:12px; font-weight:bold; padding:0px;margin:0px">Co-Fest Head</p>
           </div>
       </div>
   </div>
</div>

<!-- Here i am creating a box for the form redirection -->
 <!-- thsi is the coding of teh upcomungs evets -->
<h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)" id="event">Upcomings most Events</h3>
<p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">Get ready for Pragyan – the ultimate fusion of technology, innovation, and creativity! Packed with exciting competitions, cutting-edge workshops, industry insights, and thrilling events, Pragyan is coming soon to challenge your skills, spark your imagination, and connect you with the future of tech!</p>
<!-- The cards size is 300x310 and image size in 300x200  -->
<div class="container d-flex justify-content-center">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="event-cards text-center mt-2">
            <a href=""> <img src="{{ asset('/image/Pragyan 2025/Cultural Events.png')}}" class="card-img-top" alt="Event Image"></a>
            </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href=""> <img src="{{ asset('/image/Pragyan 2025/Acadmics.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href=""> <img src="{{ asset('/image/Pragyan 2025/Sports.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
    </div>
</div>

<!-- Here i am writing the code of the Digital pragyan events and its pricing -->
<h3 class="text-center mt-3 fw-bold" style=" color: rgb(7, 241, 27)" id="event">List of events and its price</h3>
<p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">Pragyan events will feature exciting competitions, Hackathon, and tech talks, with registration opening from <b class="text-danger"> April 2, 2025, to April 15, 2025. Registration will be helding in Room 306, BTech Academic Block.</b> Pricing details are given below. Don’t miss out on this amazing opportunity!</p>
<div class="container my-2">
  <!-- For Desktop View: Three tables in one row -->
  <div class="row">
    <!-- First Table -->
    <div class="col-12 col-md-4 mb-2">
      <h3 class="text-center fw-bold" style="color:red">Sports Events</h3>
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>Sports Name</th>
            <th>Internal Fees</th>
            <th>External Fees</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Cricket</td>
            <td>₹1500</td>
            <td>₹2000</td>
          </tr>
          <tr>
            <td>Football</td>
            <td>₹600</td>
            <td>₹1100</td>
          </tr>
          <tr>
            <td>Table Tennis (single/Double)</td>
            <td>₹50/₹100</td>
            <td>₹100/₹150</td>
          </tr>
          <tr>
            <td>Race (Single/Relay)</td>
            <td>₹100/₹150</td>
            <td>₹200/₹300</td>
          </tr>
          <tr>
            <td>Volleyball (Girls/Boy)</td>
            <td>₹300/₹350</td>
            <td>₹350/₹400</td>
          </tr>
          <tr>
            <td>Tug of War (Girls/Boys)</td>
            <td>₹100/₹150</td>
            <td>₹200/₹250</td>
          </tr>
          <tr>
            <td>Badminton (Single/ Doubles)</td>
            <td>₹50/₹100</td>
            <td>₹100/₹150</td>
          </tr>
          <tr>
            <td>Chess</td>
            <td>₹100</td>
            <td>₹150</td>
          </tr>
          <tr>
            <td>Carrom</td>
            <td>₹100</td>
            <td>₹200</td>
          </tr>
          <tr>
            <td>Kho-Kho (Girls/Boys) </td>
            <td>₹150/₹200</td>
            <td>₹200/₹300</td>
          </tr>
          <tr>
            <td>Long Jump</td>
            <td>₹50</td>
            <td>₹100</td>
          </tr>
          <tr>
            <td>Beg Barrow steal</td>
            <td>₹300/Team</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Mugical Chair</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Cricket-Girls</td>
            <td>₹1000</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Jevelin Throw/ Shot Put</td>
            <td>₹50/₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Arm Wrestling</td>
            <td>₹50</td>
            <td>₹50</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Second Table -->
    <div class="col-12 col-md-4 mb-2">
    <h3 class="text-center fw-bold" style="color:red">Cultural Events</h3>
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>Events</th>
            <th>Internal Fees</th>
            <th>External Fees</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fashion Show</td>
            <td>₹400</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Dancing Fever (Solo/Group)</td>
            <td>₹100/Person</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Singing Sensation (Solo and Group)</td>
            <td>₹100/Person</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Mehandi</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Rangoli</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Poster Making</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Card Making</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Talent Hunt</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Mime</td>
            <td>₹100</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Film Making & Drama</td>
            <td>₹100/Person</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Dart Shooting</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Third Table -->
    <div class="col-12 col-md-4 mb-2">
    <h3 class="text-center fw-bold" style="color:red">Acadmics Events</h3>
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>Event Name</th>
            <th>Internal Fees</th>
            <th>External Fees</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Debate</td>
            <td>₹50</td>
            <td>₹100</td>
          </tr>
          <tr>
            <td>Extempore</td>
            <td>₹50</td>
            <td>₹100</td>
          </tr>
          <tr>
            <td>E-Gaming (PUBG/ Free-Fire) and Ludo</td>
            <td>₹100</td>
            <td>₹100</td>
          </tr>
          <tr>
            <td>Content Writing</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Photography</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Photography</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Robotics</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Technical Quiz</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Quize</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Hand Work Modelling </td>
            <td>₹100</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Sketch Competitions</td>
            <td>₹50</td>
            <td>NILL</td>
          </tr>
          <tr>
            <td>Tambola</td>
            <td>₹50</td>
            <td>₹100</td>
          </tr>
          <tr>
            <td>Coding</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Graphics Designing</td>
            <td>₹50</td>
            <td>N/A</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 
</div>
  </div>
</div>

<!-- in this line i am writing the code of the footers -->
 <!-- Footer -->
<footer class="bg-dark text-white py-2 mt-2">
  <div class="container">
    <div class="row">
      <!-- Links in one row -->
      <div class="col-12 text-center mb-2 mb-md-0">
        <a href="#" class="text-white mx-2">Home</a>
        <a href="#" class="text-white mx-2">Events</a>
        <a href="#" class="text-white mx-2">Certificates</a>
        <a href="#" class="text-white mx-2">About</a>
      </div>
    </div>
    <!-- Copyright or Reserved message -->
    <div class="row">
      <div class="col-12 text-center">
        <small>&copy; 2025 All Rights Reserved:Developed by NIITS Society</small>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
