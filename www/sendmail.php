<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    
    $mail->isSMTP(); 
    $mail->Host = 'mailcluster.loopia.se'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'dminfo@dmregnskap.no'; // SMTP username
    $mail->Password = 'UjhacNuaj8'; // SMTP password
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587;
    
    $mail->From = 'ajdinsheki@gmail.coim';
    $mail->FromName = 'Ajdin';
    $mail->addAddress('dminfo@dmregnskap.no', 'Info'); // Add a recipient
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
     echo 'Message has been sent';
    }
?>