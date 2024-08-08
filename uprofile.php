<?php
//echo "Welcome ";
session_start();
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
	session_destroy();
	echo "<script>window.location.href='index.php?msgg=3';</script>";
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
        <a class="navbar-brand" href="uprofile.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
              <a class="nav-link" href="uabout.php">About Us<span class="sr-only">(current)</span></a>
            </li>

       <li class="nav-item">
        <a class="nav-link" href="ulogout.php">Logout</a>
      </li>
          </ul>
        </div>
      </nav>
</div>
</div>
    <!-- End Menu-->

<!-- Start Main-->
<h1 align="center">Welcome User Zone </h1>

<div class="row">
<div class="col-sm-6 btn btn-success">

<h1>Location-Based Services (LBS) and Privacy Preserving Techniques :</h1>

Location-Based Services (LBS) are applications that leverage the geographic location of a user's device to provide tailored services, information, and entertainment. These services are embedded in many everyday applications such as GPS navigation, ride-sharing apps, social media check-ins, location-based advertising, and emergency response systems. By utilizing real-time location data, LBS can enhance user experiences and provide contextually relevant information.

</div>
<div class="col-sm-6 btn btn-danger">

<h1>Importance of Privacy in LBS :</h1>

While LBS offer numerous benefits, they also raise significant privacy concerns. The collection, storage, and sharing of location data can potentially expose sensitive information about users, such as their home addresses, daily routines, and personal preferences. Unauthorized access or misuse of this data can lead to privacy breaches, identity theft, stalking, and other malicious activities. Therefore, it is crucial to implement privacy-preserving techniques to protect users' location data and maintain their trust in LBS.
</div>

</div>

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