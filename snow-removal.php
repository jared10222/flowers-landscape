<?php

$page_title = "Residential Snow Removal Services - Flowers Landscape Design - Edmond, Okc & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Snow Removal";

$page_description = "If you are in need of driveway, sidewalk or patio snow removal we can help. We are also equipped with larger machinery for parking lot and commercial spaces.";



include_once("includes/header.php");

?>

<article>


<h1>Snow Removal Services</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/snow_removal_vehicle.jpg" target="_blank"><img src="/images/thumbnail/snow_removal_vehicle_small.jpg" alt="Snow Removal Vehicle" width="200" height="133" /></a>



<p class="first">Occasionally we do get snow here in Oklahoma so if you are in need of driveway, sidewalk or patio snow removal we can help.  We are also equipped with larger machinery for parking lot and commercial spaces if needed.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Don't let that Oklahoma snow keep you in, take advantage of our snow removal services!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->





</article>

<?php include_once("includes/footer.php"); ?>