<?php
session_start();
//print_r($_POST);
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("dbConnection.php");
$query="select * from ureg_tlb where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res))
{
	$_SESSION['user']=$email;
	header('location:uprofile.php');
}else{
	header('location:index.php?msgg=1');
	
}
?>