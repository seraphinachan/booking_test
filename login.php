<?php
  include './dbconfig.php';
 ?>

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
  <div class="login-form">
    <div class="center">
      <h1>Login</h1>
      <form action="login_ok.php" name="login" method="POST">
        <div class="txt_field">
          <input name="userid" id="userid" type="text" required>
          <span></span>
          <label>아이디</label>
        </div>
        <div class="txt_field">
          <input name="userpass" id="userpass" type="password" required>
          <span></span>
          <label>비밀번호</label>
        </div>
        <div class="pass">비밀번호를 잊어버리셨나요?</div>
         <button class="login_btn" id="login_btn">Login</button>
        <div class="signup_link">
          아직 회원이 아니신가요? <a href="./signup.php">회원가입</a>
        </div>
      </form>
    </div>
  </div>

  <?php
    include './footer.php';
   ?>
</body>
</html>
