<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$select= $_POST['select']
$token = "1448025412:AAGnmr_PLLsUo_PRsQ5KNTJP_1syXtcTIkI";
$chat_id = "-426686772";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Услуга: ' => $select,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram && $sendToTelegram2) {
  header('Location: Thanks.html');
} else {
  echo "Error";
}
?>