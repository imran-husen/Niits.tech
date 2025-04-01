<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- For other formats like PNG, use the following -->
   <link rel="icon" href="{{ asset('/image/main_logo.png') }}" type="image/png"> 


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics Event Participation Reciept</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- QR Code Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <!-- HTML2Canvas for Image Download -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <!-- linking of the code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color:black;
            padding: 20px;
            font-family: "Arima", system-ui;
        }
        .card-container {
            width: 450px;
            height: 250px;
            background: #ffffff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-strat;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 15px;
            position: relative;
            overflow: hidden;
        }
        .qr-container {
            width: 120px;
            height: 120px;
            background: white;
            padding: 5px;
            border-radius: 5px;
            margin-right: 20px;
            margin-left:15px
        }
        .details h6 {
            text-align: left;
            font-size: 13px;
            line-height: 0.5;
            flex-grow: 1;
            padding-left: 5px;
        }
        .logo {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .heading {
            position: absolute;
            top: 15px;
            width: 100%;
            text-align: center;
            font-weight: bold;
            color: red;
            font-size: 25px;
        }
        .sub-heading {
            position: absolute;
            bottom: 5px;
            width: 100%;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4 fw-bold text-danger">Academics Event Participation Reciept</h2>

    <div class="card p-4">
        <form id="studentForm"  action="{{ route('academicEvents') }}" method="post" onsubmit="return confirmSubmit()">
        @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Roll Number:</label>
                    <input type="text" class="form-control" id="roll" name="roll_number" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mobile Number:</label>
                    <input type="tel" class="form-control" id="mobile" name="number" required pattern="[0-9]{10}" placeholder="Enter 10-digit number">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Course:</label>
                    <select class="form-control" id="course" name="course" onchange="updateBranches()">
                        <option value="" disabled selected>Select Course</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="Diploma">Diploma</option>
                        <option value="MBA">MBA</option>
                    </select>
                </div>
                </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Branch:</label>
                    <select class="form-control" id="branch" name="branch" onchange="updateYears()">
                        <option value="" disabled selected>Select Branch</option>
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Computer Science and Designing">Computer Science and Designing</option>
                        <option value="CSE(AIML)">CSE(AIML)</option>
                        <option value="Electronics and Communication">Electronics and Communication</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Year:</label>
                    <select class="form-control" id="year" name="year">
                        <option value="" disabled selected>Select Year</option>
                    </select>
                </div>
            </div>

            <div class="row">
                
                <div class="mb-3">
            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label">Event:</label>
                    <select class="form-control" id="event" name="event_name" onchange="updatePrice()">
                        <option value="None" data-price="">Select Events</option>
                        <option value="Debate" data-price="50">Debate</option>
                        <option value="Extempore" data-price="50">Extempore</option>
                        <option value="PPT. Talk" data-price="50">PPT. Talk</option>
                        <option value="E-Gaming" data-price="100">E-Gaming(PUBG/Ludo)</option>
                        <option value="Contentent Writing" data-price="50">Contentent Writing</option>
                        <option value="Photography" data-price="50">Photography</option>
                        <option value="Robotics" data-price="50">Robotics</option>
                        <option value="Technical Quize" data-price="50">Technical Quize</option>
                        <option value="Quize" data-price="50">Quize</option>
                        <option value="Hand Work Modeling" data-price="100">Hand Work Modeling</option>
                        <option value="Sketch Competition" data-price="50">Sketch Competition</option>
                        <option value="Tambola" data-price="50">Tambola</option>
                        <option value="Coding" data-price="50">Coding</option>
                        <option value="Graphic Design" data-price="50">Graphic Design</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Event Price:</label>
                <input type="text" class="form-control" name="amount" id="price" readonly>
            </div>
           
            <button type="button" class="btn btn-primary w-100" onclick="generateCard()">Generate Receipt</button>

            <div class="row  mt-2 mb-2">
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-danger w-50 ">Confirm</button>
              </div>
            </div>
        </form>
    </div>
 </div>
</div>
    <script>
    function confirmSubmit() {
        return confirm("डेटा सेव करने से पहले छात्रों से पूछें कि कार्ड पर छपा डेटा सही है या नहीं। फिर इसकी पुष्टि करें,और उससे पहले कार्ड डाउनलोड कर लें, नहीं तो ये कार्ड डाउनलोड नहीं होंगे");
    }

    
    function updateBranches() {
        const course = document.getElementById("course").value;
        const branch = document.getElementById("branch");
        branch.innerHTML = '<option value="" disabled selected>Select Branch</option>';

        if (course === "B.Tech") {
            branch.innerHTML += `
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Computer Science and Designing">Computer Science and Designing</option>
                <option value="CSE(AIML)">CSE(AIML)</option>
                <option value="Electronics and Communication">Electronics and Communication</option>
                <option value="other">Other</option>
            `;
        } else if (course === "Diploma") {
            branch.innerHTML += `
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="other">Other</option>
            `;
        } else if (course === "MBA") {
            branch.innerHTML += `
                <option value="Finance">Finance</option>
                <option value="Marketing">Marketing</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Operations">Operations</option>
                <option value="other">Other</option>
            `;
        }
    }

    function updateYears() {
        const branch = document.getElementById("branch").value;
        const year = document.getElementById("year");
        year.innerHTML = '<option value="" disabled selected>Select Year</option>';

        if (branch === "Computer Science and Engineering" || branch === "Information Technology" || branch === "Mechanical Engineering" || branch === "Civil Engineering" || branch === "Electrical Engineering" || branch === "Computer Science and Designing" || branch === "CSE(AIML)" || branch === "Electronics and Communication") {
            year.innerHTML += `
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Third Year</option>
                <option value="Fourth Year">Fourth Year</option>
            `;
        } else if (branch === "Finance" || branch === "Marketing" || branch === "Human Resources" || branch === "Operations") {
            year.innerHTML += `
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
            `;
        } else {
            year.innerHTML += `
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Third Year</option>
            `;
        }
    }


</script>

    <div class="text-center mt-4">
        <button class="btn btn-success" onclick="downloadCard()">Download Card</button>
    </div>

    <div class="mt-4 text-center">
        <div id="cardPreview" class="card-container d-none">
            <img src="{{ asset('/image/card logo.png')}}" class="logo" alt="Logo">
            <h4 class="heading" style="text-shadow:1px 1px black">RR GROUP OF INSTITUTIONS</h4>
            <div class="qr-container" id="qrcode"></div>
            <div class="details">
                <h6 id="cardName" class="fw-bold mt-3"></h6>
                <h6 id="cardRoll"></h6>
                <h6 id="cardMobile"></h6>
                <h6 id="cardCourse"></h6>
                <h6 id="cardBranch"></h6>
                <h6 id="cardYear"></h6>
                <h6 id="cardEvent"></h6>
                <h6 id="cardPrice"></h6>
            </div>
            <p class="sub-heading"><b style="color:red">Digital-Pragyan 2k25 </b>|| <b style="color:blue">Powered by NIITS</b></p>
        </div>
    </div>

</div>

<!-- JS Code -->
<script>
    function updatePrice() {
        let event = document.getElementById("event");
        let price = event.options[event.selectedIndex].getAttribute("data-price");
        document.getElementById("price").value = price ?  + price : "";
    }

    function generateCard() {
        let name = document.getElementById("name").value;
        let roll = document.getElementById("roll").value;
        let mobile = document.getElementById("mobile").value;
        let course = document.getElementById("course").value;
        let branch = document.getElementById("branch").value;
        let year = document.getElementById("year").value;
        let event = document.getElementById("event").value;
        let price = document.getElementById("price").value;

        document.getElementById("cardName").innerText = "Name: " + name;
        document.getElementById("cardRoll").innerText = "Roll No: " + roll;
        document.getElementById("cardMobile").innerText = "Mobile: " + mobile;
        document.getElementById("cardCourse").innerText = "Course: " + course;
        document.getElementById("cardBranch").innerText = "Branch: " + branch;
        document.getElementById("cardYear").innerText = "Year: " + year;
        document.getElementById("cardEvent").innerText = "Event: " + event;
        document.getElementById("cardPrice").innerText = "Price: " + price;

        document.getElementById("cardPreview").classList.remove("d-none");

        let qrData = `Name: ${name}\nRoll No: ${roll}\nMobile: ${mobile}\nCourse: ${course}\nBranch: ${branch}\nYear: ${year}\nEvent: ${event}\nPrice: ${price}`;
        document.getElementById("qrcode").innerHTML = "";
        new QRCode(document.getElementById("qrcode"), { text: qrData, width: 120, height: 120 });
    }

    function downloadCard() {
        html2canvas(document.getElementById("cardPreview"), { scale: 2 }).then(canvas => {
            let link = document.createElement("a");
            link.href = canvas.toDataURL("image/png");
            link.download = "Participation_Reciept.png";
            link.click();
        });
    }

    // function downloadCard() {
    //     let card = document.getElementById("cardPreview");

    //     if (card.classList.contains("d-none")) {
    //         alert("Please generate the card first.");
    //         return;
    //     }

    //     html2canvas(card, { scale: 2 }).then(canvas => {
    //         let link = document.createElement("a");
    //         link.href = canvas.toDataURL("image/png");
    //         link.download = "Student_Card.png";
    //         link.click();
    //     });
    // }
</script>

</body>
</html>
