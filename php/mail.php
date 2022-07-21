<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div style="margin-top:15%; text-align: center;">

  <?php
    $name = urldecode($_POST['name']);
    $phone = urldecode($_POST['phone']);
    $type_room = urldecode($_POST['type_room']);
    $area_room = urldecode($_POST['area_room']);
    $to = 'pride.interiorstudio@gmail.com';
    $title ="На сайт WWW.PRIDESTUDIO.COM.UA поступила новая заявка.";
    $from='no-reply@pridestudio.com.ua, pridedesignstudio@gmail.com';
    $message = "<table style='width: 100%; border-collapse: collapse;'>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;width:75%;'> $name</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;width:75%;'>$phone</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Какой тип помещения хотите спроектировать?:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;width:75%;'>$type_room</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Какова примерная площадь вашего помещения?:</b></td>
                        <td style='padding: 10px; border: #e9e9e9 1px solid;width:75%;'>$area_room</td>
                    </tr>
                 </table>
                ";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $from . "\r\n";


       mail($to, $title, $message, $headers);
      echo '<div class="mailblock">
        <storng style="font-family: Open Sans, Arial, sans-serif;
        font-size:30px;color:#000;" >СПАСИБО! <br> ВАША ЗАЯВКА ОТПРАВЛЕНА. <br> В ближайшее время мы с вами свяжемся!</strong>
        <br>

        <br>
        <p>Вы будете перенаправлены на главную страницу через <span id="timer_inp">5</span> секунды</p>
      </div>';


  ?>
  </div>
</body>
</html>