<?php 

    $to = "fionaaya@gmail.com";
    $email = $_POST['Email'];
    $subject = "Form submission";
    $headers = "From:";
    mail($to,$subject,$email,$headers);
   
?>
