<?php include('server.php'); ?>
   
      
  <!DOCTYPE html>
  <html>
  <head>
  <title>Item for Sale</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>Item for Sale</h2>
     </div>
  <form method="post" action="itemforsale.php">
  
       <?php include('errors.php');?> 
       <input type="hidden" name="submit" value="true"/>
      <div class="input-group">
        <label>Item ID</label>
        <input type="text" name="id">
      </div>
      <div class="input-group">
        <label>Item Name</label>
        <input type="text" name="itemName">
      </div>
      <div class="input-group">
        <label>Description</label>
          <input type="text" name="description">
          
        
        </div>
        <div class="input-group">
        <label>Category</label>
          <input type="text" name="category">  
        </div>
        
    <div class="input-group">
        <label>Returns Accepted?</label>
        <input type="checkbox" name="returnable">
    </div>
        
      
      
      <div class="input-group">
        <label>Get It Now price $</label>
        <input type="text" name="gnPrice">
         <button type="submit" name="Get It Now!" class="btn">Get It Now!</button>
      </div>
          <table>
          <th>Auction ends</th>
               <tr>
             
              <td>Bid Amount</td>
              <td><input type="text" name="bidamount" class="textInput"></td>
            </tr>
            <tr>
             <td>Time of bid</td>
              <td><input type="date" name="Time of Bid" class="textInput"></td>
              <td><input type="time" name="Time of Bid" class="textInput"></td>
              <td><input type="submit" name="timeofbid" class="textInput"></td>
            </tr>
            </table>
            <div class="input-group">
        <label>Your Bid</label>
        <input type="text" name="YourBid">
    </div>
       <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
        <div class="input-group">
       <button type="submit" name="Bid On This Item" class="btn">Bid On This Item</button>
       </div>
       </form>
       <?php
        if(isset($_POST['submit'])){
            include(DBconnect.php);
            if(db_found){
                
           
            
            $itemid= $_POST['itemID'];
            $itemname= $_POST['itemName'];
            $description= $_POST['description'];
            $category= $_POST['category'];
            $condition= $_POST['condition'];
            $returns= $_POST['returnable'];
            $nowprice= $_POST['gnPrice'];
            $auctionend= $_POST['Auction ends'];
            $yourbid= $_POST['YourBid'];
          
             
             $returns= $_POST['returnable'];
             $SQL="SELECT * FROM item WHERE(itemID,itemName,description,category,condition,returnable,gnPrice,Auction ends) 
             values('$itemid''$itemname','$description','$category','$condition','$returns','$auction','$nowprice','$auctionend','$yourbid')";
             $result = mysql_query($SQL); 
            }
            else{
                 print "Database NOT Found";
      mysql_close($link);
            }    
            
        }
?>
  </body>
  </html>


