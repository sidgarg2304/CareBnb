<?php 
include_once 'db.php';

if(!isset($_SESSION['carebnb_session_login'])) {
	header("Location: login.php?e_msg=Please Login or Sign Up to access our services");
}






include 'header.php';

?>


<!-- banner -->
<!----home---->
<div class="container list_carebnb" style="margin-top:20px;">
<div style="max-width:100%;overflow:auto;">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Profile Pic</th>
       
        <th>First Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 <?php
 
 $sql_profile="select * from $table_admin  ";
$profile_details = mysql_query("$sql_profile");
$select_query_count=mysql_num_rows($profile_details);

 $i='1';
	while($select_query_row = mysql_fetch_array($profile_details)){	
	
		$user_id=$select_query_row['user_id'];
		$username=$select_query_row['username'];
		$lastname=$select_query_row['lastname'];
		$email=$select_query_row['email'];
		$phone=$select_query_row['phone'];
		$project_title=$select_query_row['project_title'];
		$project_description=$select_query_row['project_description'];
		$avg_hour_age_1	=$select_query_row['avg_hour_age_1'];
		$avg_hour_age_2=$select_query_row['avg_hour_age_2'];
		$no_child_watching=$select_query_row['no_child_watching'];
		$care_for_sick_child=$select_query_row['care_for_sick_child'];
		$exp_twins_group=$select_query_row['exp_twins_group'];
		
		$age_group_most_exp_0_6m=$select_query_row['age_group_most_exp_0_6m'];
		$age_group_most_exp_6m_4y=$select_query_row['age_group_most_exp_6m_4y'];
		$age_group_most_exp_5y_7y=$select_query_row['age_group_most_exp_5y_7y'];
		$age_group_most_exp_7y_above=$select_query_row['age_group_most_exp_7y_above'];
		
		$education_level=$select_query_row['education_level'];
		$yr_of_graduction=$select_query_row['yr_of_graduction'];
		$languages_spoken=$select_query_row['languages_spoken'];
		
		$profile_img=$select_query_row['profile_img'];
		
	?>	   
      <tr>
       <td class="center"><?php echo $i; ?></td>
      
      <td>
	  
	  <?php if($profile_img == ''){$img= 'noimage.PNG';}else{$img= $profile_img  ;} ?>
             
                	<img src="assets/uploads/<?php echo $img; ?>" class="img-responsive" width="100"> 
       </td>

      <td><?php echo $username?></td>
     
     
    
      <td><?php echo $phone ?></td>
      <td><?php echo $email ?></td>
            <td> <a href="my_account.php?user_id=<?php echo $user_id;?>">
       <button class="btn  btn-success" type="button" style="background-color: rgb(19, 207, 109);">Read More</button></a></td>
      </tr>
   
 
    <?php
			  $i++;
			  }
		  
		  ?> 
     </tbody>
  </table>
 </div>
 
 
 
</div>




<?php include "footer.php"; ?>

		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
				
<style>
#plan h2 {
    color: #2bafb6;
    font-weight: bold;
    margin: 10px 0;
}

