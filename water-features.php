<?php

$page_title = "Water Features - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Water Features";

$page_description = "Water features can be a very important focal point in a landscape. The sound, sight and feel of water is often soothing and surreal.";



include_once("includes/header.php");

?>
<article>


<h1>Water Features</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/pool-design-construction-planting.jpg" target="_blank"><img src="/images/thumbnail/pool-design-construction-planting-small.jpg" alt="Landscape and pool design and construction with stone retaining walls." width="200" height="143" /></a>



<p class="first">Water features can be a very important focal point in a landscape.  The sound, sight and feel of water is often soothing and surreal.  As part of the total experience of an outdoor space a water feature can easily transform an average yard into a tranquil setting.  We design and install all types and kinds of water features for your outdoor space. Let us help you.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Let us provide you with the best, most soothing and surreal outdoor water features in Oklahoma!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>