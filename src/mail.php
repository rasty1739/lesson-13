<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$userMail = $_POST['email'];
$userPhone = $_POST['phone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $msg = "Форма успешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'cite1739@mail.ru'; // Логин на почте
    $mail->Password   = 'yurok1985'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('cite1739@mail.ru', 'Crane-ekb'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('mail@crane-ekb.ru');  
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Новая заявка';
        $mail->Body    = "<b>Имя:</b> $userName <br>
        <b>Почта:</b> $userMail<br><br>
        <b>Телефон:</b> $userPhone";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "Форма успешно отправлена";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}