<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_POST['reg_button']))
 {
  
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'mohammedbubai52@gmail.com';                     //SMTP username
    $mail->Password   = 'ozra qwap igmh xssa';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('mohammedbubai52@gmail.com', 'Name');
    $mail->addAddress($_REQUEST['mail']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>HeY!,</h1>: OTP : $OTP";
    $bodyContent = '<p>This Email is from MovieHunter Downloading and streming site Thanks for vites </p>';
    $mail->Body    = $bodyContent."<br>";
    $mail->Subject = 'Email from MovieHunter';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
    
}

?>
<!-- <form method="post">
    <input type="text" name="email" id="email">
    <input type="text" name="body" id="body">
    <input type="submit" name="sendmail" id="sendmail">
</form> -->