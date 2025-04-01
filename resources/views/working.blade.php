<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- For other formats like PNG, use the following -->
  <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Under Construction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Animation for the text */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animated-message {
      animation: fadeInUp 1.5s ease-out forwards;
    }

    /* Background styling */
    .message-container {
      background-color: #f8d7da;
      color: #721c24;
      padding: 50px;
      border-radius: 10px;
      text-align: center;
      margin-top: 100px;
    }

    .message-container h1 {
      font-size: 2.5rem;
    }

    .message-container p {
      font-size: 1.2rem;
      margin-top: 20px;
    }

    .emoji {
      font-size: 3rem;
    }

    /* For Mobile View */
    @media (max-width: 768px) {
      .message-container {
        padding: 30px;
      }

      .message-container h1 {
        font-size: 2rem;
      }

      .message-container p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<!-- Message Section -->
<div class="container">
  <div class="message-container animated-message">
    <div class="emoji">😔</div>
    <h1>Sorry!</h1>
    <p>Dear Students page is currently under construction.</p>
    <p>It will be coming soon and will be even better. Stay tuned! 🚧</p>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
