<?php
$to = Config::EMAIL_USER;
$subject = 'Contato - Loja Jonathan';
$message = $_GET['txtinputarea'];
$dest =  'Email de '. $_GET['txtinputnome'] . "\r\n" . $_GET['txtinputemail'] ;

$headers = "From: ". $dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0, url=contato">