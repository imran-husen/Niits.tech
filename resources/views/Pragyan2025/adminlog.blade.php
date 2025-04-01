<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- i am going to link the new google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Winky Sans", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #4A90E2, #145A32);
        }
        .login-container {
            width:400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .login-container:hover {
            transform: scale(1.05);
        }
        .login-container img {
            width: 80px;
            margin-bottom: 15px;
        }
        .form-control {
            transition: all 0.3s ease-in-out;
        }
        .form-control:focus {
            box-shadow: 0 0 10px rgba(74, 144, 226, 0.7);
            border-color: #4A90E2;
        }
    </style>
</head>
<body>
    <div class="login-container m-1">
        <img src="{{ asset('/image/Pragyan 2025/pragyan logo.jpeg')}}" alt="Company Logo">
        <h3>Admin Login</h3>
        <form action="{{ route('event_Admin')}}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email"  name="mail" placeholder="Enter your email" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control"  name="pass" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
