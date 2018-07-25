  <?php include('server.php'); ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>GTBay Login Screen</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>GTBay Login<h2>
     </div>
  <form method="post" action="login.php">
    <?php include('errors.php');?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
      </div>
      
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      
       <div class="input-group">
       <button type="submit" name="login" class="btn">Login</button>
       </div>
       <p>
          <a href="register.php">Register</a>
       </p>
       </form>
  </body>
  </html>

