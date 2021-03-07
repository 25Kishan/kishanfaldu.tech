<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/PHPMailer.php';
$company_name = $_POST['name'];
$organization = $_POST['organization'];
$contact_num = $_POST['contact-number'];
$email = $_POST['email'];
$website = $_POST['website'];
$product = $_POST['products'];
$industry = $_POST['industry'];
$specific_product = $_POST['specific-product'];
$capacity = $_POST['capacity'];
$message = $_POST['message'];
require_once 'PHPMailer/SMTP.php';

require_once 'PHPMailer/Exception.php';

$mail = new PHPMailer();                              // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'lalu08patel@gmail.com';                 // SMTP username
$mail->Password = '9898957816K';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('lalu08patel@gmail.com	', 'Kishan Faldu');
$mail->addAddress('kishanafaldu08@gmail.com');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'New Customer | '.$company_name;
$mail->Body    = 'Your password is: <b>' . $message . '</b>';
$mail->AltBody = 'Your password is: ' . $message;

if (!$mail->send()) {
	header('Location : contact.html');
} else {
	echo 'Message has not been sent';
}

?>