<?php
session_start();

require_once 'helpers/security.php';



$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="contact">
      <?php if(!empty($errors)): ?>

        <div class="panel">
          <ul>
            <li>
              <?php
                echo implode('</li><li>',$errors);
              ?>
            </li>
          </ul>
        </div>
      <?php endif; ?>
      <br/>
      <form action="contactform.php" method="post">
        <label>
          Your name *
          <br/>
          <input type='text' name='name' autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"': '' ?>>
        </lable>
        <br/>
        <label>
          Your email *
          <br/>
          <input type='text' name='email' autocomplete="off"<?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"': '' ?>>
        </lable>
        <br/>
        <label>
          Your message *
          <br/>
          <textarea name='message' rows='8'><?php echo isset($fields['message']) ?  e($fields['message']) : '' ?></textarea>
        </lable>
        <br/>
        <input type='submit' value='send'>

        <p class='muted'>* means a required field</p>
      </form>
    </div>
  </body>
</html>


<?php
  unset($_SESSION['errors']);
  unset($_SESSION['fields']);
 ?>
