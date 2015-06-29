<?php
ob_start("ob_gzhandler");
session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,10);
$_SESSION['n2'] = rand(1,10);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if(isset($_SESSION['errStr']))
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
$class='';
if(isset($_SESSION['sent']) && $_SESSION['sent'])
{
	$success='<br/><br/><div class="sent"><p><strong>Thank you for Subscribing.</strong></p></div>';

	//$css='<style type="text/css">#contact-form{display:none;}</style>';
	$class = 'form-completed';

	unset($_SESSION['sent']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><? echo $page[''.$page_id.'']['title'];?> | Herts Rider</title>
  <meta name="description" content="<? echo $page[''.$page_id.'']['blurb'];?>">