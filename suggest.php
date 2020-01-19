<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
print_r($name1);
$to = "vinayakpatil0796@gmail.com";
$subject = "From your github website";
$txt = $text;
$headers = "From: $mail on your website" . "\r\n" .
"CC: atharvachavan1336@gmail.com";

mail($to,$subject,$txt,$headers);
?>
