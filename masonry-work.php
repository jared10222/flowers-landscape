<?php

$page_title = "Masonry Work - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Masonry Work";

$page_description = "We can assist you with all your masonry needs, brick work, stone work, block work retaining walls, etc. Any masonry service you may need, we can help.";



include_once("includes/header.php");

?>

<article>

<h1>Masonry Work</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/pool-design-construction-kitchen.jpg" target="_blank"><img src="/images/thumbnail/pool-design-construction-kitchen-small.jpg" alt="Outdoor kitchen, granite counter top on a flagstone and decorative concrete patio." width="200" height="143" /></a>



<p class="first">Looking to build a fireplace, fire pit, outdoor kitchen, or flagstone patio in your back yard? We can help.  Being able to enjoy your outdoor space through all the seasons is a must.  We can assist you with all your masonry needs, brick work, stone work, block work retaining walls, etc. Any masonry service you may need, we can help.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Don't let the crazy Oklahoma weather keep you in, start enjoying your outdoor space all year long!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>