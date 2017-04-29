<?php
include "db.php";

unset($_SESSION['carebnb_session_login']);
unset($_SESSION['carebnb_session_user_id']);
unset($_SESSION['carebnb_session_user_name']);








session_destroy();


		

    header("Location:login.php?s_msg=Thank you for using our services. You have successfully signed out.");
	
?>