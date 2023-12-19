<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["newsletter"])){
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'karaktersocial@gmail.com'; // email SMTP
    $mail->Password = 'vkudwrhlnraayvej'; // senha SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Host = 'smtp.gmail.com';
    $mail->setFrom('karaktersocial@gmail.com');

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = 'Bem-vindo/a a Newsletter de Karakter!';
    $mail->Body = 'Olá,<br><br>Obrigado por subscrever à nossa Newsletter! Fique atento às nossas atualizações e novidades.<br><br>
    Atenciosamente,<br>Equipa Karakter';

    if ($mail->send()){
        echo '<script>alert("Obrigado por subscrever à nossa Newsletter!");</script>';
    }
    else{
        echo '<script>alert("Erro ao subscrever. Tente novamente.");</script>';
    }
}

?>
