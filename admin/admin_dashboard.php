<?php
if(isset($POST['update_profile'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query = "update admins set name='$_POST[name]' ,email='$_POST[email]' ,password='$_POST[password]' ,
              where email ='$_SESSION[email]'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Profile Updated succesfully..');
        window.location.href = 'admin_dashboard.php'
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('can't update..');
        window.location.href = 'admin_dashboard.php'
        </script>";

    }
    
}

if(isset($_POST['send_notice'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query = "insert into notice values('$_POST[post_date]','$_POST[to_whom]','$_POST[subject]','$_POST[message]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Notice created.');
      window.location.href = 'admin_dashboard.php';
      </script>";
    }
    else{
      echo "<script>alert('Try again.');
      window.location.href = 'admin_dashboard.php';
      </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Dashboard</title>
        <!-- Bootstrap files --> 
        <link rel="stylesheet" type="text/css" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="../css/style.css">

        <script src="../jQuery/jquery-3.6.1.js" charset="utf-8"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#edit_profile_button").click(function(){
                    $("#main_content").load('edit_profile.php');
                });
                $("#create_notice_button").click(function(){
                    $("#main_content").load('create_notice.php');
                });
                $("#view_notice_button").click(function(){
                    $("#main_content").load('view_all_notice.php');
                });
            });

            </script>
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
<section id="container">
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <img src="../image/me.jpg" class="img-rounded" width="200px" height="200px"><br>
            
            <button type="button class="btn btn-success" id="edit_profile_button">Edit Profile</button><br>
            <button type="button class="btn btn-success" id="create_notice_button">Create Notice</button><br>
            <button type="button class="btn btn-success" id="view_notice_button">View all notices</button><br>
            <a href="logout.php" type="button" class="btn btn-success">Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
            <h2>Welcome to Admin Dashboard</h2>
            <p>
                This is the admin dashboard page. here admin can manage notice board system. he can create a notice,delete a notice
                and all the replies of the notice.</p>
                <p>
                This is the admin dashboard page. here admin can manage notice board system. he can create a notice,delete a notice
                and all the replies of the notice.</p>
                <p>
                This is the admin dashboard page. here admin can manage notice board system. he can create a notice,delete a notice
                and all the replies of the notice.</p>
        </div>
    </div>
</section>
</body>