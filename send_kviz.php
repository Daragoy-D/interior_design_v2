<?php
$order_numb = date('s').rand(10, 99)."-".date('h').rand(10, 99)."-".date('m').rand(10, 99);

$order_text = "";	
			
$local = $_POST['local'];
$space = $_POST['space'];
$style = $_POST['style'];
$many = $_POST['many'];
$time = $_POST['time'];
$slave = $_POST['slave'];
$phone = $_POST['phone'];

if ($local == '1') $local = 'Квартира';
if ($local == '2') $local = 'Дом';
if ($style == '1') $style = 'Минимализм';
if ($style == '2') $style = 'Эко-стиль';
if ($style == '3') $style = 'Лофт';
if ($style == '4') $style = 'Скандинавский';
if ($style == '5') $style = 'Нео-классика';
if ($style == '6') $style = 'Не знаю';
if ($many == '1') $many = '5 000 - 10 000$';
if ($many == '2') $many = '10 000 - 20 000$';
if ($many == '3') $many = '20 000 - 30 000$';
if ($many == '4') $many = 'Более 30 000$';
if ($time == '1') $time = 'Чем раньше тем лучше';
if ($time == '2') $time = 'Сразу по готовности дизайн проекта';
if ($time == '3') $time = 'В течении года';
if ($time == '4') $time = 'Через год и более';
if ($slave == '1') $slave = 'Хочу контролировать весь процесс';
if ($slave == '2') $slave = 'Моё участие + помощь дизайнера';
if ($slave == '3') $slave = 'Хочу работу "под ключ"';


$from = "Lending_lead_design_kviz";
$mail = "ekaterinakirilyeva@gmail.com";
$subject = "Lending-lead";
$order_text = "Локация : ".$local."\n"
			 ."Площадь : ".$space."\n"
			 ."Стиль : ".$style."\n"
			 ."Бюджет: ".$many."\n"
			 ."Начало ремонта: ".$time."\n"
			 ."Участие в проекте: ".$slave."\n"
			 ."Телефон: ".$phone."\n";

mail($mail, $subject, $order_text, $from);



?>