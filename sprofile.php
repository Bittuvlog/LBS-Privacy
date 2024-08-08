
<?php
//echo "Welcome ";
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
	session_destroy();
	echo "<script>window.location.href='index.php?sms=3';</script>";
}



include("bootstrap.php");
?>

<html>
  <head>
    <style>
#marquee1{
  //overflow-x: marquee-line;
	//marquee-style: scroll;
	marquee-direction:up;
}
      
    </style>
</head>
<body>
<div class="container">
    <!-- Start Menu-->
    <div class="row" style="margin-top:10px;min-height:50px;">
        <div class="col-sm-12">
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light container mx-auto" id="p">
        <a class="navbar-brand" href="sprofile.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
              <a class="nav-link" href="decrypted.php">Decrypted<span class="sr-only">(current)</span></a>
            </li>
     
       <li class="nav-item">
        <a class="nav-link" href="slogout.php">Logout</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->

<!-- Start Main-->

<h1 align="center">Welcome Service Provider</h1>
<br/>
<div class="row"><!---- first row start----->
            <div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
      <th>S.No.</th>
      <th>Name</th>
      <th>Contact no</th>
      <th>Email</th>
      <th>Latitude</th>
      <th>Longitude</th>
      <th>Date</th>
      <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    
include('dbConnection.php');
function str_openssl_dec($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
$query="select * from ureg_tlb";

    $res=mysqli_query($con,$query);

  $a=1;
  while($row=mysqli_fetch_assoc($res))
  {
     
  ?>

<tr>
       <td><?php echo $a;?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['contactno'];?></td>
       <td><?php echo $row['email'];?></td>
  
       <?php $iv=hex2bin($row['iv']);  ?>

       <td><?php echo $row['latitude']; ?></td>
       <td><?php echo $row['longitude']; ?></td>
       <td><?php echo $row['date'];?></td>
       <td><a href="udelete.php?id=<?php echo $row['uid'];?>" class="btn btn-danger">Delete</a></td>
  </tr>
  <?php
  $a++;
  }
  ?>
    </tbody>
  </table>
</div>
            </div><!---- first row end----->
    <!-- End Main-->

<!--- Start Footer Section  ---->

<footer class="bg-white text-center text-sm-start">
  <!-- Copyright -->
  <div class="text-center p-1">
  <font face="Elephant"> © 2024 Copyright:
    <a class="text-dark">Developed By SBPN Group</a></font>
  </div>
  <!-- Copyright -->
</footer>

<!--- End Footer Section  ---->
</body>
  </html>