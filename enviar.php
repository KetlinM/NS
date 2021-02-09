<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

function email($para_email, $para_nome, $assunto, $html) {
    $mail2->IsSMTP();
}

$mail2->From = "noreply@wtkagro.com.br";
$mail2->FromName = "noreply@wtkagro.com.br";

$mail->Host = '	mail.wtkagro.com.br';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = '	noreply@wtkagro.com.br';
$mail->Password = 'sucesso21#';

$mail->addAddress($para_email, $para_nome);

$mail2->Subject = $assunto;

$email->AltBody = "Para ver essa mensagem, use um programa compatível com HTML";

$mail2->MsgHTML($html);

if ($mail2->Send()) {
    return "1";
} else {
    return $mail2->ErrorInfo;
}

$corpo_email = "<html><body> Testando essa bagaça</body></html>";

echo email("ketlin.machado@aluno.usj.edu.br", "Ketlin", "Teste", $corpo_email);