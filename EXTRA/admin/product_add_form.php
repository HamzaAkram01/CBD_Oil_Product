<?php 
        include "../connection/connection.php";
        if(isset($_POST['product_imaegs'])){
            
            $images=$_POST['product_imaegs'];
            $detail=$_POST['product_details'];
            $price=$_POST['product_price'];
            $sql="INSERT INTO product_table(images,detail,price) values ('".$images."','".$detail."','".$price."')";
            if(mysqli_query($connection,$sql)){
                
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
    <title>Product Form</title>
            
</head>
<body>
    <br><br><br>
    <div class="container">
        <form method="POST">
            <legend>PRODUCT</legend>
            <div class="mb-3">
                <label class="form-label">Images</label>
                <input type="file" required class="form-control" id="exampleInputEmail1" name="product_imaegs">
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
            
        </form>

    </div>
    
</body>
</html>
