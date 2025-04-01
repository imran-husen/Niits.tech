<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Panles</title>
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS File -->
    <link href="{{ asset('css/pragyan.css') }}" rel="stylesheet">

     <!-- linking of the code -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body style="background-color:white; color: black; padding-top:30px">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold"  > Welcome Registration Panels</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 d-none d-md-block">  
                <h2 style=" font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Guidlines for Registration---</h2>
                <ul>
                  <li><strong>Data Collection & Entry:</strong> The accountant must collect accurate student data and enter it into the system.</li>  
                  <li><strong>Card Generation & Verification:</strong> After filling in all required details, generate student cards and carefully cross-check them with students to ensure accuracy.</li>  
                  <li><strong>Download & Storage:</strong> Once verified, download the student cards and securely save them on a local device.</li>  
                 <li><strong>Final Confirmation:</strong> Click the "Confirm" button to securely store the verified student card data in the database after a final review to prevent errors.</li>  
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('/image/Pragyan 2025/pragyan logo.jpeg')}}" class="img-fluid rounded" alt="Placeholder" style="height:200px; width:200px; border-radius:50% ">
            </div>
        </div>
    </div>
<hr>
    <!-- Here i am writing the code for the registration cards -->
    <h3 class="text-center mt-3 fw-bold" style=" color: rgb(21, 23, 21)" id="event">Registeration Link</h3>
<p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">By following the link below, you can access a form that appears when you click on the cards. This form must be filled out by the accountant to generate participant cards.</p>
<!-- The cards size is 300x310 and image size in 300x200  -->
<div class="container d-flex justify-content-center">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="event-cards text-center mt-2">
            <a href="{{ url('/Cultural-Events')}}"> <img src="{{ asset('/image/Pragyan 2025/Cultural Events.png')}}" class="card-img-top" alt="Event Image"></a>
            </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href="{{ url('/Sports-Events')}}"> <img src="{{ asset('/image/Pragyan 2025/Sports.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href="{{ url('/Academic-Events')}}"> <img src="{{ asset('/image/Pragyan 2025/Acadmics.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
        <div class="col-auto">
        <div class="event-cards text-center mt-2">
            <a href="{{ url('/External-Events-Participation')}}"> <img src="{{ asset('/image/Pragyan 2025/external applicants.png')}}" class="card-img-top" alt="Event Image"></a>
        </div>
        </div>
    </div>
</div>

<!-- Here i am writing the code where Accountant see the total participants -->
 <h4 class="text-center fw-bold mt-3"> Total Registration of Participants</h4>
<div class="row mx-3">
<div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p- text-center">
            <h5>Cultural Participants: <b>{{ $cltr_totalStudents }}</b></h5>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p- text-center">
            <h5>Academic Participants: <b>{{  $sprt_totalStudents }}</b></h5>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p- text-center">
            <h5>Sports Participants: <b>{{  $acdm_totalStudents }}</b></h5>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p- text-center">
            <h5>External Participants <b> {{ $extr_totalStudents }}</b></h5>
        </div>
    </div>
</div> 


<!-- Here we render the all data for the pendings of the external college data -->
<div class="container mt-4">
    <h2 class="text-center mb-3"> External Participant Details</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>E-Mail</th>
                    <th>College Name</th>
                    <th>Event Types</th>
                    <th>Event Name</th>
                    <th>Payment Receipt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach ($extrn_Data as $extData)
                    <td>{{ $extData->name }}</td>
                    <td>{{ $extData->gender }}</td>
                    <td>{{ $extData->number}}</td>
                    <td>{{ $extData->mail }}</td>
                    <td>{{ $extData->College }}</td>
                    <td>{{ $extData->event }}</td>
                    <td>{{ $extData->event_name }}</td>
                    <td><a href="{{ $extData->reciept }}"> View Receipt</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 New India Info Tech Society| All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle (Includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: jQuery (Required for some plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</body>
</html>
