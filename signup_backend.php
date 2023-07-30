<?php
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"portfolio");
$query="INSERT INTO `user_login`(`user_name`,`password`) VALUES('$username','$password')";
$result=mysqli_query($connect,$query);
if($result)
{
    header('location:index.php');
}
?>