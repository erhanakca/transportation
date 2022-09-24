<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'inc/config.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$subject = $name . " " . $surname . " size bir mesaj gönderdi.";
$message = $name . " " . $surname . " sizden bir teklif almak istiyor. Telefon numarası: " . $phone . " Email: " . $email;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer="smtp";

$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = MAIL_USER;
$mail->Password = MAIL_PASS;

$mail->IsHTML(true);
$mail->AddAddress(MAIL_USER, "web");
$mail->SetFrom(MAIL_USER, "web");

$mail->Subject = $subject;

$mail->MsgHTML($message);

try {
    $mail->Send();
    echo 'success';
}catch (Exception $e){
    echo "error " . $e->getMessage();
}

header("Location: add_database.php?name=$name&surname=$surname&phone=$phone&email=$email");
/*header("Location: index.php?name=" . $name . "&surname=" . $surname . "&phone=" . $phone . "&email=" . $email);*/
die();
?>