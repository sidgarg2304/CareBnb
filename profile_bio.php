<?php 
include_once 'db.php';
$project_description='';
$project_title='';
if(!isset($_SESSION['carebnb_session_login'])) {
	header("Location: login.php?e_msg=Must Login to Access");
}



$user_id1=$_SESSION['carebnb_session_user_id'];

if( isset($_POST['profile_bio']) ) {
	
	$hidden_unic_id = $_POST['hidden_unic_id'];
	$project_title = $_POST['project_title'];
	$project_description = $_POST['project_description'];
	
	
	
		
		
		$profile_img='';
if(isset($_FILES["documents"]) && $_FILES["documents"]["name"] != ''){
	
	
	
$file_path='assets/uploads/';
	$created_date=date('d-m-Y');
	
	
	
		$random_digit=rand(0000,9999);
			
		
		$file_name = $created_date.'_'.$random_digit.'_'.$_FILES['documents']['name'];
		$file_size =$_FILES['documents']['size'];
		$file_tmp =$_FILES['documents']['tmp_name'];
		$file_type=$_FILES['documents']['type'];	
		
		$file_ext_temp=explode(".", $_FILES["documents"]["name"]);	
		$file_ext=end($file_ext_temp);
		
		if(move_uploaded_file($file_tmp,$file_path.$file_name)){	
			
			
			
				$profile_img=$file_name;
				
			
		}



}else{	
	$profile_img = mysql_real_escape_string($_REQUEST['db_profile_img']);
	}
		
		
		
	
	
	 $sql_update="update   $table_admin set 
	 								profile_img='$profile_img',
	 								project_title='$project_title',
									project_description='$project_description'
									where user_id='$user_id1' ";
										
    $profile_bio = mysql_query($sql_update)or die(mysql_error());	
	
	if ($profile_bio) {
				$errTyp = "success";
				$errMSG = "Successfully added, you may login now";
				header("Location: profile_exp.php");
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}									
}



include 'header.php';

?>
<style type="text/css">

.img_div {
    max-width: 150px;
    position: relative;
	
}

.img_div .hover {
    
    position: absolute;
    right: -4px;
    top: -4px;
}
.img_div .hover span {
    background: red none repeat scroll 0 0;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    padding: 1px 6px;
}

</style>

<!-- banner -->
`

<!-- programs -->
	<div id="programs care_exp" class="container-fluid care_exp programs">
		<div class="container1">
        
			<h3 class="w3_agileits_head"><span class="w3_child">Super</span><span class="w3_child1">Nan</span><span class="w3_child4"> is</span> here for you</h3>
			<p class="w3_agile_elit">Please tell us more about yourself...!</p>
            
			<div class="agile_banner_bottom_grids" style="background-color:white;">
				<div id="verticalTab" style="background-color:white;">
					<ul class="resp-tabs-list">
						<li><i class="fa fa-rocket" aria-hidden="true"></i>Bio</li>
						<a href="profile_exp.php"><li><i class="fa fa-music" aria-hidden="true"></i>Experience</li></a>
						<a href="profile_skill.php"><li><i class="fa fa-bed" aria-hidden="true"></i>Skills</li></a>
                        <li class="baby_img"><img src="img/1.png" /></li>
						
					</ul>
                    
  <?php 
   $select_user="select * from $table_admin where user_id='$user_id1'";
   $sql_select=mysql_query($select_user) or die(mysql_error());
   $sql_select_count=mysql_num_rows($sql_select);
   
   if($sql_select_count= 1){
   	
	$user_row=mysql_fetch_array($sql_select);
	
	$project_title=$user_row['project_title'];
	$project_description=$user_row['project_description'];
	$profile_img=$user_row['profile_img'];
	
   }
	   
   ?>                
					<div class="resp-tabs-container" style="background-color:white;">
						<div style="background-color:white;" class="w3layouts_vertical_tab">
							<form action="#" method="post" enctype="multipart/form-data">
                          		<div class="form-group">
                                    <label >Profile Picture:</label>
                                    
                                    
                                    
                                     <input type="hidden" value="<?php echo $profile_img?>" name="db_profile_img" />
                  <?php if($profile_img  != '') {?>
                  <div class="img_profile_img img_div"> <img src="assets/uploads/<?php echo $profile_img; ?>" width="150" />
                    <div class="hover"><span><i class="fa fa-times" aria-hidden="true"></i> </span></div>
                  </div>
                  <div class="profile_img"> </div>
                   <?php }else{
				  
				  echo '<input type="file"  name="documents" class="file"  required="required" >';
				  } ?>
                                    
                                    
                                                                              
     		 
					
                                  </div>
                                  
                                <div class="form-group">
                                    <label >Project Title:</label>
                                    
                                    <input type="text" class="form-control" value="<?php echo $project_title ?>"  name="project_title"required>
                                  </div>
                                  <div class="form-group">
                                    <label >Brief Description:</label>
                                    <textarea class="form-control" name="project_description"  require><?=$project_description?></textarea>
                                 </div>
                                  
                                  
                                  <button type="submit" name="profile_bio" class="btn btn-default">Save & Continue</button>
                            </form>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //programs -->
	
<?php include "footer.php"; ?>

