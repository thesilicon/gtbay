  
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Item Ratings</title>
    <meta name="viewport" content="initial-scale=1,width=device-width">
    <link  href="itemrating.css" rel="stylesheet">
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    </head>
  <body>
  
  <table align= center width=70% bgcolor="#cfffbf">
<tr class="yellow">
 <td colspan="2"><p class="text_black_huge">Item Ratings</p>
 </td>
 </tr>
 <tr><td><form id="item Ratings" name="item Ratings" method="post" action="">
 <table>
 
  
  <tr>
   <td><label class="labels">Item ID</label>
   </td>
  <td><input name="Item ID"type="text" class="content" id="itemId" size="35"maxlength="255"/> </td>
  </tr> 
  <tr>
   <td><label class="labels">Item Name</label>
   </td>
   <td><input name="Item Name"type="text" class="content" id="itemName" size="35"maxlength="255"/> </td>
  </tr>
  <td><label class="labels">Average Rating</label>
   </td>
  <td><input name="Average Rating"type="text" class="content" id="avgrating" size="35"maxlength="255"/> </td>
  </tr>
  
       <x-star-rating>
       <label>My Rating</label>
       <div class="star "></div>
       <div class="star "></div>
       <div class="star "></div>
       <div class="star "></div>
       <div class="star "></div>
       </x-star-rating>
   
     
     </table>
      <p>
        <label>
        <input name="submit" type="submit" class="menu" value="cancel" />
        </label>
        <label>
        <input name="Reset" type="submit" class="menu" value="Rate This Item"/>
        </label>
        </p>
        </form>
        
       <?php
        if(isset($_POST['submit'])){
            include(DBconnect.php);
            if(db_found){
                
           
            
            $itemid= $_POST['itemID'];
            $itemname= $_POST['itemName'];
            $averagerate= $_POST['avgrating'];
            $comment= $_POST['comment'];
          
                        
             $SQL="SELECT * FROM itemratings WHERE(itemID,itemName,avgrating,comment) 
             values('$itemid''$itemname','$averagerate','$comment','$condition)";
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


