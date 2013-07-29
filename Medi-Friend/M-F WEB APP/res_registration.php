<?php
$con=mysqli_connect("localhost","root","12345","trial_DB");


if($_POST) {
$output = "";
$name=$_POST["name"];
$bg=$_POST["bg"];
$email=$_POST["email"];
$contact=$_POST["mn"];
$pincode=$_POST["zip"];


$sql="INSERT INTO donors (name,bg,email,contact,pincode)
         VALUES ('$name','$bg','$email','$contact','$pincode')";

$result=mysqli_query($con,$sql);


  
  if ($result)
  {


	$to = $email;
	$subject = "Test mail";
	$message = "Hello! This is a simple email message.";
	$from = "avdesh.kr@iic.ac.in";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);



  $output .= "Thank you!!! You have been added to our Data Base. We will contact you in need !";
  }

else
  {
   $output= "SORRY! Something went wrong!";  
  }

 }

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Medi-Friend</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		</noscript>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim for IE backwards compatibility -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--Form Validation-->
    <script type="text/javascript"> 
    
 function validateForm(){
 
  var fname = document.getElementById('name');
  var pin = document.getElementById('zip');
  var mobile = document.getElementById('mn');
  var email = document.getElementById('email');
  var x=document.forms["register"]["bg"].value;
    
//function isAlphabet(elem, helperMsg){
  var alphaExp = /^[a-zA-Z][a-zA-Z ]+$/;
  if(!fname.value.match(alphaExp)){
   // return true;
 // }
  //else{
    alert("Please enter only letters for Name");
    fname.focus();
    return false;
  }
//}         


    
      var uInput = pin.value;
  if(uInput.length < 6 || uInput.length > 6){
  //  return true;
 // }else{
    alert("Please enter a  pincode of 6 digits");
    pin.focus();
    return false;
  }
  
  
          
//function lengthRestriction(elem, min, max, helperMsg){
  var uInput = mobile.value;
  if(uInput.length < 10 || uInput.length > 10){
  //  return true;
 // }else{
    alert("Please enter a mobile number of 10 digits and without country code");
    mobile.focus();
    return false;
  }
//}
//function isNumeric(elem, helperMsg){
  var numericExpression = /^[0-9]+$/;
  if(!mobile.value.match(numericExpression)){
 //   return true;
 /// }else{
    alert("Please enter a valid Mobile Number");
    mobile.focus();
    return false;
  }
//}
        
//function lengthRestriction(elem, min, max, helperMsg){
  var uInput = pin.value;
  if(uInput.length < 6 || uInput.length > 6){
  //  return true;
 // }else{
    alert("Please enter a  pincode of 6 digits");
    pin.focus();
    return false;
  }
//}
  
  var numericExpression = /^[0-9]+$/;
  if(!pin.value.match(numericExpression)){
     alert("Please enter a valid PIN code");
    pin.focus();
    return false;
    }       




//function emailValidator(elem, helperMsg){
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  if(!email.value.match(emailExp)){
   // return true;
 // }else{
    alert("Please Enter a valid email Address");
    email.focus();
    return false;
  }


//function bloodgrpalert(elem,helperMsg)
//{
if (x==null || x==""){
    alert("Please Enter Your Blood Group");
 // }
 // else{
    return false;
    }
//}   
    
}

</script> 
    
</head>

<body>
	<div id="header-wrapper">
				<header class="container-fluid" id="site-header">
					<div class="row">
						<div class="12u">
							<div id="logo">
				<h1>MEDI-FRIEND</h1>
							</div>
							<nav id="nav">
								<ul>
									
									<li><a href="index.html">BLOOD BANK</a></li>
									<li><a href="healthtips.html">HEALTH TIPS</a></li>
									<li><a href="contactus.php">CONTACT US</a></li>
									<li><a href="about.html">ABOUT</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>
			<br>
<div class="row-fluid">
 <div class="container">
   <div class="well"  >    
<?php if($_POST): ?>
   <a href="index.html" class="mycenterbutton">GO TO HOME</a> <br> <br>
   	<?php print $output; ?>
   
   	<?php else: ?>   
   
      <form id="register" name="register" onsubmit="return validateForm()" class="form-horizontal" method="post" action="">
		    <legend><b>Donor Registration</b></legend>		
		     <div class="control-group">
	     <label class="control-label">Enter Your Name</label>
			 <div class="controls">
			    <div class="input-prepend">
				    <span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-medium" id="name" name="name" placeholder="Your Name" required="true">
				</div>
			</div>
		</div>
		<div class="control-group">
	        <label class="control-label">Enter Your Blood Group</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<select id="bg" name="bg" class="span7">
       <option>   </option>
       <option>A+</option>
       <option>A-</option>
       <option>B+</option>
       <option>B-</option>
       <option>AB+</option>
       <option>AB-</option>
       <option>O+</option>
       <option>O-</option>
     </select>
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">Enter Your 10 Digit Mobile No.</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-medium" id="mn" name="mn" placeholder="Mobile No"  required="true">
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">Postal/Zip Code</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-small" id="zip" name="zip" placeholder="Postal/Zip code" required="true">
				</div>
			</div>
		</div>
		<div class="control-group">
	        <label class="control-label">Email</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
					<input type="text" class="input-xlarge" id="email" name="email" placeholder="Email" required="true">
				</div>
			</div>	
		</div>
		<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
	       <input type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" value="Submit"/>
	       
	      </div>
	
	</div>
	
	  </form>
<?php endif; ?>
   </div>
</div>  
    </div>
         
</body>
</html>