<?php
echo "den day 1";
if(isset($_POST['btnRegister']) && $_POST['email'])
{
    echo "da den day";
    require "db.php";
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");

    if(mysqli_num_rows($result)<= 0)
    {
        // $firstName = $_POST['firstName'];
        // $lastName = $_POST['lastName'];
        $token = md5($_POST['email']).rand(10,9999);
        $user = $_POST['name'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(name, email, email_verification_link ,password) VALUES('$name','$emai','$token','$pass')";
        mysqli_query($conn, $sql);
        $link = "<a href='localhost/facebooks/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt tài khoản</a>";
        include "send-email.php";
        if(sendEmailForAccountActive($email, $link)){
            echo"Vui lòng kiểm tra hộp thư để kích hoạt tài khoản";
        }else{
            echo"Xin lỗi email chưa đc gửi vui lòng kiểm tra lại";
        }
        // require_once('phpmail/PHPMailerAutoload.php');
        // $mail = new PHPMailer();
        // $mail->CharSet =  "utf-8";
        // $mail->IsSMTP();
        // // enable SMTP authentication
        // $mail->SMTPAuth = true;                  
        // // GMAIL username
        // $mail->Username = "your_email_id@gmail.com";
        // // GMAIL password
        // $mail->Password = "your_gmail_password";
        // $mail->SMTPSecure = "ssl";  
        // // sets GMAIL as the SMTP server
        // $mail->Host = "smtp.gmail.com";
        // // set the SMTP port for the GMAIL server
        // $mail->Port = "465";
        // $mail->From='your_gmail_id@gmail.com';
        // $mail->FromName='your_name';
        // $mail->AddAddress('reciever_email_id', 'reciever_name');
        // $mail->Subject  =  'Reset Password';
        // $mail->IsHTML(true);
        // $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
        // if($mail->Send())
        // {
        // echo "Check Your Email box and Click on the email verification link.";
        // }
        // else
        // {
        // echo "Mail Error - >".$mail->ErrorInfo;
        // }
    }
    else
    {
    echo "You have already registered with us. Check Your email box and verify email.";
    }
}
?>