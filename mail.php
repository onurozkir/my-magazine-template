<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 6/23/18
 * Time: 8:49 PM
 */
session_start();
require('function/function.php');
require('function/mail/PHPMailerAutoload.php');

$name = stripTags($_POST['name']);
$email = stripTags($_POST['email']);
$message = stripTags($_POST['message']);


$postBody = array(
    'Adı Soyadı' => $name,
    'E-posta' => $email,
    'Mesaj' => $message,
);


print_r($postBody);
die;

$mail = new PHPMailer(false);
//		$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->SetLanguage('tr', 'includes/language/');
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = smtpMailAdress();
$mail->Password = smtpMailPassword();
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = smtpMailAdress();
$mail->FromName = siteName() . " Webform";
$mail->addAddress(mailAdress(), 'Bilgi '.siteName());
//$mail->addAddress('olga@intrek.com.tr', 'Olga');
$mail->CharSet = "utf-8";
$mail->IsHTML(true);
$mail->Subject = siteName() . " İletişim Formu";
$mail->Body = mailBodyTemplate($postBody);

if ($mail->Send()) {
    $_SESSION['type'] = 'success';
    $_SESSION['message'] = mailMessage($name, true);
    header('Location: index.php');
} else {
    $_SESSION['type'] = 'error';
    $_SESSION['message'] = mailMessage('', false);
    header('Location: index.php');
}