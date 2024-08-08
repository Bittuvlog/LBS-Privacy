<?php
$id=$_REQUEST['id'];
echo $id;
include("dbConnection.php");
$query="delete from ureg_tlb  where uid='$id'";
mysqli_query($con,$query);
header("location:sprofile.php");


?>