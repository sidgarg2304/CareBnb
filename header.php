<?php

$msg='';
if(isset($_REQUEST['s_msg'])){
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong></strong> '.$_REQUEST['s_msg'].'.</div>';
		}
		
		if(isset($_REQUEST['e_msg'])){
		$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong></strong> '.$_REQUEST['e_msg'].'.</div>';
		}
		if(isset($_REQUEST['i_msg'])){
		$msg= '<div class="alert alert-info">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong></strong> '.$_REQUEST['i_msg'].'.</div>';
		}
		

	


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CARE BNB</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nursery SCHOOL " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<link rel="stylesheet" href="css/jquery.gallery.css">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" />
</head>
	
<body>
<script src="js/jquery.vide.min.js"></script>
<!-- header -->
	
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<a href="index.php"><img src="img/logo.png"></a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--miranda">
						<ul class="nav navbar-nav menu__list">
							
							<li class="menu__item1 "><a href="howitwork.php" class="menu__link">How it works</a></li>
							<li class="menu__item1 "><a href="aboutus.php" class="menu__link">About Us</a></li>
                            <li class="menu__item1 "><a href="profile_details.php" class="menu__link">Profile</a></li>
                            <li class="menu__item1 "><a href="list.php" class="menu__link">List</a></li>
                            
                            
							<li class="menu__item12 pull-right">
                             <ul class="menu__list">
                            	<?php if (isset($_SESSION['carebnb_session_login'])) { ?>
                               
                                   <li class="menu__item1 "><a href="logout.php" class="menu__link"><span style="font-size: 140% !important; float:right;">Logout</a></li>
                                    
                                    <?php } else { ?>
                                    
                                    <li class="menu__item1 "><a href="login.php" class="menu__link"><span style="font-size: 140% !important;">Login</a></li>
                                   
                                    <?php } ?>
                            </ul>
                            
                            </li>
							<!--<li class="menu__item"><a href="#mail" class="scroll menu__link">Mail Us</a></li> -->
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //header -->

