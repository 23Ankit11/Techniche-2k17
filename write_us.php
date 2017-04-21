<?php

session_start();
header("Location:https://techniche.org/Techniche17/login.php");
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $phone = mysqli_real_escape_string($db,$_POST['phone']);
      $message = mysqli_real_escape_string($db,$_POST['message']);



$mail = new PHPMailer;

          $mail->IsSMTP();
	  $mail->Host = "smtpout.secureserver.net";	  
	  $mail->Username = "abhishek@techniche.org"; /*Substitute with your real email*/
	  $mail->Password = "techniche"; /*Substitute with your real password*/
	  $mail->SMTPAuth = true;
	  $mail->Port = 80;
          $mail->setFrom('abhishek@techniche.org', 'Techniche');
          $mail->addAddress('ggoyalabhishekuss@gmail.com', "CONVENER");     // Add a recipient
         

          $mail->Subject = 'New Message';
          $mail->Body    = '<br> '.$_POST['name'].'<br>'.$_POST['email'].'<br>'.$_POST['phone'].'<br>'.$_POST['message'].'<br>';

          if(!$mail->send()) {
               header("Location:https://techniche.org/Techniche17/login.php");
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
             header("Location:https://techniche.org/Techniche17/login.php");
            exit();
          }


?>