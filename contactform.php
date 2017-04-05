<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = array();

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
  $fields = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message']
  ];

  foreach($fields as $field => $data){
    if(empty($data)){
      $errors[] = 'The ' . $field . ' field is required.';
    }
  }

  if(empty($errors)){
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'ganieto1@gmail.com';
    //$mail->Password = 
    $mail->SMTPSecure = 'ssl';
    $mail->Port= 465;

    $mail->isHTML();
    $mail->Subject = 'Contact form submitted';
    $mail->Body = 'From:' . $fields['name'] . '(' . $fields['email'] . ')<p>' . $fields['message'] . '</p>';

    $mail->FromName = 'Contact';
    $mail->AddAddress('ganieto1@gmail.com', 'German');
    //$mail->AddReplyTo($fields['email'], $fields['name']);

    if($mail->send()){
      header('Location: thanks.php');
      die();
    } else{
      $errors[] = 'Sorry something went wrong, please try agian.';
    }

  }

} else {
  $errors[] = 'Somethign went wrong';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: index.php');
?>
