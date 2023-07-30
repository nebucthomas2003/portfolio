<?php
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"portfolio");
$query="UPDATE `user_login` SET `password`='$password' WHERE user_name='$username'";
$result=mysqli_query($connect,$query);
if($result)
{
    header('location:index.php');
}
?>