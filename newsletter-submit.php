<?php
include 'conn.php';


$email = isset($_POST['EMAIL']) ? $_POST['EMAIL']:"";
$enquiry_type = isset($_POST['form_type'])?$_POST['form_type']:"";

 $insert = "INSERT INTO contact_us (email,form_type) VALUES ('$email','$enquiry_type')";
$query = mysqli_query($conn,$insert);
if ($query) {
  echo json_encode(['type'=> 'success', 'message' => 'Newsletter successfully added']);
}
else{
  echo json_encode(['type'=> 'error', 'message' => 'Error', 'error' => mysqli_error($conn)]);

}

?>

