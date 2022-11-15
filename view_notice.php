<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Online Notice Board System</title>
        
    
    </head>
    <body>
        <br>
        <center><h1>Notices for you</h1></center>
        <?php
        session_start();
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"online_notice_board");
         $query = "select * from notice where to_whom = 'To all' OR to_whom = 'To fname $_SESSION[fname]'";
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