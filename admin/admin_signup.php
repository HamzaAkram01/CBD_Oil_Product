<?php session_start(); ?>
<?php include('../connection/connection.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/adminlogin.css">
</head>
<body>
<div class="form-wrapper ">
  
  <form action="#" method="post">
    <h3>Sign Up here</h3>
	
    <div class="form-item">
		<input type="text" name="firstname" required="required" placeholder="First Name" autofocus required></input>
    </div>
    <div class="form-item">
		<input type="text" name="lastname" required="required" placeholder="Last Name" autofocus required></input>
    </div>
    <div class="form-item">
		<input type="text" name="email" required="required" placeholder="Email" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Sign Up" name="Sign Up" value="Sign Up"></input>
    </div>
  </form>
    <?php
        if(isset($_POST['email'])){
            include "../connection/connection.php";
            $first_name=$_POST['firstname'];
            $last_name=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['pass'];

            $sql="INSERT INTO users(first_name,last_name,email,password) values ('".$first_name."','".$last_name."','".$email."','".$password."')";
            if(mysqli_query($connection,$sql)){
                header('location:admin_login.php');
            }
            else{
                echo "Error".$sql."<br>".mysqli_error($connection);
            }

        }
        
    ?>

  
</div>

</body>
</html>