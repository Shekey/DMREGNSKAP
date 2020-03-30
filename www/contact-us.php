﻿<?php
    if(isset($_POST['submit'])){
        if(isset($_REQUEST['email'])){
        //Email information
        $admin_email = "avdo@dmregnskap.no";
        $email = $_REQUEST['email'];
        $subject = 'Email from Website page';
        $firstname = $_REQUEST['firstname'];
        $laststname = $_REQUEST['laststname'];
        $companyName = $_REQUEST['company-name'];
        $phone = $_REQUEST['phone'];
        $new = "\n";
        $comment = $_REQUEST['comment'];
        $comment = "Fornavn:" . $firstname . $new.
        "Etternavn:".$laststname. $new.
         "Selskapsnavn: " .$companyName. $new.
         "Telefon nummer:" .$phone. $new.
          "Message: ".$comment;
        //send email
        $result = mail($admin_email, "$subject", $comment, "From:" . $email);
            if($result) {   
                ?>
                <script>
                    window.location = 'http://dmregnskap.no/contact-us.php';
                </script>
                <?php
            }
        }
    }
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>DM Regnskap Oslo | Kontakt oss</title>
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
    <div id="nyttige-comp"></div>
    <div id="footer-comp">

    </div>
    <!-- end footer -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <script>
        $(function(){
            $("#header-comp").load('header-comp.html');
            $("#nyttige-comp").load('nyttige-comp.html');
            $("#footer-comp").load('footer-comp.html');
            $("#contact-form").load('contact-form.html');
        });
    </script>
    <script src="js/jquery.hc-sticky.min.js" type="text/javascript"></script>
    <script src="js/fixedNavbar.js"></script>

</body>

</html>