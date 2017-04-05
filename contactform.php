<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = array();

print_r($_POST);
if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
  echo 'All set';
}

?>
