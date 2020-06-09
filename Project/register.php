<?php
    session_start();
    require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css"> 
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>   
    <?php
        require 'header.php';
    ?>
    <div class="login-page">
    <div class="form">
    <form class="login-form" action="validate_registration.php" method="post" >
      <input type="username" placeholder="username" name="username" required/>
      <input type="password" placeholder="password" name="password" required/>
      <input type="email" placeholder="email" name="email" required/>
      <button>create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>      
    </div>
    </div>
    <script src="js/global.js"></script>
</body>
</html>

