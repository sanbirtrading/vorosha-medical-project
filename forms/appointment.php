<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $message=$_POST['message']; 

    try{
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kh01783823383@gmail.com';
        $mail->Password   = 'kijfbqkqmjzi';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = '587';
        //Recipients
        $mail->setFrom('noreplyovorosha@gmail.com', 'VOROSHA.ORG');
        $mail->addAddress('info.vorosha@gmail.com');
        $mail->addAddress('sanbirtrading2016@gmail.com');
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Re: Vorosha.org Appointment Request From:' $name;
        $mail->Body    = "Greetings!\n\nYou have received a new message from your website.\n\n"."Here are the details:\n\nName = ". $name . "<br>Age = " . $age. "<br>Phone = " . $phone . "<br> E-Mail = " . $email . "<br>Gender = " . $role. "<br>Message = " . $message;

        $mail->send();
        $alert = '<div class="alert-success">
                    <span>Thanks, Your request has been sent.</span>
                    </div>';
      } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
      }
}
?>