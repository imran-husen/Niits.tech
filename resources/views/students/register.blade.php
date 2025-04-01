<x-header>
  <x-slot name="title">Register</x-slot>

  <x-slot name="bodycode"> 
  <h5 class="text-center fw-bold" style="margin-top:70px"> Membership Form</h5>
  <p style="font-size:12px; margin:0px" class="text-center px-2 pb-2">"Join our dynamic Technical Society and be part of a community that fosters innovation, collaboration, and growth—where aspiring technologists like you can learn, create, and lead the future of software development!".</p>


  <div class="container mt-1 col-lg-8 col-md-10 col-sm-12">
        <div class="form-container mb-2">
            <form class="needs-validation" novalidate>
                <div class="text-center mb-3">
                    <label class="image-upload" for="profilePic">
                        <input type="file" id="profilePic" accept="image/*" required>
                        <img id="preview" src="" alt="Upload Image" width="100%">
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <select class="form-select" id="academicYear" required>
                            <option selected disabled value="">Choose...</option>
                            <option>2023-2024</option>
                            <option>2024-2025</option>
                        </select>
                        <div class="invalid-feedback">Please select your academic year.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" id="course" required>
                            <option selected disabled value="">Choose...</option>
                            <option>B.Tech</option>
                            <option>M.Tech</option>
                        </select>
                        <div class="invalid-feedback">Please select your course.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branch" class="form-label">Branch</label>
                        <select class="form-select" id="branch" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Software</option>
                            <option>Computer Science</option>
                        </select>
                        <div class="invalid-feedback">Please select your branch.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="rollNumber" class="form-label">Roll Number</label>
                    <input type="text" class="form-control" id="rollNumber" pattern="\d{13}" required>
                    <div class="invalid-feedback">Roll number must be 13 digits.</div>
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn ID</label>
                    <input type="url" class="form-control" id="linkedin" pattern="https?://.*" required>
                    <div class="invalid-feedback">Enter a valid LinkedIn profile link.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">Enter a valid email address.</div>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" pattern="[6789][0-9]{9}" required>
                    <div class="invalid-feedback">Enter a valid 10-digit Indian mobile number.</div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">Enter a password.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                        <div class="invalid-feedback">Passwords must match.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree to the Terms and Conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
                <p style="font-size:12px;" class="text-center mt-1 mb-1">If You Have an Accounts <a href="#">Click Here To login</a></p>
            </form>
        </div>
    </div>
    <script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
                var confirmPasswordField = document.getElementById('confirmPassword');

                if (password !== confirmPassword) {
                    confirmPasswordField.setCustomValidity("Passwords do not match");
                } else {
                    confirmPasswordField.setCustomValidity("");
                }

                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    document.getElementById('profilePic').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            document.getElementById('preview').src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
  </x-slot>
</x-layout>