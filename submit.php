<?php

/* config start */

$emailAddress = 'info@firstcar.co.uk';

/* config end */


require "phpmailer/class.phpmailer.php";

session_name("fancyform");
session_start();


foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}


$err = array();

//if(!checkLen('name'))
//	$err[]='The name field is too short or empty!';

if(!checkLen('email'))
	$err[]='The email field is too short or empty!';
else if(!checkEmail($_POST['email']))
	$err[]='Your email is not valid!';
	
// if(!checkLen('tel'))
	// $err[]='The tel field is too short or empty!';

//if(!checkLen('company'))
//	$err[]='You have not entered a company';

//if(!checkLen('message'))
//	$err[]='The enquiry field is too short or empty!';

//if((int)$_POST['captcha'] != $_SESSION['expect'])
//	$err[]='The captcha code is wrong! Prove you are not a spambot';


if(count($err)) 
{
	if($_POST['ajax'])
	{
		echo '-1';
	}

	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
}


$msg='Herts Rider Subscriber';


$mail = new PHPMailer();
$mail->IsMail();

$mail->AddReplyTo($_POST['email']);
$mail->AddAddress($emailAddress);
$mail->SetFrom($_POST['email']);
$mail->Subject = "Herts Rider Subscriber";

$mail->MsgHTML($msg);

$mail->Send();


unset($_SESSION['post']);

if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

?>
