<?php
    session_start();
    require 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];        
    
    $q = "insert into users(username,password,email) values('$username', '$password', '$email')";
    $i = mysqli_query($con, $q) or die(mysqli_error($con));
?>
    <script>
        alert("User Register Successfully");
    </script>
    <meta http-equiv="refresh" content="0;url=login.php" />   
    
