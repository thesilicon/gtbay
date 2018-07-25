<?php include('server.php'); ?>
<!DOCTYPE html>
<html

<head>
<title>Auction Results</title>
<meta name="viewport" content="initial-scale=1,width=device-width">
 <link href="itemrating.css" rel="stylesheet" type="text/css"/>
 
  <style type="text/css">
  </style>
  
</head>
<body bgcolor="#004010">
<table align= center width=70% bgcolor="#cfffbf">
<tr class="yellow">
 <td colspan="2"><p class="text_black_huge">Auction Results</p>       
 </td>
 </tr>
 
 <tr><td><form id="Auction Results" name="Auction Results" method="post" action=""> 
  <tr>
  <th>ID</th>
  <th>Item Name</th>
  <th>Sale Price</th>
  <th>Winner</th>
  <th>Auction Ended</th>
  </tr>
  
    
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
 
 
 <?php
    if (isset($_POST['submit'])){
        
         $itemid = $_POST['itemID'];
         $itemname = $_POST['itemName'];
         $saleprice = $_POST['saleprice'];
         $winner = $_POST['finalwinner'];
         $auction = $_POST['auctended'];
         
         

        
       
        
        include("openDB.php");
        if ($db_found){
            $SQL="SELECT * FROM auctionresults WHERE (itemID,itemName,saleprice,finalwinner,auctended) 
            values ('$itemid','$itemname','$saleprice','$winner','$auction')";
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



