<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css"> 
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>   
    <?php
        require 'header.php';
    ?>
    <div class="login-page">
  <div class="form">     
    <form class="login-form" method="post" action="#">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
    </div>
</div>
</div>
    <script src="js/global.js"></script>
</body>
</html>
