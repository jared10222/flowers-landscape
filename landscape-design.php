<?php

$page_title = "Landscape Design - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Landscape Design";

$page_description = "Landscape designers create attractive and functional outdoor spaces. Hiring a reputable landscape designer is a huge step in the right direction.";



include_once("includes/header.php");

?>

<article>

<h1>Landscape Design</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>


<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/samples/sample_plan_1.png" target="_blank"><img src="/samples/sample_plan_1.png" alt="limestone, Limestone pavers, slate granite, unique pots, peacock pavers, water features, decorative concrete" width="200" height="143" /></a>



<p class="first">As you approach any outdoor project, it is a great idea to have a plan in place so that everything compliments each other. Landscape designers create attractive and functional outdoor spaces for homeowners.  Hiring a reputable landscape designer will be a huge step in the right direction for your outdoor space. A landscape design is a great road map to the ending outcome of your project even if it has to be installed in phases.  It is always a good idea to hire a professional like Flowers Landscape Design before you start any construction projects.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Work with the best landscape designer in the Edmond Oklahoma area!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>