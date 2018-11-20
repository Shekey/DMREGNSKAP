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

<!DOCTYPE html>
<html>

<head>
    <title>DM Regnskap Oslo | Omm oss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="bussiness,dm, regnskapførerselskap,regnskap,oslo" />
    <meta name="description" content="Dm regnskap" />
    <meta name="subject" content="bussiness, projects">
    <meta name="language" content="Norway">
    <meta name="robots" content="index,follow" />
    <meta name="category" content="bussiness, economy">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/icon-short.jpg">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<?php ?>
<body>

    <!-- header -->
    <div id="header-comp">
    </div>
    <!-- endheader -->

    <!-- text over image -->
    <div class="text-overlay-about">
        <h4>Kontakt oss</h4>
        <p></p>
        <div id="contactUs">

        </div>
    </div>
    <!-- end text over image -->

    <!--contact form-->
    <div id="contact-form">
    </div>
    <!-- end contact form -->

    <!-- footer -->
    <div id="footer-comp">

    </div>
    <!-- end footer -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <script>
        $(function(){
            $("#header-comp").load('header-comp.html');
            $("#footer-comp").load('footer-comp.html');
            $("#contact-form").load('contact-form.html');
        });
    </script>
    <script src="js/jquery.hc-sticky.min.js" type="text/javascript"></script>
    <script src="js/fixedNavbar.js"></script>

</body>

</html>