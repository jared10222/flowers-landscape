<?php

$page_title = "Landscape Lighting Design - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Landscape Lighting";

$page_description = "Outdoor lighting can enhance your landscape in a tremendous way. Let us improve your outdoor space with the installation of a new outdoor lighting system.";



include_once("includes/header.php");

?>

<article>

<h1>Landscape Lighting</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-design-planting-3.jpg" target="_blank"><img src="/images/thumbnail/landscape-design-planting-3-small.jpg" alt="Front yard planting design and installation with stone retaining walls." width="200" height="143" /></a>



<p class="first">Outdoor lighting can enhance your landscape in a tremendous way.  You are proud of your outdoor space and it looks great but what about at night?  Outdoor lighting is crucial when it comes to showing off your landscape 24 hours a day.  LED lighting is a great way to showcase any and all of your outdoor living spaces.  It can be soft and subtle for curb appeal, as well as for safety and function, plus it enhances outdoor events.  Let us improve your outdoor space with the installation of a new outdoor lighting system.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Light up your beautiful Oklahoma landscape tonight!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>