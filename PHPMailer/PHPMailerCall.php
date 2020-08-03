<?php 


header('Content-Type: text/html; charset=utf-8');

	
			require("PHPMailer/class.phpmailer.php");

			$mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
			$mail->IsSMTP(); 			 // set mailer to use SMTP
			$mail->Host = "عنوان السيرفر";  // specify main and backup server
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->Username = "نضع هنا البريد الالكتروني المرسل";  // SMTP username
			$mail->Password = "كلمة مرور البريد الالكتروني"; // SMTP password
			$mail->From = "البريد الالكتروني";
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;


			$mail->FromName = "اسم المرسل";
			$mail->AddAddress("{$email}"); // name is optional

			$mail->WordWrap = 50; // set word wrap to 50 characters
			$mail->IsHTML(true); // set email format to HTML

			$mail->Subject = "عنوان الرسالة";
			$mail->Body    = " 
			<table border='0' width='50%' cellspacing='0' cellpadding='0'>
			<tr><td align='center'>
			<p>نكتب نص الرسالة هنا</p>
			</tr></table>";
			
			
			$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

			if(!$mail->Send())
			{
			   $check = "خطأ في إرسال البريد الالكترني";   
			
			   echo "Message could not be sent. <p>";
			   echo "Mailer Error: " . $mail->ErrorInfo;
			   exit;
			}else{
				$check = "تم إرسال البريد الالكتروني بشكل صحيح";       
			}


 //echo json_encode(array("success"=>$check));
 echo $check;
  ?> 
  