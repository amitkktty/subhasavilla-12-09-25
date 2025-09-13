<?php
include 'conn.php';

// Collect form data from POST request
$role = isset($_POST['job_role']) ? $_POST['job_role'] : '';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$father_name = isset($_POST['father_name']) ? $_POST['father_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$birthdate = isset($_POST['dob']) ? $_POST['dob'] : '';
$whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
$company_name = isset($_POST['last_company_name']) ? $_POST['last_company_name'] : '';
$reference_name = isset($_POST['reference_name']) ? $_POST['reference_name'] : '';

// Handle file upload for resume
$resume_path = NULL;
if ( isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
    $resume_tmp_name = $_FILES['resume']['tmp_name'];
    $resume_name = $_FILES['resume']['name'];
    $resume_path = 'uploads/' . basename($resume_name);

    // Make sure the 'uploads' directory exists and is writable
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (!move_uploaded_file($resume_tmp_name, $resume_path)) {
        $resume_path = 'no_resume_uploaded'; // Default fallback if upload fails
    }
} else {
    $resume_path = 'no_resume_uploaded'; // Default if no file is uploaded
}

// SQL query to insert the data into the database
$insert = "INSERT INTO career (role, fname, father_name, email, phone, dob, whatsapp, location, qualification, company_name, reference_name, resume_path)
            VALUES ('$role', '$fname', '$father_name', '$email', '$phone', '$birthdate', '$whatsapp', '$location', '$qualification', '$company_name', '$reference_name', '$resume_path')";

// Execute the query
$query = mysqli_query($conn, $insert);

// Check if the query was successful and return a JSON response
if ($query) {
    echo json_encode(['type' => 'success', 'message' => 'Thankyou! Your job form has been submitted successfully!']);
} else {
    echo json_encode(['type' => 'error', 'message' => 'There was an issue submitting your form. Please try again later.', 'error' => mysqli_error($conn)]);
}

// Close the database connection
mysqli_close($conn);
?>