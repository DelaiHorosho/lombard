<?php

// Домен сайта
$domain = "lombardzaim.ru";


// Принимаем информацию из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

$type = $_POST['type'];

$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_term = $_POST['utm_term'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];
$_openstat = $_POST['_openstat'];



// Обрабатываем
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);

$type = htmlspecialchars($type);

$utm_source = htmlspecialchars($utm_source);
$utm_medium = htmlspecialchars($utm_medium);
$utm_term = htmlspecialchars($utm_term);
$utm_campaign = htmlspecialchars($utm_campaign);
$utm_content = htmlspecialchars($utm_content);
$_openstat = htmlspecialchars($_openstat);


// Email отправителя и получателя
$email_from = "noreply@".$domain;
$email_to = "rik256@yandex.ru";


// Формируем тему и текст письма
$subj="Сообщение с сайта ($domain) | Заявка на оценку залога";

$message = "Сообщение с сайта ($domain) \n<br>";
$message .= "-------------------------------------------------------\n\n<br><br>";
$message .= "Имя отправителя: ".$name."\n<br>\n<br>";
$message .= "Телефон: ".$phone."\n<br>\n<br>";

$d = date("d.m.Y H:i");
$message .= "Дата и время: \n<br>".$d."\n\n<br><br>";

// Заголовки
$headers = "Content-type:text/html; charset=utf-8\n";
$headers .= "From: $name <".$email_from.">\n";
$headers .= "X-Sender: <".$email_from.">\n";
$headers .= "X-Originating-IP: [".$REMOTE_ADDR."]\n";
$headers .= "X-Priority: 1\n";
$headers .= "Return-Path: <".$email_from.">\n";

mail($email_to, $subj, $message, $headers);


exit;
?>