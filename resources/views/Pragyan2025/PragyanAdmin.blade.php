<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome in Digital Pragyan</title>
    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <!-- i am going to link the new google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Winky Sans", sans-serif;
          background-color: #f4f6f9;
        }
        /* Styling for the revenue box */
        .revenue-box {
            background: linear-gradient(135deg, #28a745, #218838);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Card Styling */
        .dashboard-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* External Response Card */
        .response-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .revenue-box {
                font-size: 20px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
<center>
    <img src="{{ asset('/image/Pragyan 2025/pragyan logo.jpeg')}}" class="mt-2" alt="Placeholder" style="height:100px; width:100px;border-radius:100%; box-shadow:0px 0px 3px 5px grey;  ">
</center>
<div class="container mt-2">
    <!-- Revenue Box (Top Left) -->
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="revenue-box">
                <h2><i class="fas fa-dollar-sign"></i> Total Revenue: {{ $total_revenue }}</h2>
            </div>
        </div>
    </div>

    <!-- Cards Section -->
    <div class="row mt-">
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-primary text-white p-3 text-center">
            <i class="fas fa-theater-masks icon fa-2x"></i>
            <p>Participants: {{ $cltr_totalStudents }} and Revenue: {{ $cltrPrice }}</p>
            <h3>Cultural Participants</h3>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-warning text-white p-3 text-center">
            <i class="fas fa-graduation-cap icon fa-2x"></i>
            <p>Participants: {{ $sprt_totalStudents }} and Revenue: {{ $sprtPrice }}</p>
            <h3>Academic Participants</h3>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p-3 text-center">
            <i class="fas fa-futbol icon fa-2x"></i>
            <p>Participants: {{ $acdm_totalStudents }} and Revenue: {{ $acdmPrice }}</p>
            <h3>Sports Participants</h3>
        </div>
    </div>
    <div class="col-md-3 mt-2">
        <div class="dashboard-card bg-danger text-white p-3 text-center">
            <i class="fas fa-futbol icon fa-2x"></i>
            <p>Participants: {{ $extr_totalStudents }} and Revenue: {{  $extrPrice }}</p>
            <h3>External Participants</h3>
        </div>
    </div>
</div>


    <!-- External Response Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-center">Cultural</h4>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Years</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($cltr_Data as $cltr)
                            <td>{{ $cltr->name }}</td>
                            <td>{{ $cltr->branch }}</td>
                            <td>{{ $cltr->year }}</td>
                            <td>{{ $cltr->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-3">
                <h4 class="text-center">Sports</h4>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Years</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($sprt_Data as $sprt)
                            <td>{{ $sprt->name }}</td>
                            <td>{{ $sprt->branch }}</td>
                            <td>{{ $sprt->year }}</td>
                            <td>{{ $sprt->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-3">
                <h4 class="text-center">Academics</h4>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Years</th>
                            <th>Prize</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ( $acdm_Data as $acdm)
                            <td>{{ $acdm->name }}</td>
                            <td>{{ $acdm->branch }}</td>
                            <td>{{ $acdm->year }}</td>
                            <td>{{ $acdm->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
                <h4 class="text-center">External Participants</h4>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>events</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ( $extr_Data as $extr)
                            <td>{{ $extr->name }}</td>
                            <td>{{ $extr->college_name }}</td>
                            <td>{{ $extr->event}}</td>
                            <td>{{ $extr->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
