<html>
<head>
<title>New User</title>
 <link href="fonts.css" rel="stylesheet" type="text/css"/>
  <style type="text/css">
  </style>
  
</head>
       
<body bgcolor="#004010">
<table align= center width=70% bgcolor="#cfffbf">
<tr class="white">
 <td colspan="2"><p class="text_black_huge">GTBay New User Registration</p>
 </td>
 </tr>
 <tr><td><form id="GTBay New User Registration" name="GTBayNewUserRegistration" method="post" action="">
 <table>
 <tr>
   <td><label class="labels">First Name </label>
   </td>
  <td><input name="first_name" type="text" class="textformat" id="first_name" size="35"maxlength="255"/> </td>
  </tr>
  <tr>
   <td><label class="labels">Last Name </label>
   </td>
  <td><input name="last_name" type="text" class="textformat" id="last_name" size="35"maxlength="255"/> </td>
  </tr>
  <tr>
   <td><label class="labels">Username</label>
   </td>
  <td><input name="userName" type="text" class="textformat" id="userName" size="35"maxlength="255"/> </td>
  </tr> 
  <tr>
   <td><label class="labels">Password</label>
   </td>
  <td><input name="password" type="password" class="textformat" id="password" size="35"maxlength="255"/> </td>
  </tr>
  <tr>
   <td><label class="labels">Confirm Password</label>
   </td>
  <td><input name="password_1" type="password" class="textformat" id="password_1" size="35"maxlength="255"/> </td>
  </tr>
  
      </table>
        <p>
        <label>
        <input name="cancel" type="submit" class="menu" value="Cancel" />
        </label>
        <label>
        <input name="Register" type="submit" class="menu" value="Register"/>
        </label>
        </p>
        </form>
        </td>
        </tr>
        
        </table>
        
        
    
    
    
   </td>
  
 
  </tr>
 </body>
        <?php
    if (isset($_POST['submit'])){
        
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $password_1 = $_POST['password_1'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        
        
        
        include("openDB.php");
        if ($db_found){
            $SQL="INSERT INTO regularuser (userName,password, password_1,first_name,last_name) values ($username','$password','$password_1',' $firstname', '$lastname')";
         $result = mysql_query($SQL);
         mysql_close($db_handle);
        }
      else{
          print "Database Not Found";
          mysql_close($db_handle);
      }  
    }
?>
   
 
 </html>


