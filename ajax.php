<?php
			// токен бота
		 define('TELEGRAM_TOKEN', '2134079185:AAGt8n69AshEn9HWIKkMPe9tnBVu3hPptwk');
		 // ваш внутренний ID
		 define('TELEGRAM_CHATID', '-764116271');
		$message = 'Сообщение';
		$ch = curl_init('https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage?chat_id='.TELEGRAM_CHATID.'&text='.$message); // URL
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
		curl_setopt ($ch, CURLOPT_PROXY, "127.0.03.1:8080");
		curl_setopt ($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		curl_exec($ch); // Делаем запрос
		curl_close($ch); // Завершаем сеанс cURL
?>