<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php
  include './header.php';
?>
  <div class="signup-form">
    <div class="center">
      <h1>Signup</h1>
      <form action="" method="POST">
        <div class="txt_field">
          <label for="username">아이디</label>
          <div class="input_field">
            <input type="text" id="username" required>
            <button>아이디 중복확인</button>
          </div>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>비밀번호</label>
        </div>
        <input class="signup-submit" type="submit" value="Signup">
      </form>
    </div>
  </div>

  <?php
    include './footer.php';
   ?>
</body>
</html>
