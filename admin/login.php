<html>
  <head>
    <title>Timedoor Challenge - Level 8 | Login</title>
    
    <?php include('template/style.php') ?>
    <?php include('template/script.php') ?>
    
    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Javascript End -->
  </head>
  
  <body id="login">
    <div class="login-box">
      <div class="login-box-head">
        <h1>Login</h1>
        <p>Please login to continue...</p>
      </div>
      <div class="login-box-body">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username">
          <p class="mt-5 small text-danger">*this field can't be empty</p>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
          <p class="mt-5 small text-danger">*this field can't be empty</p>
        </div>
      </div>
      <div class="login-box-footer">
        <div class="text-right">
          <a href="index.php" class="btn btn-primary">Submit</a>
        </div>
      </div>
    </div>
  </body>
  
</html>