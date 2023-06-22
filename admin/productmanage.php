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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Product Management</title>
</head>
<body>
    <div class="container">
        <h2>Lists of Products</h2>
        <a href="product_add_form.php" role="button" class="btn btn-primary">New Product</a>
        <a href="control_pannel.php" role="button" class="btn btn-danger" style="float:right;">Back</a>

        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Total Purchased</th>
                    <th>Created on Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php 
 include "../connection/connection.php";
 $sql="Select * from product_table";
 $result=mysqli_query($connection,$sql);
 while($row=mysqli_fetch_assoc($result)){
    echo"<tr>
    <td>$row[id]</td>
    <td>$row[images]</td>
    <td>$row[detail]</td>
    <td>$row[price]</td>
    <td>$row[total_purchased]</td>
    <td>$row[on_created]</td>
    <td>
        <a href='editproduct.php?id=$row[id]&images=$row[images]&detail=$row[detail]&price=$row[price]' class='btn btn-primary btn-sm' style='margin-bottom: 5%;'>Edit / Update</a>
        <a href='deleteproduct.php?id=$row[id]' class='btn btn-danger btn-sm' >Delete</a>
    </td>

</tr>
    ";
}

?>

                
            </tbody>
        </table>
    </div>
    
</body>
</html>