<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_info = $_POST['info'];

$email_from = 'demeu@site.com';

$email_subject = 'Новая заявка';

$email_body = "ФИО: $name.\n".
              "Почта: $visitor_email.\n".
              "О себе: $visitor_info.\n".;

$to = 'aruzhank180707@gmail.com';
$headers = "От: $email_from \r\n";
$headers = "Ответить: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Локация: contact.html");

?>
