<?php

$page_title = "Landscape Installation - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Landscape Installation";

$page_description = "We provide a plethora of general landscaping services, such as planting all sizes of trees, shrubs and groundcover.";



include_once("includes/header.php");

?>

<article>

<h1>Landscape Installation</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-design-planting-3.jpg"  target="_blank"><img src="/images/thumbnail/landscape-design-planting-3-small.jpg" alt="Front yard planting design and installation with stone retaining walls." width="200" height="143" /></a>



<p class="first">We provide a plethora of general landscaping services, such as planting all sizes of trees, shrubs and groundcover. If you are looking to spruce up some existing planting areas with new plant material, then don't hesitate to give us a call.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Let us handle your general planting needs! Get started with your landscape installation today.</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>