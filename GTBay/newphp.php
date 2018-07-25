   <?php include('server.php'); ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Item Ratings</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>Item Ratings<h2>
     </div>
  <form method="post" action="itemratings.php">
    <?php include('errors.php');?>
      <div class="input-group">
        <label>Item ID</label>
        <input type="text" name="id">
      </div>
      
      <div class="input-group">
        <label>Item Name</label>
        <input type="text" name="itemname">
      </div>
      
      <div class="input-group">
        <label>Description</label>
        <input type="text" name="description">
      </div>
      
       <div class="input-group">
        <label>Average Rating</label>
        <input type="text" name="cName">
      </div>
      
      <div class="input-group">
        <label>Condition</label>
        <input type="text" name="icondition">
      </div>
      
       <div class="input-group">
        <label>Returns Accepted?</label>
        <input type="text" name="returnable">
      </div>
      
      <div class="input-group">
        <label>Get It Now price $</label>
        <input type="text" name="gnPrice">
      </div>
      
      <div class="input-group">
        <label>Auction Ends</label>
        <input type="text" name="aucEnd">
      </div>
      <p>Latest Bids</p>
      
      <div class="input-group">
      
        <label>Your Bid $</label>
        <input type="text" name="yourbid">
      </div>
      
       <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
       <div class="input-group">
       <button type="submit" name="bid on this item" class="btn">Bid On This Item</button>
       </div>
       
       </form>
  </body>
  </html>




