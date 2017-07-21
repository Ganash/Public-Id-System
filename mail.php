<?php

$to='kv.ganesh2013@vit.ac.in';
$subject='This is an email';
$body='This is a test mail \n\n Hope This will work';
$headers='From: ganaganesh2013@gmail.com';

if(mail($to,$subject,$body,$headers))
{
	echo 'Email sent to '.$to;
}
else
echo "There is problem in mail";

?>