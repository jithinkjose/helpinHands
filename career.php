<?php 
if(isset($_POST['submit'])){
    $to = "jithinkjose1@gmail.com"; // this is your Email address
    //$from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $message = "fdcgvhb jn";
    
    $headers = "From:" . $to;
    mail($to,$subject,$message,$headers);
    }
?>