<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  
  if(isset($_POST['login'])){
    $query = "select * from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href = 'admin_dashboard.php';
        </script>";
      }
    }
    

  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Online Notice Board System</title>
        <!-- Bootstrap files --> 
        <link rel="stylesheet" type="text/css" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
       <!-- Header section code start here -->
      <div class="row" id="header">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <h3>Online Notice Board System</h3>
        </div>
        <div class="col-md-4">
        </div>
      </div>

      <!-- Admin Login form starts here -->
      <section id="login_form">
        <div class="row">
         <div class="col-md-4">
         </div>
          <div class="col-md-4 m-auto block">
             <center><h4>Admin Login Form</h4></center>
            <form action="index.php" method="post">
              <div class="form-group">
               <label>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
              </div>
              <div class="form_group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your password">
              </div>
              <center><button type="submit" name="login">Login</button></center>
                <div class="col-md-4">
                </div>
            </form>
           <p><a href="register.php">Click here to register</a></p>
          </div>
        </div>
      </section>
    </body>
</html>