   <?php include('server.php');?>
       
  <!DOCTYPE html>
  <html>
  <head>
  <title>GTBay New User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body align ="left">
  <div class="header">
     <h2>GTBay New User Registration<h2>
     </div>
     <form method="post" action="register.php">
  
       <?php include('errors.php');?>
       <div class="input-group">
        <label>First Name</label><br>
        <input type="text" name="first_name"><br>
      </div><br>
      <div class="input-group"><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name"><br>
      </div><br>
      <div class="input-group"><br>
        
        <label>Username</label><br>
        <input type="text" name="username"><br>
      </div><br>
      <div class="input-group"><br>
        <label>Password</label><br>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label> Confirm Password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
       <div class="input-group">
       <button type="submit" name="register" class="btn">Register</button>
       </div>
       </form>
  </body>
  </html>
