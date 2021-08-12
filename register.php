
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="login1/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="login1/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Registration Form</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="register.php" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="name" placeholder="Name" required="" name="name"type="text" autofocus/>
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required="" name="email" type="email" autofocus/>
					</div>
					<!--<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="contact" placeholder="Contact" required="" name="contact"/>
					</div>-->
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="" name="password" type="password" value=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<button class="btn" type="submit" name="register">Register</button>
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="login1.php">Already Register?   Login Here </a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<!--<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>-->
			</div>
		</div>
		
		<!-- copyright -->
		<!--<div class="copyright">
			<p>© 2019 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>-->
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>
<?php  
  
include("Db_connection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
     
    $user_email=$_POST['email'];//same 
    $user_pass=$_POST['password'];//same 
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users1 WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users1 (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('login1.php','_self')</script>";  
    }  
} 
?>  