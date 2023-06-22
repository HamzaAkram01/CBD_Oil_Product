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

        if(isset($_POST['product_imaegs'])){
           
           
            $images=$_POST['product_imaegs'];
            $detail=$_POST['product_details'];
            $price=$_POST['product_price'];

            
            $sql="INSERT INTO product_table(images,detail,price) values ('".$images."','".$detail."','".$price."')";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add New Product </title>
            
</head>
<body>
    <br><br><br>
    <div class="container">
        <form method="POST">
            <legend>PRODUCT</legend>
           
            <div class="mb-3"> 
                <label class="form-label">Images</label>
                <input type="text" required class="form-control" id="exampleInputEmail1" name="product_imaegs">
            </div>
            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" required class="form-control"  name="product_details">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" required class="form-control"  name="product_price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="productmanage.php" role="button" class="btn btn-danger" style="float:right;">Back</a>
            
        </form>

    </div>
    
</body>
</html>
