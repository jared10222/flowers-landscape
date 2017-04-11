<?php

$page_title = "Landscape Maintenance Services - Flowers Landscape Design - Edmond, OKC & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Landscape Maintenance";

$page_description = "Landscape maintenance is an important service that we provide. From fertilizing and weed control to cleaning and trimming, we can assist you.";



include_once("includes/header.php");

?>

<article>

<h1>Landscape Maintenance Services</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/Lawn_Maintenance.jpg" target="_blank"><img src="/images/thumbnail/Lawn_Maintenance_small.jpg" alt="Landscape Maintenance Services" width="200" height="133" /></a>



<p class="first">Landscape maintenance is an important service that we can provide after the landscaping phase of your project.  From fertilizing and weed control to cleaning and trimming, we can assist you.  Landscape maintenance is much more than just mowing.  We can provide a full service maintenance that covers all aspects of outdoor living.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Let us handle all of your Oklahoma landscape maintenance services!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->






</article>
<?php include_once("includes/footer.php"); ?>