<html>
<head>
<title>Gtbay</title>
 <link href="fonts.css" rel="stylesheet" type="text/css"/>
  <style type="text/css">
  </style>
  
</head>
       
<body bgcolor="#004010">
<table align= center width=70% bgcolor="#cfffbf">
<tr class="yellow">
 <td colspan="2"><p class="text_black_huge">GTBay Login</p>
 </td>
 </tr>
 <tr><td><form id="GTBay Login" name="GTBay Login" method="post" action="">
 <table>
 
  
  <tr>
   <td><label class="labels">Username</label>
   </td>
  <td><input name="userName"type="text" class="textformat" id="userName" size="35"maxlength="255"/> </td>
  </tr> 
  <tr>
   <td><label class="labels">Password</label>
   </td>
   <td><input name="password"type="password" class="textformat" id="password" size="35"maxlength="255"/> </td>
  </tr>
    </table>
        <p>
        <label>
        <input name="submit" type="submit" class="menu" value="Login" />
        </label>
        <label>
        <input name="Reset" type="submit" class="menu" value="Register"/>
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
         $passsword = $_POST['password'];

        
       
        
        include("openDB.php");
        if ($db_found){
            $SQL="INSERT INTO login (userName,password) values ('$username','$passsword')";
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


