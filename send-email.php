<?php
$username= 'manhstrong13@gmail.com';
$password = 'hmbsnzhmlmraysxl';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function sendEmailForAccountActive($email,$link){
    global $username;
    global $password;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;      
    $mail->CharSet = 'UTF-8';                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('manhstrong13@gmail.com','Nham Duc Manh');
    $mail->addAddress($email);     //Add a recipient
    
    
    //Attachments
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[Activation] facebook.com';
    $mail->Body    = 'Chào mừng bạn đến với facebook.Để kích hoạt vui lòng bấm'.$link;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
return True;
    };
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
return FALSE;
}
?>