   <?php include('server.php');?>
      
  <!DOCTYPE html>
  <html>
  <head>
  <title>New Item for Auction</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>New Item for Auction</h2>
     </div>
  <form method="post" action="searchresult.php">
  
       <?php include('errors.php');?> 
       <input type="hidden" name="submit" value="true"/>
      <div class="input-group">
        <label>Item Name</label>
        <input type="text" name="itemName">
      </div>
      <div class="input-group">
        <label>Description</label>
        <input type="text" name="description">
      </div>
      <div class="input-group">
        <label>Category:
        <select name="category">
        <option value="electronics">Electronics</option>
        <option value="housing">Housing</option>
        <option value="cars">Cars</option>
        </select>
        </label>
        </div>
      <div class="input-group">
        <label>Condition:
        <select name="Condition">
        <option value="New">New</option>
        <option value="vgood">Very Good</option>
        <option value="good">Good</option>
        <option value="fair">Fair</option> 
        <option value="poor">Poor</option> 
        
        </select>
        </label>
        
      </div>
      <div class="input-group">
        <label>Start auction bidding at $</label>
        <input type="text" name="startBid">
      </div>
      <div class="input-group">
        <label>Minimum sale price $</label>
        <input type="text" name="minSale">
      </div>
      <div class="input-group">
        <label>Auction ends in:
         <select name="Auction ends in">
        <option value="1day">1day</option>
        <option value="3days">3 days</option>
        <option value="5days">5 days</option>
        <option value="7days">7 days</option>
        </select>
        
        </label>
       
      </div>
      <div class="input-group">
        <label>Get It Now price $</label>
        <input type="text" name="gnPrice">
      </div>
      
        <label>Returns Accepted?</label>
        <input type="checkbox" name="returnable">
      </div>
       <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
        <div class="input-group">
       <button type="submit" name="list my item" class="btn">List My Item</button>
       </div>
       </form>
       <?php
        if(isset($_POST['submit'])){
            include(DBconnect.php);
            if(db_found){
                
           
            
            $itemname= $_POST['itemName'];
            $description= $_POST['description'];
            $category= $_POST['category'];
            $condition= $_POST['condition'];
            $auction= $_POST['startBid'];
            $miniSale= $_POST['minSale'];
             $auctionend= $_POST['Auction ends in'];
             $nowprice= $_POST['gnPrice'];
             $returns= $_POST['returnable'];
             $SQL="SELECT * FROM item WHERE(itemName,description,category,condition,startBid,minSale,Auction ends in,gnPrice,returnable) 
             values('$itemname','$description','$category','$condition','$auction','$miniSale','$auctionend','$nowprice','$returns')";
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

