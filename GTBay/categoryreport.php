<?php include('server.php'); 
$SQL="SELECT * FROM catreport";
$records=mysql_query($SQL);
?>
<!DOCTYPE html>
<html

<head>
<title>Category Report</title>
<meta name="viewport" content="initial-scale=1,width=device-width">
 <link href="itemrating.css" rel="stylesheet" type="text/css"/>
 
  <style type="text/css">
  </style>
  
</head>
<body bgcolor="#004010">
<table align= center width=70% bgcolor="#cfffbf">
<tr class="yellow">
 <td colspan="2"><p class="text_black_huge">Category Report</p>       
 </td>
 </tr>
 
 <tr><td><form id="Category Report" name="Category Report" method="post" action="categoryreport.php"> 
  <tr>
  <th>Category</th>
  <th>Total Items</th>
  <th>Min Price</th>
  <th>Max Price</th>
  <th>Average Price</th>
  <tr>
   <?php
    while($catreport=mysqli_fetch_assoc($records)){
        echo "<tr>";
        
        echo "<td>".$catreport['category']."</td>";
        
        echo "<td>".$catreport['totalitems']."</td>";
        
        echo "<td>".$catreport['minprice']."</td>";
        
        echo "<td>".$catreport['maxprice']."</td>";
        
        echo "<td>".$catreport['avgprice']."</td>";
        
        echo "</tr>";
    }
?>
    
    
        <p align="justify">
         
        <label>
        <input name="submit" type="submit" class="menu" value="Done" />
        </label>
        
        </p>
        </form>
        </td>
        </tr>
      </table>
      </table>
        
        
    
    
    
   </td>
  
 
  </tr>
 </body>
   
 </html>




