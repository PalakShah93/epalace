<?php
//$user="Smit95";
//$email="Smitshah95@gmail";
//$subject="message has been dielved";
//$body="dfsdf";
//sentmail($user,$email,$subject,$body);
function sentmail($user,$email,$subject,$body,$BCCemail)
{


include 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'electronicpalace2014@gmail.com';                 // SMTP username
$mail->Password = 'singapore26061993';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to


$mail->From = 'Auto-Reply@E-Palace.com';
$mail->FromName = 'E-Palace';
$mail->addAddress($email,$user);     // Add a recipient
//$mail->addAddress('akmurahari@gmail.com');               // Name is optional
$mail->addReplyTo('electronicpalace2014@gmail.com', 'E-Palace');
//$mail->addCC('palakjerry93@gmail.com');
$mail->addBCC($BCCemail);

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = nl2br($body."\n \n
Disclaimer
This e-mail is confidential. It may also be legally privileged.
If you are not the addressee, you may not copy, forward, disclose or use any
part of it. If you have received this message in error, please delete it and
all copies from your system and notify the sender immediately by return
email.
Internet communications cannot be guaranteed to be timely, secure, error or
virus-fee.  Any email communication over the Internet, as with any other
forms of communication (e.g. cellular phones, post office mail etc), is not
confidential and is subject to possible delay or failure in electronic/
internet transmission, interception, corruption, hacking or loss.  E-palace Pte Ltd and its subsidiaries are not responsible and will not be liable to anyone for any loss or damages 
whether arising from the foregoing causes or otherwise in sent by E-palace Pte Ltd and its subsidiaries to you at your request.
E-palace Pte Ltd and its subsidiaries does not accept liability for any errors or omissions.");
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
}
}
?>
</body>
</html>