<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Online Notice Board System</title>
        
    
    </head>
    <body>
        <br>
        <center><h1>All notices</h1></center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"online_notice_board");
         $query = 'select * from notice';
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <div class="card">
                <div class="card_body">
                    <h2 class="card-title"><?php echo $row['title'];?></h2>
                    <p class="card-text"><?php echo $row['message'];?></p>
                </div>
            </div>
         <?php
         }
         ?>
         

        
    
   
    </body>
</html>