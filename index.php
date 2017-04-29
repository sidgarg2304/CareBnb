<?php 
include_once 'db.php';

if(isset($_REQUEST['user_id']) ){
	$hidden_id=$_REQUEST['user_id'];
		
	}

if($select_query_count !=0){
	$select_query_row=mysql_fetch_array($profile_details);
	
	$user_id=$select_query_row['user_id'];
	$username=$select_query_row['username'];

}


include 'header.php';

?>



<!-- banner -->
<!----home---->
<div class="container-fluid care_home" id="care_home">
	<div class="row">
      <div class="col-md-6">
<?php   if($msg != ''){	echo $msg;}?>
    	<div class="care_home_sub" style="text-align:center;">
			
    		<br><img src="img/super.jpg" />
            <h3 style="font-size:170%;font-family: Quattrocento;"><br>Great care starts here. Choose your option.<span class="" ><span class="" ><?php echo $username ?></span></span></h3>
            
            <div class="sub-heading">

              <h2>I need a <span style="font-size:115%;font-family: Love Ya Like A Sister;">care giver</span> </h2>
              
             
                 <div class="agile_more">
					<a href="find_care.php" class="btn btn-3 btn-3e icon-arrow-right" >Find Care</a>
				</div>
            </div>
            
            <div class="sub-heading">
              <h2>I want  a <span style="font-size:115%;font-family: Love Ya Like A Sister;">care job</span> </h2>
              
           		 <div class="agile_more">
					<a href="profile_details.php" class="btn btn-3 btn-3e icon-arrow-right" >Find Job</a>
				 </div>
            
            </div>
        </div>
        
        
      </div>  
	</div>
</div>
<div class="clearfix"></div>


	
<div class="container-fluid care_home_mobile1" id="care_home_mobile">
<div class="img_res"><img src="img/home_mobile.jpg" />
	<div class="row img_mobile" style="background:rgba(228,228,228,0.8);">
    <div class="care_home_sub " style="text-align:center;">
    	   <h3><b>Choose your option.</b></h3>
    </div>
       <div class="care_home_sub" style="text-align:center;">     
      <div class="col-xs-6">
    	
    		
            
            <div class="sub-heading1">
            <a href="find_care.php"><img src="img/happybaby.png" width="80"></a>
              <h3>Find  <span>Care</span> </h3>
              
             
                 
            </div>
          </div>
           
           <div class="col-xs-6">  
            <div class="sub-heading1">
          <a href="profile_details.php">  <img src="img/babycare.png" width="80" ></a>
              <h3>Find <span>Job</span> </h3>
              
           		 
            
            </div>
        </div>
        
        
      </div>  
	</div>
</div>    
</div>
	    
<?php include "footer.php"; ?>
