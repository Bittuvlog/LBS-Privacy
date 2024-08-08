
<?php
error_reporting(0);
if(isset($_REQUEST['msg']))
{
	$id=$_REQUEST['msg'];
	if($id==1)
	{
		echo "<script> alert('Registration Successfully'); </script>";
	}
	else
	{
		echo "<script> alert('Registration Failed'); </script>";
	}
}

error_reporting(0);
$msg=$_REQUEST['msgg'];
//echo $msg;
if($msg==1)
{
	echo "<script>alert('Invalied email or password');</script>";
}
if($msg==2)
{
	echo "<script>alert('Logout successfully');</script>";
}
if($msg==3)
{
	echo "<script>alert('First Login then see your profile');</script>";
}


error_reporting(0);
$ms=$_REQUEST['sms'];
//echo $msg;
if($ms==1)
{
	echo "<script>alert('Invalied email or password');</script>";
}
if($ms==2)
{
	echo "<script>alert('Logout successfully');</script>";
}
if($ms==3)
{
	echo "<script>alert('First Login then see your profile');</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Location Based Service</title>
        <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     
</head>
<body>
</body>
</html>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<!--- Start container-fluid  ---->
<div class="container-fluid">
<!--- Start Header Section  ---->
    <div class="row" style="min-height:80px;background-color:grey">
           <!---Header section start---->
            <div class="col-sm-2">
            <img src="image/logo.jpg"/ height="80px" width="180px">
            </div>
            <div class="col-sm-10" style="">
            <br/>
            <h1 align="center" style="font-family:Imprint MT Shadow;color:white;"> Location Based Service and Its
 Privacy Preserving Techniques</h1>
            </div>
            
            <!---Header section end---->
    </div><br/>
<!--- End Header Section  ---->
<!--- Start Main Section  ---->
    <div class="row">
      <!--- Login form start--->
            <div class="col-sm-4">
<!-- Material form login -->
<div class="card shadow-lg p-1 mb-3 bg-white rounded">

<h5 class="card-header info-color white-text text-center py-4">
  <strong style="color:blue;">User Login </strong>
</h5>

<!--Card content-->
<div class="card-body px-sm-6 pt-4">

  <!-- Form -->
  <form action="ulogcode.php" method="post" class="text-center" style="color: #757575;">
    <!-- Email -->
    <div class="md-form">
      <input type="email" name="email" id="materialLoginFormEmail" class="form-control" required>
      <label for="materialLoginFormEmail">E-mail</label>
    </div>

    <!-- Password -->
    <div class="md-form">
      <input type="password" name="password" id="materialLoginFormPassword" class="form-control" required>
      <label for="materialLoginFormPassword">Password</label>
    </div>

    
    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
      <a href="uregister.php">Register</a>
    </p>
      <!-- Social login -->
    <a type="button" class="btn-floating btn-fb btn-sm" href="https://www.facebook.com">
      <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-tw btn-sm" href="https://twitter.com">
      <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-li btn-sm" href="https://www.linkedin.com">
      <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-git btn-sm" href="https://github.com">
      <i class="fa fa-github fa-2x" aria-hidden="true"></i>
    </a>
  </form>
  <!-- Form -->
</div>

</div>
<!-- Material form login -->
            <!--- Login form End--->


            </div>
            <!--- Login form start--->
            <div class="col-sm-4">  </div>

            <!--- Login form start--->
            <div class="col-sm-4">
              <!-- Material form login -->
<div class="card shadow-lg p-1 mb-3 bg-white rounded">

<h5 class="card-header info-color white-text text-center py-4">
  <strong style="color:black;">Service Provider Login </strong>
</h5>

<!--Card content-->
<div class="card-body px-sm-6 pt-4">

  <!-- Form -->
  <form action="slogcode.php" method="post" class="text-center" style="color: #757575;">
    <!-- Email -->
    <div class="md-form">
      <input type="email" name="email" id="materialLoginFormEmail" class="form-control" required>
      <label for="materialLoginFormEmail">E-mail</label>
    </div>

    <!-- Password -->
    <div class="md-form">
      <input type="password" name="password" id="materialLoginFormPassword" class="form-control" required>
      <label for="materialLoginFormPassword">Password</label>
    </div>

    
    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      
  </form>
  <!-- Form -->
</div>

</div>
<!-- Material form login -->
            <!--- Login form End--->

            </div>
    </div>
<!--- End main Section  ---->
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


<!--- End container-fluid  ---->
</div>
</body>
</html>