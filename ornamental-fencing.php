<?php

$page_title = "Ornamental Fencing - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Ornamental Fencing";

$page_description = "Flowers Landscape can provide a professional design and installation of an ornamental fence that can enhance the overall look and feel to your outdoor space.";



include_once("includes/header.php");

?>

<article>

<h1>Ornamental Fencing</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/landscape-design-planting-flagstone-2.jpg" target="_blank"><img src="/images/thumbnail/landscape-design-planting-flagstone-2-small.jpg" alt="Landscape design and installation with flagstone patio set on crushed limestone." width="200" height="143" /></a>



<p class="first">As a part of an overall landscape plan or master plan, we can provide a professional design and installation of an ornamental fence that can enhance the overall look and feel to your outdoor space.  From plain wood fencing to cedar, wrought iron or black chain link, we can handle it all and would love to make your outdoor space the one of your dreams. </p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Get the ornamental fence of your dreams!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>