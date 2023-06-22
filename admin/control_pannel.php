<?php
session_start();
if(!$_SESSION['email']){

  header('location:admin_login.php');
}
else {
  $now = time();

  if($now > $_SESSION['expire']){
  
    session_destroy();
    header('location:admin_login.php');
  }
  else{
    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/w3.css">
  <title>Admin Management</title>

</head>

<body class="w3-light-grey">

<!-- Top container -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4"> 
    <span class="w3-bar-item w3-right"><a href="logout.php">Log Out</a></span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="../images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Welcome, <strong>Bois</strong></span><br>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
      <a href="productmanage.php" class="w3-bar-item w3-button w3-padding">
        <i class="fa fa-diamond fa-fw"></i>&nbsp; Product Management
      </a>

      <a href="aboutmanage.php" class="w3-bar-item w3-button w3-padding ">
        <i class="fa fa-users fa-fw"></i>&nbsp; About Management
      </a>
      <a href="product_add_form.php" class="w3-bar-item w3-button w3-padding ">
        <i class="fa fa-users fa-fw"></i>&nbsp; Add New Product
      </a>
      <a href="about_us_form.php" class="w3-bar-item w3-button w3-padding ">
        <i class="fa fa-users fa-fw"></i>&nbsp; Add New About 
      </a> 
    

    </div>
  </nav>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;"></div>

</body>
</html>

<!-- 
echo "<p align='center' >Please Login Again";
  echo "<a href='admin_login.php'>Click here to Login.</a></p>"; -->