<?php 
 
$sendto   = "dmitriy-korolik@yandex.ru"; // почта, на которую будет приходить письмо

$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
//$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
 
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($username) . "\r\n";
//$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
//$msg  = "";
$msg .= "Cообщение с сайта\r\n";
$msg .= "От кого:".$username."</p>\r\n";
//$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "Сайт:".$usertel."</p>\r\n";
//$msg .= "";

header('Location: http://i-7-phone.com/send.php?send=true');
if (isset($_GET['send']) && $_GET['send'] == 'true') echo 'все ок';

mail($sendto, $subject, $headers, $msg); 
 
// отправка сообщения
//if(@mail($sendto, $subject, $msg, $headers)) {
   // echo "<center><img src='images/spasibo.png'></center>";
//} else {
   // echo "<center><img src='images/ne-tpravleno.png'></center>";
//}
 
?>