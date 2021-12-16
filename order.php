<?php
    
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $hel_bot = $_POST["username"];
    
     
    if(empty($hel_bot)){     
        // собираем данные из формы
        
        $message .= "Имя клиента: " . $_POST['dow'] . "<br/>"; 
        $message .= "Телефон: " . $_POST['userphone'] . "<br/>";
        
                  
        send_mail($message); // отправим письмо
        
    }
    else {
        header("Location:http://work.vizazdes.by/");
    };
      
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "nfrezerv@yandex.ru"; 
        // тема письма
        $subject = 'Заявка с сайта: '.$_SERVER['HTTP_HOST']; // тема письма с указанием адреса сайта
         
        // заголовок письма
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $mail_header.= "From: ВИЗА <informer@$server>\r\n";
        
        
         
        // отправляем письмо 
       mail($mail_to, $subject, $message, $headers);
            
    }
    

    