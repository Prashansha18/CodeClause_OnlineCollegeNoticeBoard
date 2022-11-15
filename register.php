<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  
  if(isset($_POST['register'])){
    $query = "insert into users values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successful..You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed..Try again.');
      window.location.href = 'register.php';
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
             <center><h4>Registration Form</h4></center>
            <form action="" method="post">
            <div class="form-group">
               <label>First Name:</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter your firstname">
              </div> 
              <div class="form-group">
               <label>Last Name:</label>
                <input class="form-control" type="text" name="lname" placeholder="Enter your lastname">
              </div> 
              <div class="form-group">
               <label>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
              </div>
              <div class="form_group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your password">
              </div>
              <br>
              <div class="form-group">
              <label>Select your class:</label>
                <select class="form.control" name="class">
                    <option>-Select-</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
              </div> 
              <center><button type="submit" name="register">Register</button></center>
                <div class="col-md-4">
                </div>
            </form>
           <p><a href="index.php">Already registered..Click here to login</a></p>
          </div>
        </div>
      </section>
    </body>
</html>