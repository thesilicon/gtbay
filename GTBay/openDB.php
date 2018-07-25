<?php
  $user_name = "root";
  $passsword = "";
  $database = "cs6400_spr18_team095";
  $server = "127.0.0.1";
  
  $db_handle = mysql_connect($server, $user_name, $passsword);
  $db_found = mysql_select_db($database, $db_handle);
  
?>
