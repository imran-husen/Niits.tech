<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congratulations!</title>

    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Here i am adding teh code of the google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    
    <style>
        body {
            background-color: #0d1117;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            position: relative;
            font-family: "Arima", system-ui;
        }

        /* Fireworks Animation Container */
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        /* Congratulation Text Animation */
        .congrats-text {
            font-size: 30px;
            opacity: 0;
            animation: fadeIn 2s ease-in-out forwards;
            z-index: 1;
            text-shadow: 0 0 10px #ff0, 0 0 20px #ff8c00;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Animated Button */
        .home-btn {
            margin-top: 20px;
            padding: 12px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            background: linear-gradient(90deg, #ff416c, #ff4b2b);
            border-radius: 5px;
            display: inline-block;
            transition: transform 0.3s ease-in-out;
            z-index: 1;
        }

        .home-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 65, 108, 0.8);
        }
    </style>
</head>
<body>

    <!-- Fireworks Canvas -->
    <canvas id="fireworks"></canvas>

    <!-- Congratulations Text -->
    <div class="congrats-text">🎉 Congratulations! 🎉 <br> You have been registered for the Digital Pragyan Event!</div>
    <p class="congrats-text" style="font-size:15px">After verifying all your details, I will send the confirmation of the event participation receipt to your given email address.</p>
    <!-- Home Page Link -->
    <a href="{{ url('/Cultural-Events')}}" class="home-btn">Return to Home</a>

    <!-- Confetti.js for Fireworks Effect -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1"></script>

    <script>
        // Fireworks Animation
        function fireworkEffect() {
            var duration = 5 * 1000; // 5 seconds
            var end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 5,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 }
                });

                confetti({
                    particleCount: 5,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 }
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            })();
        }

        // Trigger Fireworks on Page Load
        window.onload = function() {
            fireworkEffect();
        };
    </script>

</body>
</html>
