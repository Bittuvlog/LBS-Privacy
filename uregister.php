<?php
include("bootstrap.php");
?>

<?php


// if(isset($_POST['submit'])){
	
// 	$id=mysqli_query($con,"insert into form(name,email,iv) values('$name','$email','$iv')");
// 	if($id>0){
// 		echo "Thank you for providing information";
// 	}else{
// 		echo "Please try after sometime";
// 	}
// }
?>

<htm>
    <head>
</head>
<body> 
<div class="container-fluid">
    <!--- Start Header Section  ---->
    <div class="row" style="min-height:80px;background-color:grey">
           <!---Header section start---->
            <div class="col-sm-2">
            <img src="image/logo.jpg" height="80px" width="180px">
            </div>
            <div class="col-sm-10" style="">
            <h1 align="center" style="font-family:Imprint MT Shadow;color:white;"> Location Based Service and Its
 Privacy Preserving Techniques</h1>
            </div>
</div><br/>
            
            <!---Header section end---->
<!-- Start Main-->
<div class="row" style="background-color:white;">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  <div class="row shadow-lg p-3 mb-5 bg-white rounded">
    <form id="locationForm" action="uregcode.php" method="post" class="was-validated">
		<div class="col-sm-12">
      <h1 style="color:blue;text-align:center;">User Registration</h1><br/>
      
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Enter Your Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="name" name="name" onkeyup="validateName()" required/>
				  </div>
				</div>
    
				<div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Enter Your Contact No:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact" name="contactno" onkeyup="validateContact()" required/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-12" for="email">Enter Email Address:</label>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" name="emailaddress" onkeyup="validateEmail()" required/>
				  </div>
				</div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-12 col-form-label">Enter Password:</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword" name="password" onkeyup="validatePassword()"required/>
						<span id="sp"></span>
                    </div>
                </div>
                <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="button" onclick="getLocation()" class="btn btn-success">Get Current Position</button>
				  </div>
				</div>  
        <div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Latitude:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="latitude" name="latitude" readonly onkeyup="validateName()" required/>
				  </div>
				</div>
        <div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Longitude:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="longitude" name="longitude" readonly onkeyup="validateName()" required/>
				  </div>
				</div>
        

				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Register</button>
				  </div>
				</div>  

			</div>
		</div>
        </form>
	</div>

  </div>
  <div class="col-sm-3">
  <a href="index.php">Back here..</a>
  </div>
</div>

<script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        }
    </script>
    <!-- End Main-->
    <!-- End Slider-->
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

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
//End
//Password Validation Code Start
function validatePassword()
{
//alert("Hiii");
var pass=document.getElementById("inputPassword").value;
if(pass.length<=3)
{
document.getElementById("sp").innerHTML="Weak Password";
document.getElementById("sp").style.color="red";
}
else if(pass.length>3 && pass.length<=6)
{
document.getElementById("sp").innerHTML="Strong Password";
document.getElementById("sp").style.color="yellow";
}
else
{
document.getElementById("sp").innerHTML="Very Strong Password";
document.getElementById("sp").style.color="green";
}
}
//Password Validation Code End

//Name Validation Code Start
function validateName()
{
//alert("hiii");
var pn=/^[A-Za-z ]{2,40}$/;
var nme=document.getElementById("name").value;
if(!pn.test(nme))
{
document.getElementById("name").style.color="red";
}
else
{
document.getElementById("name").style.color="green";
}
}
//Name Validation Code End

//Contact Number Validations Code Start
function validateContact()
{
//alert("hii");
var mn=/^[0-9]{1,10}$/;
var number=document.getElementById("contact").value;
if(!mn.test(number))
{
document.getElementById("contact").style.color="red";
}
else
{
document.getElementById("contact").style.color="green";
}

}
//Contact Number Validations Code End

//Email Validation Start
function validateEmail()
{
//alert("hiii");
var pe=/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,7}$/;
var eml=document.getElementById("email").value;
if(!pe.test(eml))
{
document.getElementById("email").style.color="red";
}
else
{
document.getElementById("email").style.color="green";
}

}
//Email Validation End
</script>
</body>
</html>