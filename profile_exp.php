<?php 
include_once 'db.php';
$hidden_unic_id='';

$exp_twins_group='';
$avg_hour_age_1='';
if(!isset($_SESSION['carebnb_session_login'])) {
	header("Location: login.php?e_msg=Must Login to Access");
}





$user_id1=$_SESSION['carebnb_session_user_id'];

if( isset($_POST['profile_exp']) ) {
	
	$avg_hour_age_1 = $_POST['avg_hour_age_1'];
	$avg_hour_age_2 = $_POST['avg_hour_age_2'];
	$no_child_watching = $_POST['no_child_watching'];	
	$care_for_sick_child = $_POST['care_for_sick_child'];
	$exp_twins_group = $_POST['exp_twins_group'];
	

if ( isset($_POST['age_group_most_exp_0_6m']) ){
			$age_group_most_exp_0_6m = trim($_POST['age_group_most_exp_0_6m']);
		}else{
			$age_group_most_exp_0_6m = '';
		}
if ( isset($_POST['age_group_most_exp_6m_4y']) ){
			$age_group_most_exp_6m_4y = trim($_POST['age_group_most_exp_6m_4y']);
		}else{
			$age_group_most_exp_6m_4y = '';
		}
if ( isset($_POST['age_group_most_exp_5y_7y']) ){
			$age_group_most_exp_5y_7y = trim($_POST['age_group_most_exp_5y_7y']);
		}else{
			$age_group_most_exp_5y_7y = '';
		}
		
if ( isset($_POST['age_group_most_exp_7y_above']) ){
			$age_group_most_exp_7y_above = trim($_POST['age_group_most_exp_7y_above']);
		}else{
			$age_group_most_exp_7y_above = '';
		}	
	
	
	 $sql_update="update $table_admin set 
	 								avg_hour_age_1='$avg_hour_age_1',
									avg_hour_age_2='$avg_hour_age_2',
									no_child_watching='$no_child_watching',
									care_for_sick_child='$care_for_sick_child',
									exp_twins_group='$exp_twins_group',
									age_group_most_exp_0_6m='$age_group_most_exp_0_6m',
									
									age_group_most_exp_6m_4y='$age_group_most_exp_6m_4y',
									age_group_most_exp_5y_7y='$age_group_most_exp_5y_7y',
									age_group_most_exp_7y_above='$age_group_most_exp_7y_above'
									
									where user_id='$user_id1' ";
										
    $profile_exp = mysql_query($sql_update)or die(mysql_error());	
	
	if ($profile_exp) {
				$errTyp = "success";
				$errMSG = "Successfully added";
				header("Location: profile_skill.php");
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}									
}









include 'header.php';

?>


<!-- banner -->


