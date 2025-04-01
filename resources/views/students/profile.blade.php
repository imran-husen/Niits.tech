<x-header>
  <x-slot name="title">Profile</x-slot>

  <x-slot name="bodycode"> 
   
  <!-- Here i am going to the write the code of the dashboard -->
  <h5 class="text-center fw-bold" style="margin-top:70px"> Welcome! Imran </h5>
  <div class="container">
        <div class="profile-container">
            <img src="{{ asset('/image/Imran Husen.jpg')}}" alt="Profile Picture" class="profile-picture" id="profilePic">
            <h2 id="studentName">Imran Husen</h2>
            <div class="profile-details">
                <p><strong>Academic Year:</strong> <span id="academicYear">2024-2025</span></p>
                <p><strong>Course:</strong> <span id="course">B.Tech</span></p>
                <p><strong>Branch:</strong> <span id="branch">Computer Science</span></p>
                <p><strong>Roll Number:</strong> <span id="rollNumber">1234567890123</span></p>
                <p><strong>Email:</strong> <span id="email">johndoe@example.com</span></p>
                <p><strong>Mobile:</strong> <span id="mobile">9876543210</span></p>
                <p><strong>LinkedIn:</strong> <a href="#" id="linkedin" class="text-white">LinkedIn Profile</a></p>


                <div class="message-box">
                      Important: Your profile has been successfully updated! Thank you for keeping your information up to date.
                </div>
                <h6 class="mt-2 text-center fw-bold" style="color:#00aaff"><u>Upload Achievement Certificate</u></h6>
                <form>
                <div class="mb-3">
                <label for="achievementName" class="form-label">Achievement Name</label>
                <input type="text" class="form-control" id="achievementName" maxlength="50" required>
                </div>
                 <div class="mb-3">
                <label for="achievementDescription" class="form-label">Description</label>
                <textarea class="form-control" id="achievementDescription" maxlength="90" required></textarea>
                </div>
                <div class="mb-3">
                <label for="achievementFile" class="form-label">Upload Certificate (PDF/JPEG/PNG, max 1MB)</label>
                <input type="file" class="form-control" id="achievementFile" accept=".pdf,.jpeg,.jpg,.png" onchange="validateFile()" required>
                </div>
                <center><button type="submit" class="btn btn-primary text-center">Upload</button></center>
                </form>
            </div>
        </div>
    </div>
    <center><button class="btn btn-danger logout-button">Logout</button></center>
    <!-- I am writing the code js -->
    <script>
        function validateFile() {
            var fileInput = document.getElementById('achievementFile');
            var fileSize = fileInput.files[0]?.size / 1024 / 1024; // Convert bytes to MB
            if (fileSize > 1) {
                alert('File size must not exceed 1MB.');
                fileInput.value = '';
            }
        }
    </script>

  </x-slot>
</x-layout>