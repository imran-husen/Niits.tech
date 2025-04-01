<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration for external Cadidate</title>
     <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- i am going to link the new google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Winky Sans", sans-serif;
        }
        .qr-card {
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translateX(-50%) translateY(-20px);
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
            display: none;
            z-index: 1050;
        }
        .show-card {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
            display: block;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column align-items-center vh-100 pt-5">
    <div class="qr-card card shadow-lg p-2" style="width: 250px;">
        <img id="qrImage" src="{{ asset('/image/Pragyan 2025/UPI QR.jpeg')}}" class="card-img-top" alt="QR Code">
        <div class="card-body text-center">
            <p class="card-text">Scan to Pay</p>
        </div>
    </div>
    <center>
        <img src="{{ asset('/image/Pragyan 2025/pragyan logo.jpeg')}}" class="mt-2" alt="Placeholder" style="height:100px; width:100px;border-radius:100%; box-shadow:0px 0px 3px 5px grey;  ">
    </center>
    <div class="container text-center mt-1">
        <h4 class="mb-1">Make a Payment</h4>
        <p class="text-muted">To proceed with the payment, either scan the QR code or click the "Direct Pay" button. You can also download the QR code for later use. For more details, download the Participating Events PDF below.</p>
        <a href="your-pdf-link.pdf" class="btn btn-link m-0 p-0" target="_blank">Download Payment Instruction & Events Price lilst </a>
        <div class="d-flex justify-content-center gap-2 mt-2">
            <button class="btn btn-primary" id="toggleQR">Show QR Code</button>
            <button class="btn btn-success" id="directPay">Direct Pay</button>
            <button class="btn btn-warning" id="downloadQR">Download QR</button>
        </div>
        <div class="mt-2 text-center">
            <button class="btn btn-danger" id="callButton" onclick="window.location.href='tel:+91 9026897118'">
                  📞 Click to Call Support (+91 9026897118)
            </button>
        </div>
        <div class="mt-4">
            <!-- Your form for data collection can be placed here -->
        </div>
    </div>

    <!-- Here i am going to the right code of the feild forms -->
    <div class="container Fluid">
    <div class="container bg-white p-2 shadow rounded">
        <h2 class="text-center mb-4">Event Registration</h2>
        <form id="eventForm" action="{{ route('Ext_data')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="contactNumber" name="number" pattern="[0-9]{10}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="mail" required>
            </div>
            <div class="mb-3">
                <label for="collegeName" class="form-label">College Name</label>
                <input type="text" class="form-control" id="collegeName" name="college" required>
            </div>
            <div class="mb-3">
                <label for="eventType" class="form-label">Event Type</label>
                <select class="form-select" id="eventType" name="event" required>
                    <option value="">Select Event Type</option>
                    <option value="Academics Events">Academics Events</option>
                    <option value="Sports Events">Sports Events</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="eventName" class="form-label">Select Event</label>
                <select class="form-select" id="eventName" name="event_name" required>
                    <option value="">Select an Event</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="paymentReceipt" class="form-label">Upload Payment Receipt</label>
                <input type="file" class="form-control" id="paymentReceipt" name="reciept" accept="image/*,.pdf" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            const events = {
                "Academics Events": ["Debate:₹100", "Extempore:₹100", "E-Gaming(PUBG/Ludo):₹100","Photography:₹0","Technical Quize:₹0","Quize:₹0","Handwork Modeling:₹0","Sketch Competitons:₹0","Tambola:₹100",],
                "Sports Events": ["Cricket:₹2000", "Football:₹600","Table Tenis-Single:₹100", "Table Tenis-Double:₹150", "Race-Single:₹200", "Race-Relay:₹300", "Kabbaddi-Girls:₹350","Kabbaddi-Boys:₹400", "Volleyball-Girls:₹350","Volleyball-Boys:₹400","Tug 0f War-Girls:₹200", "Tug of War-Boys:₹250", "Badminton-Single:₹100", "Badminton-Double:₹150","Chess:₹150","Carrom:₹200","Kho-kho(Girls):₹200", "Kho-Kho(Boys):₹300", "Long-Jump:₹100","Arm Wrestling:₹100"]
            };

            $('#eventType').change(function () {
                let selectedType = $(this).val();
                let eventDropdown = $('#eventName');
                eventDropdown.empty().append('<option value="">Select an Event</option>');
                if (selectedType in events) {
                    events[selectedType].forEach(event => {
                        eventDropdown.append(new Option(event, event));
                    });
                }
            });

            $('#eventForm').submit(function (event) {
                if (!this.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                this.classList.add('was-validated');
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#toggleQR').click(function(){
                if ($('.qr-card').hasClass('show-card')) {
                    $('.qr-card').removeClass('show-card');
                    setTimeout(() => $('.qr-card').hide(), 500);
                    $('#toggleQR').text('Show QR Code');
                } else {
                    $('.qr-card').show();
                    setTimeout(() => $('.qr-card').addClass('show-card'), 10);
                    $('#toggleQR').text('Hide QR Code');
                }
            });

            $('#directPay').click(function(){
                window.location.href = 'upi://pay?pa=vikasvisu77-1@okicici&pn=Vikash%20SINGH&aid=uGICAgIC1oIXUIA'; // Replace with actual payment link
            });

            $('#downloadQR').click(function(){
                let qrImage = document.getElementById('qrImage');
                let link = document.createElement('a');
                link.href = qrImage.src;
                link.download = 'QR_Code.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
