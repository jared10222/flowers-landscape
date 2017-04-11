<?php

$page_title = "Land Clearing Services - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Land Clearing";

$page_description = "Flowers Landscape Design can assist you with the smallest of brush clearing to the largest of tree clearing, even if you need heavy equipment.";



include_once("includes/header.php");

?>

<article>

<h1>Land Clearing</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/land-clearing-machinery.jpg" target="_blank"><img src="/images/thumbnail/land-clearing-machinery_small.jpg" alt="Heavy Equipment for Land Clearing Services" width="200" height="113" /></a>



<p class="first">Wooded lots are beautiful but sometimes there is the need to do some tree or brush clearing.  We can assist you with the smallest of brush clearing to the largest of tree clearing, even if you need heavy equipment.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>All the land clearing services you could ever need in Oklahoma!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>