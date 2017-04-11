<?php

$page_title = "Pergolas Designs - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "landscape-services";

$second_param_breadcrumbs = "Pergolas";

$page_description = "Pergolas are a great way to keep that pesky Oklahoma sun off your outdoor living spaces. Paying attention to your pergola design is very important.";



include_once("includes/header.php");

?>
<article>


<h1>Pergolas</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />



<a class="fancybox landscape-services-img" data-fancybox-group="group1" href="/images/pergola-outdoor-kitchen-flagstone.jpg" target="_blank"><img src="/images/thumbnail/pergola-outdoor-kitchen-flagstone-small.jpg" alt="Cedar pergola with stone outdoor kitchen." width="200" height="143" /></a>



<p class="first">Pergolas are a great way to keep that pesky Oklahoma sun off your outdoor living spaces.  Paying attention to your pergola design is important in order to maintain the look of your home. Whether it be rough cedar and rustic, contemporary or clean lined, we can do it. Let us help you out.</p>



<div class="clearfix"></div>



<div id="cta-container">

<h4>Pergola Design Done Right!</h4>



<a class="cta" href="/contact-us">Get Your Free Consultation!</a>



</div><!--end cta-container-->




</article>
<?php include_once("includes/footer.php"); ?>