<?php
    session_start();
    require 'connection.php';
    
    $user_id = $_SESSION['id'];
    $name = $_POST['name'];
    $blog = $_POST['blog'];
    
    $q = "insert into blogs(name,blog,user_id) values('$name','$blog','$user_id')";
    $r = mysqli_query($con,$q) or die(mysqli_error($con));
    header('location:welcome.php');
?>
