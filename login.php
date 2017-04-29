<?php
	
	include_once 'db.php';
	
	$error = false;

	$msg='';	
	$usernameError='';
	$passError='';	
	

	if(isset($_SESSION['carebnb_session_login'])) {
		
		header("Location: index.php?i_msg=Already Logged in...");
		
		}

	
	
	
	if( isset($_POST['btn_login']) ) {	
		
		
		
		
		
		
		$username = trim($_POST['username']);
		
		
		$password = trim($_POST['password']);
		
		
		
		if(empty($username)){
			$error = true;
			$usernameError = "Please enter your email.";
		} 
		if(empty($password)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			// $password = hash('sha256', $pass); // password hashing using SHA256
		
			$res=mysql_query("SELECT * FROM $table_admin WHERE email='$username' and password ='$password'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1  ) {
				$_SESSION['carebnb_session_login'] = 1;
				
				$_SESSION['carebnb_session_user_id'] = $row['user_id'];
				$_SESSION['carebnb_session_user_name'] = $row['username'];
				
				
					header("Location: list.php?s_msg=loged in...");
				
				
			} else {
				$errMSG = "Oops! Something went wrong! Please enter your credentials again.";
			}
				
		}
		
	}
	
	include "header.php";
?>

<!-- <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>  -->
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
            <h3><br>Great care starts here .Choose your option.<br><br></h3>
            
            <div class="sub-heading_login">
    
    		 
              
              
     
		<span><h3>LOGIN<br></h3></span>		
		 <div class="agileits_modal_body">
			<form action="#" method="post">
            
            <?php
						 
						 if($msg != '') echo $msg;
						 
						 
							if ( isset($errMSG) ) {
								
								?>
								<div class="form-group">
								<div class="alert alert-danger">
								<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
								</div>
								</div>
								<?php
							}
							?>
                            
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="User Name" required>
                    <span class="text-danger"><?php echo $usernameError; ?></span>
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="password" placeholder="Password" required>
                    <span class="text-danger"><?php echo $passError; ?></span>
				</div>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" name="btn_login" value="login" >
			</form>
			<h5>Don't have an account? <a href="register.php"   class="">Sign Up</a></h5>
		</div>
	
	
             
                 
  </div>
            
           
              
              
           		
            
           
        </div>
        
        
      </div>  
	</div>
</div>
	
<?php include "footer.php"; ?>