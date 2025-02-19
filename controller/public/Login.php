<?php
//////////////////////////////////
/// 1-Login using AJAX Request
//////////////////////////////////
require "config/enviroment.php";
//LOGIN
if(isset($_POST['email']) && isset($_POST['password'])):
echo $response=userLogin($_POST['email'], $_POST['password'], 'users');
endif;
exit();
