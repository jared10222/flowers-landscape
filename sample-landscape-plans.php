<?php

$page_title = "Sample Landscape Plans - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "sample-landscape-plans";

$page_description = "Flowers Landscape Design offers many custom plans. View our custom landscaping plans here.";

include_once('includes/header.php');

?>
<article>
  

<h1>Sample Landscape Plans</h1>

  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

<hr />

<div id="samples">

<p><i>Click on a link below to view some of our Sample Plans.</i></p>



<!--<a class="fancybox" data-fancybox-type="iframe" href="samples/sample_plan_1.png">Sample Plan 1</a><br />-->



<a class="fancybox" data-fancybox-group="group1" href="samples/sample_plan_1.png">Sample Plan 1</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp2.jpg">Sample Plan 2</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp3.jpg">Sample Plan 3</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp4.jpg">Sample Plan 4</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp5.jpg">Sample Plan 5</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp6.jpg">Sample Plan 6</a><br />

<br />

<a class="fancybox" data-fancybox-group="group1" href="samples/Smp7.jpg">Sample Plan 7</a><br />

<br />

</div>

<hr />

<div class="center-images">
<a class="fancybox" data-fancybox-group="group1" href="images/landscape-pool-design-concrete-patios.jpg" target="_blank"><img src="images/thumbnail/landscape-pool-design-concrete-patios.jpg" alt="Pool and landscape design and installation. " id="home_pic"/></a>
</div><!--end center-images-->




</article>
<?php include_once('includes/footer.php'); ?>