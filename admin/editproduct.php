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
        $images=$_GET["images"];
        $detail=$_GET["detail"];
        $price=$_GET["price"];
   
  
if(isset($_POST['submit'])){

   
    $images=$_POST['product_imaegs'];
    $detail=$_POST['product_details'];
    $price=$_POST['product_price'];

    $sql="UPDATE product_table set images = '$images' , detail = '$detail' , price = '$price' where id= '$id'";

   if(mysqli_query($connection,$sql)){  
        header("location: productmanage.php");
    }
    else{
        echo "Error".$sql."<br>".mysqli_error($connection);
        header("location: productmanage.php");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Product </title>
            
</head>
<body>
    <br><br><br>
    <div class="container">
        <form method="POST">
            <legend>PRODUCT Update</legend>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <div class="mb-3"> 
                <label class="form-label">Images</label>
                <input type="text" required class="form-control" id="exampleInputEmail1" name="product_imaegs" value="<?php echo $images;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" required class="form-control"  name="product_details" value="<?php echo $detail;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" required class="form-control"  name="product_price" value="<?php echo $price;?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update Details</button>
            <a href="productmanage.php" role="button" class="btn btn-danger" style="float:right;">Back</a>
            
        </form>

    </div>
    
</body>
</html>
<?php

