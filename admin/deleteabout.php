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
<?php
if(isset($_GET["id"])){

    $id= $_GET["id"];

    include "../connection/connection.php";

    $sql = "Delete from about_us_table where id =$id";
    $connection->query($sql);

}

header("location: productmanage.php");
exit;


?>