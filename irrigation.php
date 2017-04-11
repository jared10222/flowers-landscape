<?php

$page_title = "Landscape Irrigation Design - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Irrigation";

$page_description = "A new irrigation system will provide you with a consistent watering program that is vital to the health and welfare of plants and turf.";



include_once("includes/header.php");

?>

<article>

<h1>Landscape Irrigation</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-design-planting-flagstone-3.jpg" target="_blank"><img src="/images/thumbnail/landscape-design-planting-flagstone-3-small.jpg" alt="Landscape design and installation with flagstone patio set on crushed limestone, before and after." width="200" height="143" /></a>



<p class="first">Before you spend hard earned money on planting new trees and shrubs, think about installing an underground sprinkler system.  A new irrigation system will provide you with a consistent watering program that is vital to the health and welfare of plants and turf.  Don't drag hoses around the yard anymore, let us make your life easier by installing a irrigation system for all your watering needs.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Enhance your lawn with a new irrigation system from Flowers Landscape Design!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->



</article>

<?php include_once("includes/footer.php"); ?>