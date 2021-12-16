<?php

			$server = $_SERVER['HTTP_HOST'];
		 
			if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
			if (empty($phone))
			{
				echo "I can not send!";
				exit;
			}
			$ip = $_SERVER['REMOTE_ADDR'];
			
			if (isset($_POST['name'])) {$name = '<strong>Имя: </strong> '.($_POST["name"]);}
			if (isset($_POST['theme'])) {$theme = '<br><strong>: </strong> '.($_POST["theme"]);}
			
			$success_url = 'success.html'; 
 
			
			$mail_header = "MIME-Version: 1.0\r\n";
			$mail_header.= "Content-type: text/html; charset=UTF-8\r\n";
			$mail_header.= "From: ВИЗА <informer@$server>\r\n";
			 
			
			$to = "nfrezerv@yandex.ru";
			$subject = "Заявка с сайта: $server";
			
			$message = "$name<br><strong>Телефон:</strong> $phone  $theme
			<br><strong>Время заказа:</strong> ".date("d.m.Y H:i:s")." <br><strong>IP покупателя:</strong> $ip";
			if (mail($to,$subject,$message,$mail_header))
			header('Location: '.$success_url);
			else echo 'Oshibka otpravki - otklyuchena funkciya (php mail). Obratites v podderzhku xostinga';
		?>