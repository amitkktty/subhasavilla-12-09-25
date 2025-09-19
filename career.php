<?php include 'header.php'; ?>

<!-- Inner Banner -->
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Career with Us</h3>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Career</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->

<!-- Career Section -->
<div class="career-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <!-- Job Description Column -->
            <div class="col-lg-5 ms-auto">
                <h2 class="text-center">Recent Job's</h2>
                <div class="vacancy-box">
                    <div class="vacancy-content">
                        <h2>Office Assistance</h2>
                        <ul>
                            <li>Min. Experience - 0-2 Years</li>
                            <li>Qualification - Graduation</li>
                            <li>Salary - 8k-12k</li>
                        </ul>
                    </div>
                    <hr style="border: none; height: 5px; background-color: blue; margin: 20px 0;">
                    <div class="vacancy-content">
                        <h2>Lab Instructor</h2>
                        <ul>
                            <li>Min. Experience - 2 Years</li>
                            <li>Qualification - Graduation</li>
                            <li>Salary - 14k-18k</li>
                        </ul>
                    </div>
                    <hr style="border: none; height: 5px; background-color: blue; margin: 20px 0;">
                    <div class="vacancy-content mt-3">
                        <h2>Admission Counsellor</h2>
                        <ul>
                            <li>Min. Experience - 2 Years</li>
                            <li>Qualification - Graduation</li>
                            <li>Salary - 14k-18k</li>
                        </ul>
                    </div>
                    <hr style="border: none; height: 5px; background-color: blue; margin: 20px 0;">
                    <div class="vacancy-content mt-3">
                        <h2>Admission Incharge</h2>
                        <ul>
                            <li>Min. Experience - 2 Years</li>
                            <li>Qualification - Graduation</li>
                            <li>Salary - 14k-18k</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Job Application Form Column -->
            <div class="col-lg-7 ms-auto">
                <h2 class="text-center">Fill Out the Job Application Form</h2>
                <div class="vacancy-form-box p-4">
                    <form method="POST" action="career_form_submit.php" class="apnaSubmitForm"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-3 col-12">
                                <select name="job_role" class="form-control" required>
                                    <option value="">Select Job Role</option>
                                    <option value="Office Assistance">Office Assistance</option>
                                    <option value="Lab Instructor">Lab Instructor</option>
                                    <option value="Admission Counsellor">Admission Counsellor</option>
                                    <option value="Office Management">Office Management</option>
                                    <option value="Admission Incharge">Admission Incharge</option>
                                    <option value="Branch Head">Branch Head</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="name" name="fname" placeholder="Full Name*"
                                    required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="father_name" name="father_name"
                                    placeholder="Father's Name*" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email*"
                                    required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Phone Number*" maxlength="10" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="date" class="form-control" id="birthdate" name="dob" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="tel" class="form-control" id="whatsapp_number" name="whatsapp"
                                    placeholder="Whatsapp Number*" maxlength="10" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="current_location" name="location"
                                    placeholder="Current Location*" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="qualification" name="qualification"
                                    placeholder="Max Qualification*" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="last_company_name" name="last_company_name"
                                    placeholder="Last Company Name">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="reference_name" name="reference_name"
                                    placeholder="Reference Name">
                            </div>

                            <div class="mb-3">
  <label for="resume" class="form-label">Upload Resume</label>
  <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx">
</div>

                            <!--<div class="mb-3 col-12">
                                <input type="file" class="form-control" id="resume" name="resume"
                                    placeholder="Upload Resume">
                            </div>-->
                            <div class="mb-3 col-12">
                                <button type="submit" name="formSubmit"
                                    class="btn btn-warning p-2 w-100 text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Career Section End -->

<?php include 'footer.php'; ?>