<?php

$page_title = "Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "index";

$page_description = "Flowers Landscape Design is a full service landscape design and construction company with over 10 years of landscape design and construction experience.";

include_once('includes/header.php');

?> 



<script type="application/ld+json">

{

  "@context" : "http://schema.org",

  "@type" : "WebSite",

  "name" : "Flowers Landscape",

  "alternateName" : "Flowers Landscape Design",

  "url" : "http://www.flowerslandscape.com"

}

</script>



<article>
<h1>Flowers Landscape Design</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>


<hr />

<a class="fancybox" data-fancybox-group="group1" href="images/limestone-pavers-granite-chips.jpg" target="_blank"><img class="content-img" src="images/thumbnail/limestone-pavers-granite-chips.jpg" alt="Limestone pavers set in slate chips. Flowers Landscape Design" id="home_pic"/></a>


<p class="first">Flowers Landscape Design of Edmond Oklahoma is a full service residential landscape design and construction company
 with over 15 years of experience. Flowers Landscape Design can assist you in the design and construction phase of any and 
 all of your outdoor spaces, such as: pools, patios, retaining walls, grading and drainage work, pergolas, cabanas, outdoor kitchens,
  fire pits, fire places, masonry work, fences, irrigation, general planting and overall landscape design plans for your residence.
   We provide landscaping services to all of Edmond, Oklahoma City and surrounding areas. There is no job to large. </p>

   <br />

<p class="text-indent">Ryan Flowers, owner of Flowers Landscape Design, has a Bachelors of Landscape Architecture from
 <a class="content-links" href="http://go.okstate.edu/" target="_blank">Oklahoma State University</a> with an emphasis in 
 construction and strives to give his clients everything they want and deserve as the customer.  Ryan has worked in the landscape 
 design and construction field for over 15 years and has gained countless hours of construction management, and job supervision 
 that are vital to the overall finished product.  The attention to detail often gets overlooked but Ryan's personal pride and 
 drive for perfection is second to no one.</p>

 <br />

<p class="text-indent">Flowers Landscape Design provides you, the client, with a professional attitude and professional service through all aspects of the project.</p>

<div id="cta-container">
<h4>Let Flowers Landscape Design transform your vision into the outdoor space you have always desired!</h4>

<a class="cta" href="/contact-us">Get Your Free Consultation!</a>

</div><!--end cta-container-->


 </article>



<?php include_once('includes/footer.php'); ?>