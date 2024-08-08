<?php
$name=$_POST['name'];
//echo $name;
$contactno=$_POST['contactno'];
//echo $contactno;
$emailaddress=$_POST['emailaddress'];
//echo $emailaddress;
$password=$_POST['password'];
// //echo $password;

// Function to encrypt date and time
function encryptDateTime($dateTime) {
    // You can use any encryption algorithm here
    $encryptedDateTime = base64_encode($dateTime);
    return $encryptedDateTime;
}

// Set the default timezone to India
date_default_timezone_set('Asia/Kolkata');
// Get the current date and time in India
$currentDateTime = date("Y-m-d H:i:s");


// Encrypt current date and time
$encryptedDateTime = encryptDateTime($currentDateTime);


include('dbConnection.php');

function str_openssl_enc($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}

$iv=openssl_random_pseudo_bytes(16);

$latitude=mysqli_real_escape_string($con,$_POST['latitude']);
//echo $latitude;
$longitude=mysqli_real_escape_string($con,$_POST['longitude']);
//echo $longitude;

//Encrypt

$latitude=str_openssl_enc($latitude,$iv);
//echo $latitude;
$longitude=str_openssl_enc($longitude,$iv);
//echo $longitude;
$iv=bin2hex($iv);


 $query="insert into ureg_tlb(name,contactno,email,password,latitude,longitude,date,iv) 
 values('$name','$contactno','$emailaddress','$password','$latitude','$longitude','$encryptedDateTime','$iv')";
$res=mysqli_query($con,$query);
if($res)
{
    header('location:index.php?msg=1');
}
else{
    header('location:uregister.php?msg=2');
}
?>