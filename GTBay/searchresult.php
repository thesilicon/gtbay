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
  <form method="post" action="itemsearch.php">
  <?php include('errors.php');?>
   <table align="left">
      <tr>
       <td>ID</td>
              <td><input type="text" name="id" class="textInput"></td>
         </tr>  
         <tr>
       <td>Item Name</td>
              <td><input type="text" name="itemname" class="textInput"></td>
         </tr> 
          <tr>
       <td>Current Bid</td>
              <td><input type="text" name="currentbid" class="textInput"></td>
         </tr> 
         <tr>
       <td>Maximum Price $</td>
              <td><input type="text" name="maxSale" class="textInput"></td>
         </tr>  
         <tr>
       <td>Higher Bidder</td>
              <td><input type="text" name="HigherBidder" class="textInput"></td>
         </tr>
          <tr>
       <td>Get It Now Price</td>
              <td><input type="text" name="gnPrice" class="textInput"></td>
         </tr>
         
          <tr>
       <td>Auction Ends</td>
              <td><input type="text" name="aucEnd" class="textInput"></td>
         </tr> 
          <p align="justify">
         <label>
        <input name="Back to Search" type="submit" class="btn" value="Back to Search"/>
        </label>

       </form>
  </body>
  </html>


