<?php
$phone = $_POST['phone'];
$name = $_POST['name'];
$mail_f = $_POST['mail'];
$quest = $_POST['quest']; 
$from = $_POST['from'];
$user_email = 'murchik.mur@gmail.com';
$to = $mail_f;
$subject = "Заявка с сайта AlpElit"; 
$price = '
			<html>
		<head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<title>Прайс на услуги компании AlpElit</title>
			<style>
				table{
					height: 500px;
					background: wheat;
					margin: auto;
					width: 430px;
					border: 1px solid red;
					border-collapse: collapse;
					table-layout: fixed;
				}
				.br{border-right: 1px solid #00000036;}
				.bb{border-bottom: 1px solid #00000036;}
				.tal{text-align: left;}
				.tar{text-align: right;}
				.tac{text-align: center;}
				.cw{color: #000;}

				.th1 {
					text-align: center;
					color: white;
					background: #000000b8;
					font-weight: 600;
					font-size: 12px;
				}

				.th1 td {
					padding: 7px;
					text-transform: uppercase;
				}

				.th0 {
					background: #1b1b1b;
					text-align: center;
					height: 35px;
					color: white;
					font-weight: 700;
				}
				table td{padding: 3px 10px;}
				table th{
					height: 50px;
					background: #9a979c;
					margin: 0;
				}
				body{
					background: #ffffff;
					font-family: sans-serif;
				}
				.fs30{font-size: 30px;}
				.fs20{
					font-size: 20px;
					font-weight: 600;
					letter-spacing: 3px;
				}
				.fs15{font-size: 12px;}
				.w200{width: 200px;}
				.col1 {width: 445px;}
				.coln {width: 50px;}
				.coln2 {width: 75px;;}
				.coln3 {width: 115px;}
				.coln4 {width: 50px;}
			</style>
		</head>
		<body>
			<p class="tac cw fs30">Прайс на услуги компании AlpElit</p>
		
			<p class="tac cw fs20">Монтаж кондиционеров</p>
			<table>
			<col class="col1">
			<col class="coln3">
				<tbody>
					<tr class="th0">
						<td class="tal">Тип кондиционера</td>
						<td class="tar">Цена грн.</td>
					</tr>
					<tr class="th1">
						<td colspan="2">Настенные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 07 (20м.кв)</td>
						<td class="tar bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 09 (25м.кв)</td>
						<td class="tar bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 12 (35м.кв)</td>
						<td class="tar bb">1300</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 18 (50м.кв)</td>
						<td class="tar bb">2000</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 24 (70м.кв)</td>
						<td class="tar bb">2600</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 30 (90м.кв)</td>
						<td class="tar bb">3000</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 36 (100м.кв)</td>
						<td class="tar bb">3800</td>
					</tr>
					<tr>
						<td class="tal br bb">Сплит-система модели 48 (120м.кв)</td>
						<td class="tar bb">4600</td>
					</tr>
					<tr class="th1">
						<td colspan="2">Кассетные и напольно-потолочные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 12</td>
						<td class="tar bb">2000</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 18</td>
						<td class="tar bb">2500</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 24</td>
						<td class="tar bb">3000</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 30</td>
						<td class="tar bb">3500</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 36</td>
						<td class="tar bb">4500</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 48</td>
						<td class="tar bb">5200</td>
					</tr>
					<tr>
						<td class="tal br bb">Кассетная сплит-система модели 54</td>
						<td class="tar bb">6000</td>
					</tr>
					<tr class="th1">
						<td colspan="2">Канальные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 18</td>
						<td class="tar bb">3000</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 24</td>
						<td class="tar bb">3500</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 30</td>
						<td class="tar bb">4000</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 36</td>
						<td class="tar bb">4800</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 48</td>
						<td class="tar bb">5800</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 54</td>
						<td class="tar bb">6500</td>
					</tr>
					<tr>
						<td class="tal br bb">Канальная сплит-система модели 60</td>
						<td class="tar bb">7000</td>
					</tr>
					<tr>
						<td class="tal br">Канальная сплит-система модели 120</td>
						<td class="tar">10000</td>
					</tr>
				</tbody>
			</table>
			
			
			
			<br><br>
			<p class="tac cw fs20">Сервисное обслуживание кондиционеров</p>
			<table>
			<col class="col1">
			<col class="coln2">
			<col class="coln2">
			<col class="coln2">
				<tbody>
					<tr class="th0">
						<td class="tal w200 fs15">Тип кондиционера</td>
						<td class="tac fs15">Станд. обсл. цена грн.</td>
						<td class="tac fs15">Чистка цена грн.</td>
						<td class="tac fs15">Компл. цена грн.</td>
					</tr>
					<tr class="th1">
						<td colspan="4">Настенные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 07 (20м.кв)</td>
						<td class="tac bb br">от 650</td>
						<td class="tac bb br">650</td>
						<td class="tac bb">1000</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 09 (25м.кв)</td>
						<td class="tac bb br">от 650</td>
						<td class="tac bb br">650</td>
						<td class="tac bb">1000</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 12 (35м.кв)</td>
						<td class="tac bb br">от 700</td>
						<td class="tac bb br">700</td>
						<td class="tac bb">1050</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 18 (50м.кв)</td>
						<td class="tac bb br">от 750</td>
						<td class="tac bb br">750</td>
						<td class="tac bb">1050</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 24 (70м.кв)</td>
						<td class="tac bb br">800</td>
						<td class="tac bb br">800</td>
						<td class="tac bb">1100</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 30 (90м.кв)</td>
						<td class="tac bb br">800</td>
						<td class="tac bb br">800</td>
						<td class="tac bb">1100</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 36 (100м.кв)</td>
						<td class="tac bb br">950</td>
						<td class="tac bb br">950</td>
						<td class="tac bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Сплит-система модели 48 (120м.кв)</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb">1250</td>
					</tr>
					<tr class="th1">
						<td colspan="4">Кассетные и напольно-потолочные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 12</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 18</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 24</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb">1350</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 30</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb">1350</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 36</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb">1400</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 48</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb">1400</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Кассетная сплит-система модели 54</td>
						<td class="tac bb br">1200</td>
						<td class="tac bb br">1200</td>
						<td class="tac bb">1500</td>
					</tr>
					<tr class="th1">
						<td colspan="4">Канальные сплит-системы</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 18</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 24</td>
						<td class="tac bb br">1000</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 30</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1350</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 36</td>
						<td class="tac bb br">1050</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1350</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 48</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1400</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 54</td>
						<td class="tac bb br">1100</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1400</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 60</td>
						<td class="tac bb br">1200</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1500</td>
					</tr>
					<tr>
						<td class="tal br bb w200">Канальная сплит-система модели 120</td>
						<td class="tac bb br">1350</td>
						<td class="tac bb br">-</td>
						<td class="tac bb">1700</td>
					</tr>
				</tbody>
			</table>
			
			
			<br><br>
			<p class="tac cw fs20">Сопутствующие работы по установке и обслуживанию кондиционеров</p>
			<table>
			<col class="col1">
			<col class="coln3">
				<tbody>
					<tr class="th0">
						<td class="tal">Вид работ</td>
						<td class="tar">Цена грн.</td>
					</tr>
					<tr>
						<td class="tal br bb">Короб (1м/п)</td>
						<td class="tar bb">110</td>
					</tr>
					<tr>
						<td class="tal br bb">Установка короба (1м/п)</td>
						<td class="tar bb">80</td>
					</tr>
					<tr>
						<td class="tal br bb">Прокладка магистрали от 5м/п</td>
						<td class="tar bb">40 за 1м/п</td>
					</tr>
					<tr>
						<td class="tal br bb">Съем стеклопакета</td>
						<td class="tar bb">100</td>
					</tr>
					<tr>
						<td class="tal br bb">Сетевой кабель</td>
						<td class="tar bb">40 за 1м</td>
					</tr>
					<tr>
						<td class="tal br bb">Работа по удлинению сетевого кабеля</td>
						<td class="tar bb">15 за 1м</td>
					</tr>
					<tr>
						<td class="tal br bb">Подъем кондиционера без лифта</td>
						<td class="tar bb">15 за 1 этаж</td>
					</tr>
					<tr>
						<td class="tal br bb">Дополнительное отверстие при монтаже</td>
						<td class="tar bb">60 за шт</td>
					</tr>
					<tr>
						<td class="tal br bb">Электрическая вилка</td>
						<td class="tar bb">40</td>
					</tr>
					<tr>
						<td class="tal br bb">Установка электрической вилки</td>
						<td class="tar bb">40</td>
					</tr>
					<tr>
						<td class="tal br bb">Штробление стены:<br>
												- бетон<br>
												- кирпич<br>
												- пеноблок<br>
						</td>
						<td class="tar bb"><br>140 за 1м<br>
											100 за 1м<br>
											80 за 1м<br>
						</td>
					</tr>
					<tr>
						<td class="tal br bb">Козырек для наружного блока</td>
						<td class="tar bb">1400</td>
					</tr>
					<tr>
						<td class="tal br bb">Установка козырька</td>
						<td class="tar bb">1200</td>
					</tr>
					<tr>
						<td class="tal br bb">Антивандальная решетка</td>
						<td class="tar bb">1500</td>
					</tr>
					<tr>
						<td class="tal br bb">Установка антивандальной решетки</td>
						<td class="tar bb">1300</td>
					</tr>
				</tbody>
			</table>
			
			
			<br><br>
			<p class="tac cw fs20">Сопутствующие работы по установке и обслуживанию кондиционеров</p>
			<table>
			<col class="col1">
			<col class="coln4">
			<col class="coln3">
				<tbody>
					<tr class="th0">
						<td class="tal">Вид работ</td>
						<td class="tac">Ед. изм.</td>
						<td class="tac">Цена грн.</td>
					</tr>
					<tr>
						<td class="tal br bb">Утепление фасада 50мм с материалами “Ceresit”</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 700</td>
					</tr>
					<tr>
						<td class="tal br bb">Утепление фасада 100мм с материалами “Ceresit”</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 800</td>
					</tr>
					<tr>
						<td class="tal br bb">Утепление балконов и лоджий 100мм</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 950</td>
					</tr>
					<tr>
						<td class="tal br bb">Утепление каменной ватой 100мм</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 1100</td>
					</tr>
					<tr>
						<td class="tal br bb">Утепление откоса</td>
						<td class="tac br bb">м/п</td>
						<td class="tac bb">от 300</td>
					</tr>
					<tr>
						<td class="tal br bb">Отштукатуривание и покраска скосов</td>
						<td class="tac br bb">м/п</td>
						<td class="tac bb">от 180</td>
					</tr>
					<tr>
						<td class="tal br bb">Покраска фасада аппаратом высокого давления</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">45</td>
					</tr>
					<tr>
						<td class="tal br bb">Грунтование фасада</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">20</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж рекламного баннера на существующий каркас</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 50</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж рекламного баннера с подготовкой каркаса</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">договорная</td>
					</tr>
					<tr>
						<td class="tal br bb">Герметизация швов</td>
						<td class="tac br bb">м/п</td>
						<td class="tac bb">270</td>
					</tr>
					<tr>
						<td class="tal br bb">Мойка окон</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 40</td>
					</tr>
					<tr>
						<td class="tal br bb">Мойка окон (после стройки)</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">после осмотра</td>
					</tr>
					<tr>
						<td class="tal br bb">Мойка аппаратом высокого давления</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 25</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж наружного блока кондиционера</td>
						<td class="tac br bb"></td>
						<td class="tac bb">от 2500</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж водосточных и вытяжных труб</td>
						<td class="tac br bb">м/п</td>
						<td class="tac bb">от 180</td>
					</tr>
					<tr>
						<td class="tal br bb">Подъем негабаритных грузов</td>
						<td class="tac br bb"></td>
						<td class="tac bb">договорная</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж балконной кровли (мягкая или профлист)</td>
						<td class="tac br bb"></td>
						<td class="tac bb">от 3000</td>
					</tr>
					<tr>
						<td class="tal br bb">Монтаж оконных ролетов</td>
						<td class="tac br bb"></td>
						<td class="tac bb">от 1500</td>
					</tr>
					<tr>
						<td class="tal br bb">Спил, обрезка деревьев</td>
						<td class="tac br bb"></td>
						<td class="tac bb">от 2500</td>
					</tr>
					<tr>
						<td class="tal br bb">Уборка снега с крыш</td>
						<td class="tac br bb">м<sup>2</sup></td>
						<td class="tac bb">от 35</td>
					</tr>
				</tbody>
			</table>
		</body>
	</html>';




 

if ($from == 'gp'){
	$subject = "Прайс на услуги компании AlpElit"; 
	$message =	"Вы получили это письмо, так как заполнили заявку на получения прайса компании AlpElit, на сайте alpelit.com.ua. "; 
	$message = $message.$price;
				
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'To: Mailer <'.$mail_f.'>' . "\r\n";
	$headers .= 'From: AlpElit <alpelit@gmail.com>' . "\r\n";
	mail($mail_f, $subject, $message, $headers);
	
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'To: Mailer <murchik.mur@gmail.com>' . "\r\n";
	$headers .= 'From: AlpElit <alpelit@gmail.com>' . "\r\n";
	$subject = "Заявка с сайта AlpElit"; 
	$message =	'Имя - '.$name."\r\n";
	$message .= 'Телефон - '.$phone."\r\n";
	$message .= 'E-mail - '.$mail_f."\r\n";
	$message .= 'Получил прайс с главной страницы'."\r\n"; 
	
	mail('murchik.mur@gmail.com', $subject, $message, $headers);
}
else{
	if ($from == 'cbt'){
		$from = "Хочет обратный звонок. Нажал кнопку сверху. \n";
	}

	if ($from == 'cbb'){
		$from = "Хочет обратный звонок. Нажал кнопку снизу. \n";
	}
	
	if ($from == 'vmwarming'){
		$from = "Интересуется утеплением. \n";
	}
	
	if ($from == 'vmlift'){
		$from = "Интересуется подъемом грузов. \n";
	}
	
	if ($from == 'vmcond'){
		$from = "Интересуется кондиционерами. \n";
	}
	
	$message =	"Имя - ".$name."\n".
				"Телефон - ".$phone."\n".$from; 
	
	mail($user_email, $subject, $message);
}
























?>