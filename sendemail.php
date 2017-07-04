<?php
	$to = "manojmore9c@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message  = $_POST['message'];


	$subject = 'Feedback From Superior Dentistry Website';
	$headers = 'MIME-Version: 1.0'."\r\n";
	$headers .= 'From: webmaster@bcdental.com'."\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'Bcc:rskumar@9ciphers.com'."\r\n";

	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg  = "<div style='width:625px;background-color: #F5FFFE;border: 2px solid#FFE098;color: #00343A;font-family:14px;padding:10px;'>";
	$msg .= "<div><h2 style='margin-top: 10px;margin-left: 10px;'><strong>Feedback From Superior Dentistry Website</strong></h2></div><br/>\r\n";
	$msg .= "<div><p style='margin-top: 10px;margin-left: 10px;'><strong>Name : </strong>".$name."</p></div><br/>\r\n";
	$msg .= "<p style='margin-top: 5px;margin-left: 10px;'><strong>Email : </strong>".$email ."</p><br/>\r\n";
	$msg .= "<p style='margin-top: 5px;margin-left: 10px;margin-bottom:10px;'><strong>Message : </strong> ".$message."</p>\r\n";

	$msg .= "</div></body></html>";

	if(@mail($to, $subject, $msg, $headers))
	 {
		header("location: thanks.html");	
	} else {
		echo "false";
	}
?>