.profile-user-info {
	margin: 0 12px
}
.profile-info-row {
	position: relative
}
.profile-info-name {
	position: absolute;
	width: 350px;
	text-align: right;
	padding: 6px 10px 6px 0;
	left: 0;
	top: 0;
	bottom: 0;
	font-weight: normal;
	color: #667e99;
	background-color: transparent;
	border-top: 1px dotted #d5e4f1
}
.profile-info-value {
	padding: 6px 4px 6px 6px;
	margin-left:350px;
	border-top: 1px dotted #d5e4f1
}
.profile-info-value>span+span:before {
	display: inline;
	content: ",";
	margin-left: 1px;
	margin-right: 3px;
	color: #666;
	border-bottom: 1px solid #FFF
}
.profile-info-value>span+span.editable-container:before {
	display: none
}
.profile-info-row:first-child .profile-info-name {
	border-top: 0
}
.profile-info-row:first-child .profile-info-value {
	border-top: 0
}
.profile-user-info-striped {
	border: 1px solid #dcebf7
}
.profile-user-info-striped .profile-info-name {
	color: #336199;
	background-color: #edf3f4;
	border-top: 1px solid #f7fbff
}
.profile-user-info-striped .profile-info-value {
	border-top: 1px dotted #dcebf7;
	padding-left: 12px;
	min-height:19px;
}
.profile-picture {
	border: 1px solid #CCC;
	background-color: #FFF;
	padding: 4px;
	display: inline-block;
	max-width: 100%;
	-moz-box-sizing: border-box;
	box-shadow: 1px 1px 1px rgba(0,0,0,0.15)
}
.profile-activity {
	padding: 10px 4px;
	border-bottom: 1px dotted #d0d8e0;
	position: relative;
	border-left: 1px dotted #FFF;
	border-right: 1px dotted #FFF
}
.profile-activity:first-child {
	border-top: 1px dotted transparent
}
.profile-activity:first-child:hover {
	border-top-color: #d0d8e0
}
.profile-activity:hover {
	background-color: #f4f9fd;
	border-left: 1px dotted #d0d8e0;
	border-right: 1px dotted #d0d8e0
}
.profile-activity img {
	border: 2px solid #c9d6e5;
	border-radius: 100%;
	max-width: 36px;
	margin-right: 10px;
	margin-left: 0;
	box-shadow: none
}
.profile-activity .thumbicon {
	background-color: #74abd7;
	display: inline-block;
	width: 40px;
	height: 40px;
	border-radius: 100%;
	color: #FFF;
	font-size: 18px;
	text-align: center;
	line-height: 40px;
	margin-right: 10px;
	margin-left: 0;
	text-shadow: none!important
}
.profile-activity .time {
	display: block;
	margin-top: 4px;
	color: #777
}
.profile-activity a.user {
	font-weight: bold;
	color: #9585bf
}
.profile-activity .tools {
	position: absolute;
	right: 12px;
	bottom: 8px;
	display: none
}
.profile-activity:hover .tools {
	display: block
}
.user-profile .ace-thumbnails li {
	border: 1px solid #CCC;
	padding: 3px;
	margin: 6px
}
.user-profile .ace-thumbnails li .tools {
	left: 3px;
	right: 3px
}
.user-profile .ace-thumbnails li:hover .tools {
	bottom: 3px
}
.user-profile .user-title-label:hover {
	text-decoration: none
}
.user-profile .user-title-label+.dropdown-menu {
	margin-left: -12px
}
.profile-contact-links {
	padding: 4px 2px 5px;
	border: 1px solid #e0e2e5;
	background-color: #f8fafc
}
.profile-contact-info .btn-link:hover>[class*="icon-"], .profile-contact-info .btn-link:focus>[class*="icon-"] {
text-decoration:none
}
.profile-social-links>a {
	text-decoration: none;
	margin: 0 1px
}
.profile-social-links>a:hover>[class*="icon-"] {
text-decoration:none
}
.profile-skills .progress {
	height: 24px;
	margin-bottom: 2px;
	background-color: transparent
}
.profile-skills .progress .bar {
	line-height: 24px;
	font-size: 13px;
	font-weight: bold;
	padding: 0 8px
}
.profile-users .user {
	display: block;
	position: static;
	text-align: center;
	width: auto
}
.profile-users .user img {
	padding: 2px;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
	border: 1px solid #AAA;
	max-width: none;
	width: 64px;
	-webkit-transition: all .1s;
	-moz-transition: all .1s;
	-o-transition: all .1s;
	transition: all .1s
}
.profile-users .user img:hover {
	-webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.33);
	-moz-box-shadow: 0 0 1px 1px rgba(0,0,0,0.33);
	box-shadow: 0 0 1px 1px rgba(0,0,0,0.33)
}
.profile-users .memberdiv {
	background-color: #FFF;
	width: 100px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 0;
	text-align: center;
	margin: 0 8px 24px
}
.profile-users .memberdiv .name a:hover [class*="icon-"] {
	text-decoration: none
}
.profile-users .memberdiv .body {
	display: inline-block;
	margin: 8px 0 0 0
}
.profile-users .memberdiv .popover {
	visibility: hidden;
	min-width: 150px;
	margin-left: 0;
	margin-right: 0;
	top: -5%;
	left: auto;
	right: auto;
	z-index: -1;
	opacity: 0;
	display: none;
	-webkit-transition: visibility 0s linear .2s, z-index 0s linear .2s, opacity .2s linear 0s;
	-moz-transition: visibility 0s linear .2s, z-index 0s linear .2s, opacity .2s linear 0s;
	-o-transition: visibility 0s linear .2s, z-index 0s linear .2s, opacity .2s linear 0s;
	transition: visibility 0s linear .2s, z-index 0s linear .2s, opacity .2s linear 0s
}
.profile-users .memberdiv .popover.right {
	left: 100%;
	right: auto;
	display: block
}
.profile-users .memberdiv .popover.left {
	left: auto;
	right: 100%;
	display: block
}
.profile-users .memberdiv>:first-child:hover .popover {
	visibility: visible;
	opacity: 1;
	z-index: 1010;
	-webkit-transition-delay: 0s;
	-moz-transition-delay: 0s;
	-o-transition-delay: 0s;
	transition-delay: 0s
}
.profile-users .memberdiv .tools {
	position: static;
	display: block;
	width: 100%;
	margin-top: 2px
}
.profile-users .memberdiv .tools>a {
	margin: 0 2px
}
.profile-users .memberdiv .tools>a:hover {
	text-decoration: none
}
.add_11 {
    background: #00b8f1 none repeat scroll 0 0;
    border: 1px solid #00b8f1;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    padding: 10px;
}
</style>

