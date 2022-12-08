<?php
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 if (mail('nik_ard@mail.ru', 'Заявка с сайта', $fio )){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
?>