<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["process_form"])){
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'karaktersocial@gmail.com'; // email SMTP
    $mail->Password = 'vkudwrhlnraayvej'; // senha SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Host = 'smtp.gmail.com';
    $mail->setFrom($_POST["email"]); // user email

    $mail->addCustomHeader('Reply-To: ' . $_POST["email"]);
    $mail->addAddress('karaktersocial@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    if ($mail->send()){
        echo "A mensagem foi enviada com sucesso!";
        echo '<br><a href="help.php">Voltar para a página</a>';
    }
    else{
        echo "Erro ao enviar. Detalhes do erro: {$mail->ErrorInfo}";
    }
}

else{
    echo "Formulário não enviado. Tente novamente.";
}

?>