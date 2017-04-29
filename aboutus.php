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
    		<img src="img/about.jpg"  width="84%">
            
            
        </div>
        <div class="container about_text">
        <p style="text-align:justify">Care is a universal need. The demands of the modern age often lead to a clash of priorities, and in our struggle to juggle them, sometimes, our loved ones are affected. CareBnB was founded in College Station, TX in 2016 with the aim to provide care to families in need. Our mission is to improve the lives of families and caregivers by helping them connect in an easy and reliable way.</p>
            <p style="text-align:justify">In the span of just a year, CareBnB has grown to include 10 states in the United States. We have over 800 registered nannies, who provide care to kids and pets in the absence of their parents or owner. We also have over 1000 registered care seekers. This is a testament to the quality of service CareBnB strives to achieve.  </p>
        </div>
      </div>  
	</div>
</div>
	
<?php include "footer.php"; ?>