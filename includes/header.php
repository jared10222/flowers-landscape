<?php

ob_start();

//function for checking page links

function checkPage($body_class, $page){

	if($body_class == $page){

		return "on";

	}else{

		return "";	

	}

}





/******************************/

/**********BREADCRUMBS*********/

/******************************/

function breadCrumbs($body_class, $services = NULL){

	//$page_name = '';

	$page_name = '<ol itemscope itemtype="http://schema.org/BreadcrumbList">' . "\r\n";

	switch($body_class){

		case 'index' :

			//$page_name = '<p class="text-muted">Home</p>';

			$page_name .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="http://www.flowerslandscape.com"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"></li>' . "\r\n";

			break;

		case 'landscape-services' :

			if($services != NULL){

				//$page_name = '<p class="text-muted"><a href="/landscape-services">Landscape Services</a> &gt;&gt; ' . $services . '</a></p>';

				$formatted_service = strtolower(preg_replace('# #', '-', $services));

				$page_name .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" href="http://www.flowerslandscape.com/landscape-services"><span itemprop="name">Landscape Services</span></a><meta itemprop="position" content="1"></li><i class="fa fa-arrow-right"></i>' . "\r\n";

				$page_name .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="http://www.flowerslandscape.com/landscape-services/' . $formatted_service . '"><span itemprop="name">' . $services . '</span></a><meta itemprop="position" content="2"></li>' . "\r\n";

			}else{

				$new = preg_replace('#-#', ' ', $body_class);

				//$page_name = "<p class='text-muted'>" . ucwords($new) . "</p>";

				$page_name .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="http://www.flowerslandscape.com/' . $body_class . '"><span itemprop="name">' . ucwords($new) . '</span></a><meta itemprop="position" content="1"></li>' . "\r\n";

			}

			break;

		default:

			//$page_name = "<p class='text-muted'>" . ucfirst($body_class) . "</p>";	

			$new = preg_replace('#-#', ' ', $body_class);

			$page_name .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="http://www.flowerslandscape.com/' . $body_class . '"><span itemprop="name">' . ucwords($new) . '</span></a><meta itemprop="position" content="1"></li>' . "\r\n";

	}

	$page_name .= "</ol>\r\n";

	return $page_name;



}



function ogURL(){

	$page = basename($_SERVER['PHP_SELF']);	

	$new_page = preg_replace('/\\.[^.\\s]{3,4}$/', '', $page);

	if($new_page == "sitehome"){

		$new_page = "";

		return $new_page;

	}else if(

	$new_page == "pool-design-and-construction" ||

	$new_page == "concrete-patios" ||

	$new_page == "grading-and-drainage" ||

	$new_page == "irrigation" ||

	$new_page == "landscape-lighting" ||

	$new_page == "pergolas" ||

	$new_page == "masonry-work" ||

	$new_page == "general-planting" ||

	$new_page == "pool-house-cabanas" ||

	$new_page == "water-features" ||

	$new_page == "land-clearing" ||

	$new_page == "landscape-maintenance" ||

	$new_page == "snow-removal" ||

	$new_page == "ornamental-fencing"

	){

		$new_page = "landscape-services/" . $new_page;

		return $new_page;

	}else{

		return $new_page;

	}

}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">


    <meta name="description" content="<?php echo $page_description = isset($page_description) ? $page_description : "Flowers Landscape Design is a full service landscape design and construction company with over 10 years of landscape design and construction experience."; ?>">
    <meta name="keywords" content="Landscape and Design, Edmond, Oklahoma city, Norman, Oklahoma, OK">


    <!-- Facebook Open Graph -->
    <meta property="og:image" content="http://www.flowerslandscape.com/images/logo/flowers-landscape.png"/>
    <meta property="og:title" content="<?php echo $page_title; ?>"/>
    <meta property="og:description" content="<?php echo $page_description = isset($page_description) ? $page_description : "Flowers Landscape Design is a full service landscape design and construction company with over 10 years of landscape design and construction experience."; ?>"/>
    <meta property="og:url" content="http://www.flowerslandscape.com/<?php echo ogURL(); ?>"/>
  
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Flowers Landscape Design">
    <meta name="twitter:description" content="Serving Edmond, Oklahoma City, &amp; Surrounding Areas">
    <meta name="twitter:url" content="http://www.flowerslandscape.com">
    <meta name="twitter:image" content="http://www.flowerslandscape.com/images/logo/new.jpg">
  
    <meta name="p:domain_verify" content="0f0c5d9486e88f14f40235536b967d49"/>



    <link href="/stylesheets/screen.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300|Pathway+Gothic+One|Architects+Daughter|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="/font-awesome-4.6.1/css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<!-- Social Share Kit CSS -->
    <link rel="stylesheet" href="/social-share-kit-master/dist/css/social-share-kit.css" type="text/css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "ProfessionalService",
          "url": "http://www.flowerslandscape.com",
          "logo": "http://www.flowerslandscape.com/images/logo/new.jpg",
	      "contactPoint" : [{
		      "@type" : "ContactPoint",
		      "telephone" : "+1-405-878-6434",
		      "contactType" : "customer service",
		      "email": "rflow66@hotmail.com"
	      }],
	      "address" : [{
		      "@type" : "PostalAddress",
		      "addressLocality" : "Edmond",
		      "addressRegion" : "Oklahoma",
		      "postalCode" : "73025",
		      "streetAddress" : "4609 Sarava Drive"
	      }],
	      "legalName" : "Flowers Landscape Design",
	      "description" : "Flowers Landscape Design is a full service residential landscape design and construction company with over 15 years of experience. Flowers Landscape Design can assist you in the design and construction phase of any and all of your outdoor spaces, such as: pools, patios, retaining walls, grading and drainage work, pergolas, cabanas, outdoor kitchens, fire pits, fire places, masonry work, fences, irrigation, general planting and overall landscape design plans for your residence.",
	      "openingHours" : "Mo,Tu,We,Th,Fr 08:00-17:00"
        }
    </script>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72537619-1', 'auto');
	  ga('send', 'pageview');

    </script>  

	<?php include_once('includes/analyticstracking.php'); ?>
</head>
<body class="<?php echo $body_class; ?>">


<!-- Left & centered positioning -->
<div class="ssk-sticky ssk-right ssk-center ssk-lg">
    <a href="" class="ssk ssk-facebook"></a>
    <a href="" class="ssk ssk-twitter"></a>
    <a href="" class="ssk ssk-google-plus"></a>
    <a href="" class="ssk ssk-pinterest"></a>
    <a href="" class="ssk ssk-linkedin"></a>
</div>



<div id="headerWrapper" class="clearfix">
    <header>
	 <a href="/"><img src="/images/logo.png" alt="Flowers Landscape Design" /></a>
	 <div id="contact">
	    <h3>Serving Edmond, Oklahoma City and Surrounding Areas</h3>
		<p><i class="fa fa-phone"></i> Phone (405) 878-6434</p>
	 </div><!--end contact-->
	</header>

</div><!--end headerWrapper -->

<?php require_once('nav.php'); ?>

<div id="contentWrapper">

<div id="content">