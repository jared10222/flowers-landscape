<?php

$page_title = "Concrete Patios - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Concrete Patios";

$page_description = "Whether it be because of a new pool or just the need for more outdoor entertaining space, a new concrete patio is very important to outdoor living.";



include_once("includes/header.php");

?>

<article>

<h1>Concrete Patios</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-pool-design-fireplaces.jpg" target="_blank"><img src="/images/thumbnail/landscape-pool-design-fireplaces-small.jpg" alt="Pool design and construction with cascading waterfall." width="200" height="143" /></a>



<p class="first">Whether it be because of a new pool or just the need for more outdoor entertaining space, a new concrete patio is very important to outdoor living. Most homes fall short when it comes to a quality outdoor living space so the design and function of a new concrete patio can enhance the experience of outdoor living.  Colored and/or stamped concrete is a great way to enhance the overall look of your home as well as provide a unique space that everyone will want.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Enhance the overall look of your home with a concrete patio!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>