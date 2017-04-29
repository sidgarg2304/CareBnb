<?php 
include_once 'db.php';

if(isset($_SESSION['carebnb_session_login'])) {
	header("Location: index.php");
}
$error = false;
if ( isset($_POST['btn_signup']) ) {
		
		
		
		// clean user inputs to prevent sql injections
		$username = trim($_POST['username']);
		
		
		$email = trim($_POST['email']);
		
		
		$password = trim($_POST['password']);
		
		
		$lastname = trim($_POST['lastname']);
		$phone = trim($_POST['phone']);
		
		
		
	/*	// basic name validation
		if (empty($username)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		
		// password validation
		if (empty($cpass)){
			$error = true;
			$passError = "Please enter password.";
		} else if($cpass != $pass ) {
			$error = true;
			$cpassError = "Password Mismatching";
		} 
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		$password = hash('sha256',$cpass);
		
		*/
		// if there's no error, continue to signup
		
		if( !$error ) {
			
			$query = "INSERT INTO $table_admin(username,email,password,lastname,phone) VALUES('$username','$email','$password','$lastname','$phone')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				header("Location: login.php?s_msg=Register successfully...!");
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}



include 'header.php';

?>

<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>
<!-- banner -->



<!----home---->
<div class="container-fluid care_home1" id="care_home1">
	<div class="row">
      <div class="col-md-6">
    	<div class="care_home_sub" style="text-align:center;">
    		<img src="img/super.jpg" />
            <h3>Great care starts here .Choose your option.</h3>
            
            <div class="sub-heading_login">
              <h2>I need a <span>care giver</span> </h2>
              
              
   
	
		<h3>Sign Up</h3>		
		<div class="agileits_modal_body">
			<form action="#" method="post">
				<div class="row">
                <div class="col-md-6">
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="First Name" required>				</div>
                </div>
                
                <div class="col-md-6">
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="lastname" placeholder="Last Name" required>
				</div>
				</div>
                </div>
               
				
				<div class="agileits_w3layouts_user">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" placeholder="Email" required>
				</div>
                <br/>
                 <div class="agileits_w3layouts_user">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" name="phone" placeholder="Contact Number" required>
				</div>
                
				<div class="agileits_w3layouts_user agileits_w3layouts_user_agileits">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="password" placeholder="Password" required>
				</div>
				
				
				<input type="submit" name="btn_signup" value="Register">
			</form>
			<h5>Already a member <a href="login.php" >Sign In</a></h5>
		
	</div>
             
                 
  </div>
            
           
              
              
           		
        
        </div>
      </div>  
	</div>
</div>
	
<?php include "footer.php"; ?>