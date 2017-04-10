<meta http-equiv='refresh' content='1; url=http://neurallery.com/'>
<meta charset="UTF-8" />
<?php
//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
//$name = $_GET['name']; // Вытаскиваем имя в переменную
$email = $_GET['e-mail']; // Вытаскиваем почту в переменную
$message = "Сообщение от\r\n$email."; // Формируем сообщение, отправляемое на почту
$to = 'vyatlev@gmail.com'; // Задаем получателя письма

$from = "neurallery.com"; // От кого пришло письмо

$subject = "Письмо с формы сайта http://neurallery.com/"; // Задаем тему письма

$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)





IF (mail($to, $subject, $message, $headers)) { // При помощи функции mail, отправляем сообщение, проверяя отправилось оно или нет
echo "<script>alert(\"Thank you! We'll connect you soon\");</script>"; // Отправка успешна
}
ELSE {
echo "<script>alert(\"Something has gone wrong\");</script>"; // Письмо не отправилось
}
?>
