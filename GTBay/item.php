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
  <form method="post" action="register.php">
  
       <?php include('errors.php');?>
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
        <input type="text" name="cName">
      </div>
      <div class="input-group">
        <label>Condition</label>
        <input type="text" name="icondition">
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
        <label>Auction ends in</label>
        <input type="text" name="aucEnd">
      </div>
      <div class="input-group">
        <label>Get It Now price $</label>
        <input type="text" name="gnPrice">
      </div>
      <div class="input-group">
        <label>Returns Accepted?</label>
        <input type="text" name="returnable">
      </div>
       <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
        <div class="input-group">
       <button type="submit" name="list my item" class="btn">List My Item</button>
       </div>
       </form>
  </body>
  </html>

