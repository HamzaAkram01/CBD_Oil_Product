<?php 
include "../connection/connection.php";
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
if(isset($_POST['title'])){
    $title=$_POST['title'];
    $long_description=$_POST['about_long_description'];
    $short_description=$_POST['about_short_description'];
    $image=$_POST['about_images'];

    $sql="INSERT INTO about_us_table(title,long_description,short_description,image) values ('".$title."','".$long_description."','".$short_description."','".$image."')";
    if(mysqli_query($connection,$sql)){
        header("location: productmanage.php");

    }
    else{
        echo "Error".$sql."<br>".mysqli_error($connection);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <title>Add New About</title>
            
</head>
<body>
    <br><br><br>
    <div class="container">
        <form method="POST">
        <legend>ABOUT US</legend>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputtitle" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Long Description</label>
            <input type="text" class="form-control"  name="about_long_description">
        </div>
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input type="text" class="form-control"  name="about_short_description">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control"  name="about_images">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="aboutmanage.php" role="button" class="btn btn-danger" style="float:right;">Back</a>

        </form>

    </div>
    
</body>
</html>