<!-- programs -->
	<div id="programs care_exp" class="container-fluid care_exp programs">
		<div class="container1">
        
			<h3 class="w3_agileits_head"><span class="w3_child">Super</span><span class="w3_child1">Nan</span><span class="w3_child4"> is</span> here for you</h3>
			<p class="w3_agile_elit">Please tell us more about yourself...!</p>
            
			<div class="agile_banner_bottom_grids">
				<div id="verticalTab">
					<ul class="resp-tabs-list">
                    <li><i class="fa fa-music" aria-hidden="true"></i>Experience</li>
						<a href="profile_bio.php"><li><i class="fa fa-rocket" aria-hidden="true"></i>Bio</li></a>
						
						<a href="profile_skill.php"><li><i class="fa fa-bed" aria-hidden="true"></i>Skills</li></a>
                        <li class="baby_img"><img src="img/1.png" /></li>
						
					</ul>
                    
 <?php 
   $select_user="select * from $table_admin where user_id='$user_id1'";
   $sql_select=mysql_query($select_user) or die(mysql_error());
   $sql_select_count=mysql_num_rows($sql_select);
   
   if($sql_select_count= 1){
   	
	$user_row=mysql_fetch_array($sql_select);
	
	$avg_hour_age_1=$user_row['avg_hour_age_1'];
	$exp_twins_group=$user_row['exp_twins_group'];
	$avg_hour_age_2=$user_row['avg_hour_age_2'];
	$no_child_watching=$user_row['no_child_watching'];
	$care_for_sick_child=$user_row['care_for_sick_child'];
	$age_group_most_exp_0_6m=$user_row['age_group_most_exp_0_6m'];
	$age_group_most_exp_6m_4y=$user_row['age_group_most_exp_6m_4y'];
	$age_group_most_exp_5y_7y=$user_row['age_group_most_exp_5y_7y'];
	$age_group_most_exp_7y_above=$user_row['age_group_most_exp_7y_above'];
	
	
   }
	   
   ?>                      
					<div class="resp-tabs-container">
						
						<div class="w3layouts_vertical_tab">
							<form action="#" method="post">
                                <div class="form-group">
                                    <label >Average hourly rate:</label>
                                 <p> <select name="avg_hour_age_1">
                                      <option value="10"<?php if($avg_hour_age_1 =='10') echo 'selected' ;?>>10</option>
                                      <option value="15" <?php if($avg_hour_age_1 =='15') echo 'selected' ;?>>15</option>
                                      <option value="20" <?php if($avg_hour_age_1 =='20') echo 'selected' ;?>>20</option>
                                      <option value="30" <?php if($avg_hour_age_1 =='30') echo 'selected' ;?>>30</option>
                                      <option value="40" <?php if($avg_hour_age_1 =='40') echo 'selected' ;?>>40</option>
                                      <option value="50" <?php if($avg_hour_age_1 =='50') echo 'selected' ;?>>50</option>
                                      <option value="60" <?php if($avg_hour_age_1 =='60') echo 'selected' ;?>>60</option>
                                     
                                    </select>
                                    
                                    
                                    to
                                    <select name="avg_hour_age_2">
                                      
                                      <option value="15" <?php if($avg_hour_age_2 =='15') echo 'selected' ;?>>15</option>
                                      <option value="20" <?php if($avg_hour_age_2 =='20') echo 'selected' ;?>>20</option>
                                      <option value="30" <?php if($avg_hour_age_2 =='30') echo 'selected' ;?>>30</option>
                                      <option value="40" <?php if($avg_hour_age_2 =='40') echo 'selected' ;?>>40</option>
                                      <option value="50" <?php if($avg_hour_age_2 =='50') echo 'selected' ;?>>50</option>
                                      <option value="60" <?php if($avg_hour_age_2 =='60') echo 'selected' ;?>>60</option>
                                    </select>
                                   </p> 
                                  </div>
                                  <div class="form-group">
                                    <label>Number of children you feel comfortable watching:</label>
                                    <select name="no_child_watching">
                                      
                                      <option value="1" <?php if($no_child_watching =='1') echo 'selected' ;?>>1</option>
                                      <option value="2" <?php if($no_child_watching =='2') echo 'selected' ;?>>2</option>
                                      <option value="3" <?php if($no_child_watching =='3') echo 'selected' ;?>>2</option>
                                      <option value="4" <?php if($no_child_watching =='4') echo 'selected' ;?>>4</option>
                                      <option value="5" <?php if($no_child_watching =='5') echo 'selected' ;?>>5</option>
                                      <option value="6" <?php if($no_child_watching =='6') echo 'selected' ;?>>6</option>
                                    </select>
                                  </div>
                                  <div class="form-group" >
                                    <label >Care For Sick Children:</label>
                                  <p style="display:flex;" class="radio_btn"> 
                                   <input type="radio" name="care_for_sick_child" class="form-control" value="yes" <?php echo ($care_for_sick_child=='yes')?"checked":"" ;?> > <span style="color:black;">Yes</span><br>
 									<input type="radio" name="care_for_sick_child" class="form-control" value="no" <?php echo ($care_for_sick_child=='no')?"checked":"" ;?> > <span style="color:black;">No</span><br>
                                   </p>
                                  </div>
                                  
                                   <div class="form-group" >
                                    <label >Experience with twins/multiple:</label>
                                  <p style="display:flex;" class="radio_btn"> 
                                   <input type="radio" name="exp_twins_group" value="yes"  <?php echo ($exp_twins_group=='yes')?"checked":"" ;?> > <span style="color:black;">Yes</span><br>
 									<input type="radio" name="exp_twins_group" value="no" <?php echo ($exp_twins_group=='no')?"checked":"" ;?> ><span style="color:black;"> No</span><br>
                                    
                                         

                                   </p>
                                  </div>
                                  
                                  <div class="clearfix"></div><br/>
                                    <label>Age group most experienced with:</label>
                                    <div class="form-group">
                                    <div class="col-md-3"><label><input type="checkbox" name="age_group_most_exp_0_6m" value="0-6 months" <?php echo ($age_group_most_exp_0_6m=='0-6 months')?"checked":"" ;?>/>
                                    0-6 months</label></div>
                                    <div class="col-md-3"><label><input type="checkbox" name="age_group_most_exp_6m_4y" value="6month-4years" <?php echo ($age_group_most_exp_6m_4y=='6month-4years')?"checked":"" ;?>/>
                                    6month-4years</label></div>
                                     <div class="col-md-3"><label><input type="checkbox" name="age_group_most_exp_5y_7y" value="5years-7years" <?php echo ($age_group_most_exp_5y_7y=='5years-7years')?"checked":"" ;?>/>
                                    5years-7years</label></div>
                                    <div class="col-md-3"><label><input type="checkbox" name="age_group_most_exp_7y_above" value="7years&above" <?php echo ($age_group_most_exp_7y_above=='7years&above')?"checked":"" ;?>/>
                                    7years&above</label></div>
                                    
                                    
                                    </div>
                                 <div class="clearfix"></div><br/>
                                  
                                  
                                  <button type="submit" name="profile_exp" class="btn btn-default">Save & Continue</button>
                            </form>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //programs -->
	
<?php include "footer.php"; ?>