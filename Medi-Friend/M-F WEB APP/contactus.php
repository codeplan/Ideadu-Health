<?php
$con=mysqli_connect("localhost","root","12345","trial_DB");


if($_POST) {
$output = "";
$name=$_POST["name"];
$email=$_POST["email"];
$mesg=$_POST["mesg"];



$sql="INSERT INTO contactus (name,email,mesg)
         VALUES ('$name','$email','$mesg')";

$result=mysqli_query($con,$sql);


  
  if ($result)
  {


  $output .= "Thank you for your interest!<br> We will gaet back to you soon!";
  }

else
  {
   $output= "Sorry our Server is busy, please try after some time! ";  
  }

 }

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>MEDI-FRIEND</title>
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
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		
		
		<script type="text/javascript"> 
    
 function validateForm(){
 
  var fname = document.getElementById('name');
   var mesg = document.getElementById('mesg');

  var email = document.getElementById('email');

  
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
if (mesg==null || mesg==""){
    alert("Please Enter Your Message");
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
									<li  class="current_page_item"><a href="contactus.php">CONTACT US</a></li>
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
		    <legend ><b>Get In Touch With Us</b></legend>		
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
	        <label class="control-label">Email</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
					<input type="text" class="input-large" id="email" name="email" placeholder="Email" required="true">
				</div>
			</div>	
		</div>
		
		<div class="control-group ">
	        <label class="control-label">Your Message</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<textarea class="form-control" rows="3" name="mesg" id="mesg" required="true" placeholder="Your Message"></textarea>

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