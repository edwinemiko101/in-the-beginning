<?php 
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') &&(isset($_POST['number'])&& $_POST['number'] !='')&&(isset($_POST['your_email'])&& $_POST['your_email'] !='')&& (isset($_POST['subject'])&& $_POST['subject'] !='')&&(isset($_POST['message'])&& $_POST['message'] !=''))
{ 
 require_once("contact_mail.php");
$your_name = $conn->real_escape_string($_POST['your_name']);
$number = $conn->real_escape_string($_POST['number']);
$your_email = $conn->real_escape_string($_POST['your_email']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);
$sql="INSERT INTO contact (your_name, number, your_email, subject, message) VALUES ('".$your_name."','".$number."','".$your_email."','".$subject."', '".$message."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Names and Email";
}
?>