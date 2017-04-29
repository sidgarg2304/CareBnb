<?php 
include_once 'db.php';




if(isset($_REQUEST['user_id']) ){
	$hidden_id=$_REQUEST['user_id'];
		
	}




$sql_profile="select * from $table_admin where user_id='$hidden_id' ";
$profile_details = mysql_query("$sql_profile");
$select_query_count=mysql_num_rows($profile_details);

if($select_query_count !=0){
	$select_query_row=mysql_fetch_array($profile_details);
	
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
	
	
	
	if($phone !=''){	$phone=$select_query_row['phone'];} else {$phone ='--';}
	if($project_title !='')	$project_title=$select_query_row['project_title']; else $project_title ='--';
	
	if($project_description !=''){	$project_description=$select_query_row['project_description'];} else {$project_description ='--';}
	
	if($avg_hour_age_1 !='')	$avg_hour_age_1=$select_query_row['avg_hour_age_1']; else $avg_hour_age_1='--';
	if($avg_hour_age_2 !=''){	$avg_hour_age_2=$select_query_row['avg_hour_age_2'];} else {$avg_hour_age_2 ='--';}
	if($no_child_watching !='')	$no_child_watching=$select_query_row['no_child_watching']; else $no_child_watching ='--';
	if($care_for_sick_child !=''){	$care_for_sick_child=$select_query_row['care_for_sick_child'];} else {$care_for_sick_child ='--';}
	if($exp_twins_group !='')	$exp_twins_group=$select_query_row['exp_twins_group']; else $exp_twins_group ='--';
	
	
	
	
	if($education_level !=''){	$education_level=$select_query_row['education_level'];} else {$education_level ='--';}
	if($yr_of_graduction !='')	$yr_of_graduction=$select_query_row['yr_of_graduction']; else $yr_of_graduction ='--';
	if($languages_spoken !='')	$languages_spoken=$select_query_row['languages_spoken']; else $languages_spoken ='--';
	
	
	
}


include 'header.php';

?>


<!-- banner -->
<!----home---->

<div class="container list_carebnb">
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">

<div id="plan">
<div class="page-content">
  <?php   if($msg != ''){	echo $msg;}?>
   
    <!--/.page-header-->
 
 
 
 
    
  <div class="row-fluid">
      <div class="span8"> 
        <!--PAGE CONTENT BEGINS-->
        
        
        
       <div class="profile-user-info profile-user-info-striped">
       <h2>User Information</h2>
      
												<div class="profile-info-row">
													<div class="profile-info-name">First Name</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $username ?></span><span class="" ><?php echo $username ?></span>
                                                    </div>
												</div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name">Last Name</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $lastname ?></span>
                                                    </div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Email </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $email?></span>
                                                    </div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Phone </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $phone?></span>
                                                    </div>
	
    
    											</div>
                                                
                            <?php 
						   	if($project_title !=''){
								?>                                             
         <h2>Profile Details</h2>                <div class="profile-info-row">
													<div class="profile-info-name"> Profile Picture </div>
													<div class="profile-info-value">
                                                    	
                                                        <span class="" >
					<?php if($profile_img == ''){$img= 'noimage.PNG';}else{$img= $profile_img  ;} ?>
             
                	<img src="assets/uploads/<?php echo $img; ?>" class="img-responsive" width="100">   
                                                        </span>
                                                    </div>
												</div>                                 
                        
                         						 <div class="profile-info-row">
													<div class="profile-info-name"> Project Title </div>
													<div class="profile-info-value">
                                                    	
                                                        <span class="" ><?php echo $project_title?></span>
                                                    </div>
												</div>
                         
                         						<div class="profile-info-row">
													<div class="profile-info-name">Project Description</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo   $project_description ?> </span>
                                                    </div>
												</div>
           <?php
								}if($avg_hour_age_1 !=''){
									?> 
             <h2>Experience</h2>                                   
                                                <div class="profile-info-row">
													<div class="profile-info-name">Average hourly rate: </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $avg_hour_age_1.' '. 'to' .' '.$avg_hour_age_2?></span>
                                                    </div>
												</div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name">Number of children you feel comfortable watching </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $no_child_watching?></span>
                                                    </div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Care For Sick Children: </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $care_for_sick_child?></span>
                                                    </div>
												</div>
                                               
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Experience with twins/multiple: </div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $exp_twins_group?></span>
                                                    </div>
												</div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Age group most experienced with: </div>
													<div class="profile-info-value">
                                                    	
                                                    
                                                    <label>
													<input name="form-field-checkbox" type="checkbox" <?php
                                                    if($age_group_most_exp_0_6m == '0-6 months')echo 'checked="checked"'; else echo 'disabled=""';
													?> onclick="return false;" onkeydown="return false;">
													<span class="lbl"> 0-6 months</span>
												</label>
                                                
                                                <label>
													<input name="form-field-checkbox" type="checkbox" <?php
                                                    if($age_group_most_exp_6m_4y == '6month-4years')echo 'checked="checked"'; else echo 'disabled=""';
													?>  onclick="return false;" onkeydown="return false;">
													<span class="lbl"> 6month-4years</span>
												</label>
                                                
                                                <label>
													<input name="form-field-checkbox" type="checkbox" <?php
                                                    if($age_group_most_exp_5y_7y == '5years-7years')echo 'checked="checked"'; else echo 'disabled=""';
													?> onclick="return false;" onkeydown="return false;">
													<span class="lbl"> 5years-7years</span>
												</label>
                                                
                                                <label>
													<input name="form-field-checkbox" type="checkbox" <?php
                                                    if($age_group_most_exp_7y_above == '7years&above')echo 'checked="checked"'; else echo 'disabled=""';
													?> onclick="return false;" onkeydown="return false;">
													<span class="lbl"> 7years&above </span>
												</label>
                                                </div>
												</div>
     
     <?php
								}if($education_level !=''){
									?> 
     			<h2>Skills</h2>								
                       						<div class="profile-info-row">
													<div class="profile-info-name">Education Level:</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $education_level ?></span>
                                                    </div>
												</div>
                                                
                                           <div class="profile-info-row">
													<div class="profile-info-name">Year of graduation:</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $yr_of_graduction?></span>
                                                    </div>
												</div>
                                                
                                            <div class="profile-info-row">
													<div class="profile-info-name">Languages spoken:</div>
													<div class="profile-info-value">
                                                    	<span class="" ><?php echo $languages_spoken?></span>
                                                    </div>
												</div>         
                                                
                                                
                    <?php  } ?>                            
                                                
</div> 
    	
        
        
      </div>  
	</div>
</div>
</div>	
	  <div style="margin:10px 0;text-align:center;">
       <a href="list.php">
       <button class="btn  btn-success" type="button" style="background-color: rgb(19, 207, 109);">Back</button></a>
       </div>
</div>
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

