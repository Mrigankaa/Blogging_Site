<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Blog.com</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body><br><br>
    <div class="container">
    <form class="jumbotron text-center" method="post" action="add_blog.php">
    <div class="form-group">
        <label>Author</label>
        <input type="name" class="form-control"  placeholder="Enter the name" name="name">
    </div> 
    <div class="form-group">
        <label>Add your blog</label>
        <textarea class="form-control" rows="5" name="blog"></textarea>
    </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    </div>    
</body>
</html>
