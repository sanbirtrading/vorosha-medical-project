<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_POST['f']; 
    $g=$_POST['g'];
    $h=$_POST['h'];
    $i=$_POST['i'];
    $j=$_POST['j'];

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
        $mail->Body    = "Greetings!\n\nYou have received a new message from your website.\n\n"."Here are the details:\n\n1) I am confident and I believe I will achieve all my life goals: <br> = " . $b. "<br><br>2) When something unpleasant happens, I always tend to blame myself <br> = " . $c. "<br><br>3) If someone do compliment me, I take it <br> = " . $d. "<br><br>4) When I meet someone for the very first time, my view of point towards him is <br> = " . $e. "<br><br>5) Do you look back and try to observe the mistakes you made in life to avoid them in the future? <br> = " . $f. "<br><br>6) Do you get angry when your boss tries to humiliate you when you mistake? <br> = " . $g. "<br><br>7) DO you get panicked for every little thing that goes against your comfort zone? <br> = " . $h. "<br><br>8) Do you try to value others intention towards something in positive way? <br> = " . $l. "<br><br>9) Is it possible for you to balance work life and family life? <br> = " .$j;

        $mail->send();
        $alert = '<div class="alert-success">
                    <span>Thanks, Your Test has been submitted</span>
                    </div>';
      } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
      }
}
?>