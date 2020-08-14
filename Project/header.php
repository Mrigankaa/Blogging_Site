<nav class="navbar navbar-expand-sm navbar-dark mb-3">
  <div class="container">
    <h2 class="navbar-brand">Blogs.Com</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>        
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php
        if(isset($_SESSION['email']))
        {
        ?>
          <li class="nav-item">
              <a href="blog.php" class="nav-link">Add Blog</a>
            </li>        
            <li class="nav-item">
              <a href="index.php" class="nav-link">Logout</a>
      <?php
              session_destroy();
      ?>
            </li>  
      <?php
        }else
        {
      ?>
          <li class="nav-item">
              <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="register.php" class="nav-link">Register</a>
            </li>  
      <?php  
        }   
      ?>       
               
      </ul>
    </div>
  </div>
</nav>
