<?php
include_once('config.php');
$em=mysqli_real_escape_string($con, $_POST['em1']);
$email = filter_var($em, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$sub=mysqli_real_escape_string($con, $_POST['sub1']);
$name = filter_var($sub, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$com=mysqli_real_escape_string($con, $_POST['com1']);
$message = filter_var($com, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$mobile=mysqli_real_escape_string($con,$_POST['spm']);
//insert into database
mysqli_query($con,"INSERT INTO contact_us(id,name, email,mobile,message) VALUES('','$name','$email','$mobile','$message')");

//email the form to yourself
// $to='vaishnavmulay@hotmail.com';
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: <you@yourwebsite.com>' . "\r\n";
// $headers .= 'Cc: another@email.com' . "\r\n";
// $message='<table width="100%" border="1" cellspacing="1" cellpadding="2">
// <tr><td colspan="2">Someone Contacted You On Your Website</td></tr>
// <tr><td>Subject</td><td>'.$name.'</td></tr>
// <tr><td>Message</td><td>'.$message.'</td></tr>
// </table>';
// mail($to,$name,$message,$headers);



//send message back to AJAX
echo '<div class="alert alert-success">Thank you for contacting us. Someone will get back to you within 1 Business Day.</div>';
$con->close();
?>