<?php
session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  
  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['fname'] = $row['fname'];

        echo "<script>
        window.location.href = 'user_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please enter correct email id and password.');
      window.location.href = 'index.php';
      </script>";
    }

  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Online Notice Board System</title>
        <!-- Bootstrap files --> 
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="css/style.css">
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

      <!-- Login form starts here -->
      <section id="login_form">
        <div class="row">
         <div class="col-md-4">
         </div>
          <div class="col-md-4 m-auto block">
             <center><h4>Login Form</h4></center>
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