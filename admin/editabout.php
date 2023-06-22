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
error_reporting(0);
        $id=$_GET["id"];
        $image=$_GET["image"];
        $title=$_GET["title"];
        $long_description=$_GET["long_description"];
        $short_description=$_GET["short_description"];
   
  
if(isset($_POST['submit'])){

   
    $title=$_POST['title'];
    $long_description=$_POST['about_long_description'];
    $short_description=$_POST['about_short_description'];
    $image=$_POST['about_images'];

    $sql="UPDATE about_us_table set image = '$image' , long_description = '$long_description' , short_description = '$short_description' ,title = '$title' where id= '$id'";
   if(mysqli_query($connection,$sql)){  
        header("location: aboutmanage.php");
    }
    else{
        echo "Error".$sql."<br>".mysqli_error($connection);
        header("location: aboutmanage.php");
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
    <title>Edit About</title>
            
</head>
<body>
    <br><br><br>
    <div class="container">
        <form method="POST">
        <legend>Edit About us</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputtitle" name="title" value="<?php echo $title;?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Long Description</label>
            <input type="text" class="form-control"  name="about_long_description" value="<?php echo $long_description;?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input type="text" class="form-control"  name="about_short_description" value="<?php echo $short_description;?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" class="form-control"  name="about_images" value="<?php echo $image;?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update Details</button>
        <a href="aboutmanage.php" role="button" class="btn btn-danger" style="float:right;">Back</a>

        </form>

    </div>
    
</body>
</html>
