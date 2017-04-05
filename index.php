<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="contact">
      <div class="panel">
        Errors will go in here
      </div>
      <br/>
      <form action="contactform.php" method="post">
        <label>
          Your name *
          <br/>
          <input type='text' name='name' autocomplete="off">
        </lable>
        <br/>
        <label>
          Your email *
          <br/>
          <input type='text' name='email' autocomplete="off">
        </lable>
        <br/>
        <label>
          Your message *
          <br/>
          <textarea name='message' rows='8'></textarea>
        </lable>
        <br/>
        <input type='submit' value='send'>

        <p class='muted'>* means a required field</p>
      </form>
    </div>
  </body>
</html>
