 <?php include('server.php'); ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Search Results</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>Search Results<h2>
     </div>
  <form method="post" action="searchresults.php">
    <?php include('errors.php');?>
      <div class="input-group">
        <label>ID</label>
        <input type="text" name="id">
      </div>
      
      <div class="input-group">
        <label>Item Name</label>
        <input type="text" name="itemname">
      </div>
      
      <div class="input-group">
        <label>Current Bid</label>
        <input type="text" name="currentbid">
      </div>
      
      <div class="input-group">
        <label>Maximum Price $</label>
        <input type="text" name="maxSale">
      </div>
      
      <div class="input-group">
        <label>Higher Bidder</label>
        <input type="text" name="higherbidder">
      </div>
      
      <div class="input-group">
        <label>Get It Now Price</label>
        <input type="text" name="gnPrice">
      </div>
      
      <div class="input-group">
        <label>Auction Ends</label>
        <input type="text" name="aucEnd">
      </div>
             
       <div class="input-group">
       <button type="submit" name="Back to Search" class="btn">Back to Search</button>
       </div>
       
       </form>
  </body>
  </html>


