<?php

require 'phpmailer/class.phpmailer.php';


// ==== Принудительный захват массива переменных ==========================
// ==== раскомментировать, если письма отправляются без значений полей ====
$text = '';
$adminEmail = 'kacevnik@yandex.ru';
$email = $_POST['email']; if($email){$text = 'Имя пользователя: '.$email.'<br>';}
$phone = $_POST['phone']; if($phone){$text = $text.'Телефон пользователя: '.$phone.'<br>';}
$form = $_POST['hidden'];

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
// От кого
$mail->setFrom($adminEmail, 'Сиб-Стройка.рф');

// Кому
$mail->addAddress($adminEmail);

// Тема
$mail->Subject = $form;

// convert HTML into a basic plain-text alternative body
$mail->msgHTML($text);


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  // echo "Message sent!";
}
