<?php
//get the first name
$first_name = Input::get('name');
$phone_number = Input::get('phone');
$email = Input::get ('email');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?>

<h1>Datos del Formulario</h1>
<style> b{display: block;
float: left;
padding-right: 10px;
text-align: right;
width: 118px;}</style>
<p> <b>First name :</b> <?php echo ($first_name); ?></p>
<p> <b>Phone number :</b> <?php echo($phone_number);?></p>
<p> <b>Email address :</b> <?php echo ($email);?></p>
<p> <b>Message : </b><?php echo ($message);?></p>
<p> <b>Date : </b><?php echo($date_time);?></p>
<p> <b>User IP address : </b><?php echo($userIpAddress);?></p>

