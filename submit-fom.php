<?php
include 'conn.php';

$name = isset ($_POST['name'])?$_POST['name']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$phone_number = isset($_POST['phone_number'])?$_POST['phone_number']:"";
$msg_subject = isset($_POST['msg_subject'])?$_POST['msg_subject']:"";
$enquiry_type = isset($_POST['form_type'])?$_POST['form_type']:"";
$message = isset($_POST['message'])?$_POST['message']:"";
$service = isset($_POST['service'])?$_POST['service']:"";

 $insert = "INSERT INTO contact_us (name,email,phone_number,msg_subject,form_type,message,services) VALUES ('$name','$email','$phone_number','$msg_subject','$enquiry_type','$message','$service')";
$query = mysqli_query($conn,$insert);
if ($query) {
  echo json_encode(['type'=> 'success', 'message' => 'Successfully sended']);
}
else{
  echo json_encode(['type'=> 'error', 'message' => 'Something went wrong', 'error' => mysqli_error($conn)]);
}
?>