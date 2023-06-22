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

    <title>About Management</title>
</head>
<body>
    <div class="container">
        <h2>Lists of CMS</h2>
        <a href="about_us_form.php" role="button" class="btn btn-primary">New in About</a>
        <a href="control_pannel.php" role="button" class="btn btn-danger" style="float:right;">Back</a>

        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Images</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Created on Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php 
 include "../connection/connection.php";
 $sql="Select * from about_us_table";
 $result=mysqli_query($connection,$sql);
 while($row=mysqli_fetch_assoc($result)){
    echo"<tr>
    <td>$row[id]</td>
    <td>$row[title]</td>
    <td>$row[image]</td>
    <td>$row[short_description]</td>
    <td>$row[long_description]</td>
    <td>$row[on_created]</td>
    <td>
        <a href='editabout.php?id=$row[id]&title=$row[title]&image=$row[image]&short_description=$row[short_description]&long_description=$row[long_description]' class='btn btn-primary btn-sm' style='margin-bottom: 5%;'>Edit / Update</a>
        <a href='deleteabout.php?id=$row[id]' class='btn btn-danger btn-sm' >Delete</a>
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