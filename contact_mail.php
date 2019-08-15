<?php
$toEmail = "law@renewalchambers.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<" . $_POST["number"] . "<" . $_POST["your_email"] . "<" . $_POST["subject"] . "<". $_POST["message"] .">\r\n";
if(mail($toEmail, $_POST["message"],$mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>