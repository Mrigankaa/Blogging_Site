<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog.com</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Author</th>
            <th scope="col">Blog</th>
            </tr>
        </thead>
    <?php
        require "header.php";
        $a = $_SESSION['id'];
        
        $q = "SELECT * FROM blogs WHERE user_id = $a";
        $r = mysqli_query($con,$q);
        $total = mysqli_num_rows($r);
        
        if($total!=0)
        {            
            while($row = mysqli_fetch_assoc($r))
            { 
    ?>            
            <tbody>
                <tr>
                    <td>
                        <?php echo $row['name'];?>
                    </td>
                    <td>
                        <?php echo $row['blog'];?>
                    </td>
                </tr>
            </tbody>
    <?php
            
            }
        }
    ?>  
    </table>
    </div>
        
</body>
</html>
