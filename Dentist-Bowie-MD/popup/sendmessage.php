<?php
$sendto   = "drshatergholi@gmail.com";
//$usermail = $_POST['email'];
$usermail = "webmaster@superior-dentistry.com";
$bcc = "rskumar@9ciphers.com";
$content  = nl2br($_POST['msg']);

$subject  = "New Feedback Message";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers  = "Bcc: " . strip_tags($bcc) . "\r\n";
$headers .= "Reply-To: ". $_POST['email'] . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n";
$msg .= "<p><strong>Sent by:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>