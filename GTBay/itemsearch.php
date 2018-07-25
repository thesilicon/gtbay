 <?php include('server.php'); ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Item Search</title>
  <link rel="stylesheet" type="text/css" href="style.css"
  </head>
  <body>
  <div class="header">
     <h2>Item Search<h2>
     </div>
  <form method="post" action="itemsearch.php">
    <?php include('errors.php');?>
      <div class="input-group">
        <label>Keyword</label>
        <input type="text" name="keyword">
      </div>
      
      <div class="input-group">
        <label>Category</label>
        <input type="text" name="cName">
      </div>
      
      <div class="input-group">
        <label>Minimum Price $</label>
        <input type="text" name="minSale">
      </div>
      
      <div class="input-group">
        <label>Maximum Price $</label>
        <input type="text" name="maxSale">
      </div>
      
      <div class="input-group">
        <label>Condition at least $ </label>
        <input type="text" name="icondition">
      </div>
      
       <div class="input-group">
       <button type="submit" name="cancel" class="btn">Cancel</button>
       </div>
       
       <div class="input-group">
       <button type="submit" name="search" class="btn">Search</button>
       </div>
       </form>
  </body>
  </html>
    

