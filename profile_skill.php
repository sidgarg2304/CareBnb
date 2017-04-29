<?php 
include_once 'db.php';

if(!isset($_SESSION['carebnb_session_login'])) {
	header("Location: login.php?e_msg=Must Login to Access");
}

$user_id1=$_SESSION['carebnb_session_user_id'];

if( isset($_POST['profile_skill']) ) {
	
	$education_level = $_POST['education_level'];
	$yr_of_graduction = $_POST['yr_of_graduction'];
	$languages_spoken = $_POST['languages_spoken'];	
	
	
	 $sql_update="update   $table_admin set 
	 								education_level='$education_level',
									yr_of_graduction='$yr_of_graduction',
									languages_spoken='$languages_spoken'
									where user_id='$user_id1' ";
										
    $profile_skill = mysql_query($sql_update)or die(mysql_error());	
	
	if ($profile_skill) {
				$errTyp = "success";
				$errMSG = "Successfully added ";
				header("Location: profile_details.php");
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
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


<!-- programs -->
	<div id="programs care_exp" class="container-fluid care_exp programs">
		<div class="container1">
        
			<h3 class="w3_agileits_head" style="font-size:170%;font-family: Quattrocento;"><span class="w3_child">Super</span><span class="w3_child1">Nan</span><span class="w3_child4"> is</span> here for you</h3>
			<p class="w3_agile_elit">Please tell us more about yourself...!</p>
            
			<div class="agile_banner_bottom_grids">
				<div id="verticalTab">
					<ul class="resp-tabs-list">
                    	<li><i class="fa fa-bed" aria-hidden="true"></i>Skills</li>
						<a href="profile_bio.php"><li><i class="fa fa-rocket" aria-hidden="true"></i>Bio</li></a>
						<a href="profile_bio.php"><li><i class="fa fa-music" aria-hidden="true"></i>Experience</li></a>
						<li class="baby_img"><img src="img/1.png" /></li>
						
					</ul>
                    
 <?php 
   $select_user="select * from $table_admin where user_id='$user_id1'";
   $sql_select=mysql_query($select_user) or die(mysql_error());
   $sql_select_count=mysql_num_rows($sql_select);
   
   if($sql_select_count= 1){
   	
	$user_row=mysql_fetch_array($sql_select);
	
	$education_level=$user_row['education_level'];
	$yr_of_graduction=$user_row['yr_of_graduction'];
	$languages_spoken=$user_row['languages_spoken'];
	
	
	
   }
	   
   ?>                  
                       
					<div class="resp-tabs-container">
						 
						<div class="w3layouts_vertical_tab">
							<form action="#" method="post">
                                <div class="form-group col-md-4">
                                    <label >Education Level:</label>
                                     <select class="form-control" name="education_level">
                                      
                                      <option value="High School" <?php if($education_level =='High School') echo 'selected' ;?>>High School</option>
                                      <option value="College" <?php if($education_level =='College') echo 'selected' ;?>>College</option>
                                      
                                    </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label >Year of graduation:</label>
                                     <select class="form-control" name="yr_of_graduction">
                                      
                                      <option value="2002" <?php if($yr_of_graduction =='2002') echo 'selected' ;?>>2002</option>
                                      <option value="2003" <?php if($yr_of_graduction =='2003') echo 'selected' ;?>>2003</option>
                                      <option value="2004" <?php if($yr_of_graduction =='2004') echo 'selected' ;?>>2004</option>
                                      <option value="2005" <?php if($yr_of_graduction =='2005') echo 'selected' ;?>>2005</option>
                                      <option value="2006" <?php if($yr_of_graduction =='2006') echo 'selected' ;?>>2006</option>
                                      <option value="2007" <?php if($yr_of_graduction =='2007') echo 'selected' ;?>>2007</option>
                                      <option value="2008" <?php if($yr_of_graduction =='2008') echo 'selected' ;?>>2008</option>
                                      <option value="2009" <?php if($yr_of_graduction =='2009') echo 'selected' ;?>>2009</option>
                                      <option value="2010" <?php if($yr_of_graduction =='2010') echo 'selected' ;?>>2010</option>
                                      <option value="2011"<?php if($yr_of_graduction =='2011') echo 'selected' ;?>>2011</option>
                                      <option value="2012" <?php if($yr_of_graduction =='2012') echo 'selected' ;?>>2012</option>
                                      <option value="2013" <?php if($yr_of_graduction =='2013') echo 'selected' ;?>>2013</option>
                                      <option value="2014" <?php if($yr_of_graduction =='2014') echo 'selected' ;?>>2014</option>
                                      <option value="2015" <?php if($yr_of_graduction =='2015') echo 'selected' ;?>>2015</option>
                                      <option value="2016" <?php if($yr_of_graduction =='2016') echo 'selected' ;?>>2016</option>
                                      <option value="2017" <?php if($yr_of_graduction =='2017') echo 'selected' ;?>>2017</option>
                                      
                                      
                                    </select>
                                 </div>
                                 
                                  <div class="form-group col-md-4">
                                    <label >Languages spoken:</label>
                                     <select class="form-control" name="languages_spoken">
                                      
                                      <option value="English" <?php if($languages_spoken =='English') echo 'selected' ;?>>English</option>
                                      <option value="French" <?php if($languages_spoken =='French') echo 'selected' ;?>>French</option>
                                      
                                    </select>
                                 </div>
                                  
                                  
                                  <button type="submit" name="profile_skill" class="btn btn-default">Save &Continue</button>
                            </form>
						</div>
						
					</div>
                    
                  
				</div>
			</div>
		</div>
	</div>
<!-- //programs -->
	
<?php include "footer.php"; ?>