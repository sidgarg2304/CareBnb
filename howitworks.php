<?php 
include_once 'db.php';
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
<div class="container-fluid care_about" id="care_about">
	<div class="row">
      <div class="">
    	<div class="care_about_sub" style="text-align:center;">
    		
            
            
        </div>
        <div class="container about_text">
        <p style="text-align:justify"></p>
        </div>
      </div>  
	</div>
</div>
	
<?php include "footer.php"; ?>