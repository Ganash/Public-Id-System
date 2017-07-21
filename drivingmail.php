<?php

$to='kv.ganesh2013@vit.ac.in';
$subject='Driving Liscence Renewal';
$body='This is to kindly inform that your renewal date is going to expired.' ."\n \n ".'Please renew driving liscence';
$headers='From: ganaganesh2013@gmail.com';

if(mail($to,$subject,$body,$headers))
{
	echo 'Email sent to '.$to;
}
else
echo "There is problem in mail";

?>