<?php 
include "connection/connection.php";
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(first_name,last_name,email,password) values ('".$first_name."','".$last_name."','".$email."','".$password."')";
if(mysqli_query($connection,$sql)){
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}

$sql2="select * from users where email =  '".$email_check."' and password = '".$password_check."'";
if(mysqli_query($connection,$sql2)){
}
else{
	echo "Error".$sql2."<br>".mysqli_error($connection);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
    integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Home</title>
</head>

<body>
<?php include 'assets/header.php'; ?>

<section class="banner-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-txt">
					
					<h1>LOGIN</h1>
					
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<div class="banner-img">
					<img src="images/bottle.png" alt="img">
                    
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Login and SignUP Section -->
<?php
// include "connection/connection.php";
// $email_check=$_POST['email_check'];
// $password_check=$_POST['password_check'];
// $sql="Select * from users where email = '".$email_check."' and password = '".$password_check."'";
// $result=mysqli_query($connection,$sql);
// $data=array();
// if (mysqli_num_rows($result)>0) {
//         $data=mysqli_fetch_assoc($result);
// }
// else{
//     echo "Password And Email Incorrect";
// } 

?>
<section class="loginsec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

            <form method="POST">
            <div class="login">
                    <div class="loginhead">
                        <h2>Login To Your Account</h2>
                    </div>
                    <div class="input">
                    <input type="text" placeholder="email" class="form" name="email_check">
                    <input type="text" placeholder="Password " class="form" name="password_check">
                </div>
                    <button href="Home.php" type="submit">Log in</button>
                    <div class="row loginfooter">
                        <div class="col-lg-6">
                            <input type="checkbox" name="" id="">Remember Me!
                        </div>
                        <div class="col-lg-6">
                            <h3><a href="#" > Forget Password?</a></h3>
                        </div>
                    </div>


            </form>
                
                </div>
            </div>
            <div class="col-lg-6">
            <div class="login register">
                <form method="POST">
                <div class="loginhead">
                    <h2>Register Your Account</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="First Name" class="firstform" name="firstname">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Last Name" class="firstform" name="lastname" >
                    </div>
                </div>
                <input type="email" placeholder="Email" name="email" id="" class="form">
                <input type="text" placeholder="Password" name="password" id="" class="form">
                <input type="text" placeholder="Retry Password" name="repassword" id="" class="form">
                <div class="row loginfooter">
                    <div class="col-lg-8">
                        <p style="font-size: 10pt;">By Creating an Account, You agree to our.</p>
                    </div>
                    <div class="col-lg-4">
                        <h3><a href="#" >Term & Conditions</a></h3>
                    </div>
                </div>
                <button type="submit">Create Account</button>
            </div>


                </form>
                
            </div>
        </div>
    </div>
</section>

  <!-- Footer Naviagtor -->
  <?php include 'assets/footer.php'; ?>


</body>

</html>