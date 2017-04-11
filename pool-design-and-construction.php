<?php

$page_title = "Elegant Pool Design and Construction - Flowers Landscape Design - Edmond, Okc & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Pool Design and Construction";

$page_description = "The importance of swimming pool design is crucial. The master planning of one's backyard can be made or broken by the design and installation of a new pool.";



include_once("includes/header.php");

?>

<article>

<h1>Pool Design and Construction</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-pool-design-concrete-patios.jpg" target="_blank"><img src="/images/thumbnail/landscape-pool-design-concrete-patios-small.jpg" alt="Pool and landscape design and installation." width="200" height="143" /></a>



<p class="first">Backyard ideas can get overwhelming, especially when it comes to putting in a pool and there are countless ideas in your mind on what to do and what to incorporate into your vision.  Let Flowers Landscape Design assist you in this process.  The importance of swimming pool design as it pertains to outdoor living is crucial.  The master planning of one's backyard can be made or broken by the design and installation of a new pool.  Swimming pool design and construction is an area in which we have a ton of experience and fall short to no one in execution.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>The heat in Oklahoma can get pretty extreme, cool off with an elegant swimming pool designed by Flowers Landscape!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->



</article>

<?php include_once("includes/footer.php"); ?>