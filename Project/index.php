<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        require 'header.php';
    ?>    
    <div class="container">
        <div class="jumbotron text-center" style="background-color:#596157">        
            <h1 class="display-3">Welcome</h1>
            <h4 class="display">
                This is Blogging website.
            </h4>  
        </div>
    </div>
    <footer class="footer" style="background-color:#ff9c71">
        <div class="container">
            <!--<h4>
                <center>
                    This website is designe by Mriganka Choudhury
                </center>
            </h4>-->
        </div>
    </footer>
</body>
</html>