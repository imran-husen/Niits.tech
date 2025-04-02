<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Datails of the Sports events Data</title>
    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- i am going to link the new google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Winky Sans", sans-serif;
            background-color: #f4f6f9;
        }
    </style>
</head>
<body>
    <center>
    <img src="{{ asset('/image/Pragyan 2025/pragyan logo.jpeg')}}" class="mt-2" alt="Placeholder" style="height:100px; width:100px;border-radius:100%; box-shadow:0px 0px 3px 5px grey;  ">
    </center>

    <div class="container mt-0">
        <h2 class="text-center text-primary">Cultural Events Participants List</h2>

        <!-- Search Form -->
        <div class="card p-3 mb-4">
          <form action="{{ route('sprt_Data') }}" method="GET">
           <div class="row">
            <div class="col-md-8">
                <input type="tel" id="searchInput" name="number" class="form-control mt-1" placeholder="Enter Mobile Number for search your details">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success w-100 mt-1">Get Details</button>
            </div>
        </div>
           </form>
        </div>

        <!-- Student Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Roll Number</th>
                        <th>Event Name</th>
                        <th>Mobile Number</th>
                    </tr>
                </thead>
                <tbody id="studentTable">
                        @foreach ( $sportData as $acdm)
                            <td>{{ $acdm->name }}</td>
                            <td>{{ $acdm->branch }}</td>
                            <td>{{ $acdm->roll_number }}</td>
                            <td>{{ $acdm->event_name }}</td>
                            <td>{{ $acdm->year }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
