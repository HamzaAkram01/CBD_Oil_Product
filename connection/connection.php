<?php
$servername="localhost:3307";
$username="root";
$password="";
$db_name="cbdoildb";

$connection=mysqli_connect($servername,$username,$password,$db_name);
if(!$connection)
{
	die("Connection failed:".mysqli_connect_error());
}
else{

}
?>