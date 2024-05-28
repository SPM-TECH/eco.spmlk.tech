<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if(isset($_POST['submit'])){
  


//Load Composer's autoloader
$name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$Subject = isset($_POST['subject']) ? 
trim($_POST['subject']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'https://premium117.web-hosting.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hi@eco.spmgroups.tech';                     //SMTP username
    $mail->Password   = 'JC1nObUR+P9s';                               //SMTP password
    $mail->SMTPSecure = '465';            //Enable implicit TLS encryption
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('eco.spmgroups.tech', 'SPM Eco');
    $mail->addAddress('eco.spmgroups.tech', 'SPM');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =$Subject ;
    $mail->Body    = 'SPM Eco Response<br>'.'Email: '.$email.'<br>'.'Subject: '.$Subject.'<br>'.'Name: '.$name;
    

    $mail->send();
    echo '<script>alert("Message sent successfully!");</script>';

    // Delay the redirect to ensure the alert is displayed
    echo '<script> window.location.href = "1-0-index.php#contact";</script>';

    exit();


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}