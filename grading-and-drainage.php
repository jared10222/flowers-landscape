<?php

$page_title = "Landscape Grading and Drainage Plans - Flowers Landscape Design - Edmond, Okc & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Grading and Drainage";

$page_description = "Home drainage solutions are something we specialize in. We can assist you in all grading and drainage design and installation.";



include_once("includes/header.php");

?>

<article>

<h1>Grading and Drainage</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-design-planting-2.jpg" target="_blank"><img src="/images/thumbnail/landscape-design-planting-2-small.jpg" alt="Front yard planting design and installation." width="200" height="143" /></a>



<p class="first">Very often we see homes where the drainage is inadequate or was a complete afterthought.  Home drainage solutions are something we specialize in.  Perhaps  you need your yard re-graded to establish a positive grade away from structures like homes and patios.  Or maybe you need a sub surface drainage system that carries water underground from troubled areas. We can assist with larger grading applications as well. We are equipped with heavy machinery that can get the job done no matter what the size of your job.  We can assist you in all grading and drainage design and installation.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Landscape Grading and Drainage Plans, Don't wait!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>