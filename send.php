<?php
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 mail('nik_ard@mail.ru', 'Заявка с сайта', $fio )
?>