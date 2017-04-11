<?php

$page_title = "Contact Us - Flowers Landscape Design - Edmond, Oklahoma City & Surrounding Areas";

$body_class = "contact-us";

$page_description = "Contact the Flowers Landscape Design team for all your landscaping needs. Servicing Edmond, Oklahoma City & Surrounding Areas";

include_once('includes/header.php'); 

?>





<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

	

	//human check

	if($_POST['human'] == ''){

		

		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING); 

		$email_from = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); 

		$phone = $_POST['phone']; 

		$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

		$referer = $_POST['referer'];

		

		if(isset($_POST['services-needed'])){

			$services_needed = $_POST['services-needed'];

		}

		

		//check for empty fields

		if(!empty($name) && !empty($email_from) && !empty($message) && !empty($phone)){

		

		//validate email

		if(filter_var($email_from, FILTER_VALIDATE_EMAIL)){

			

		//validate phone number\

		$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";

		if(preg_match($regex, $phone)){

			

		//to email

		$to_email = "rflow66@hotmail.com";
		/*$to_email = "jared_burdick10@yahoo.com";*/

		$subject = "New Message From Flowers Landscape Design Website";

		

		$headers = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <admin@flowerslandscape.com>' . "\r\n";

		/*$headers .= 'Cc: jared_burdick10@yahoo.com' . "\r\n";*/

		

		$message_body = '<html><body>';

		$message_body .= "

		

<h1>Hello Ryan</h1>

<h3>You have received a new message, below are the details:</h3>

<hr />

<ul>

	<li>Name: <b>$name</b></li>

	<li>Email: <b>$email_from</b></li>

	<li>Phone: <b>$phone</b></li>

	<li>Refered By: <b>$referer</b></li>



";



		if(isset($services_needed)){

			$message_body .= "<li>Services Needed: <ul>";

			foreach($services_needed as $key => $value){

				$message_body .= "<li>$value</li>";

			}

			$message_body .= "</ul></li>";

		}

		$message_body .= "</ul><hr />";

		$message_body .= "<h3>Message: </h3><p>\"" . $message . "\"</p><hr />";

		$message_body .= '</body></html>';

			

		//send email

		if(mail($to_email, $subject, $message_body, $headers)){

			$success_message = "Your message has been sent. We will get back to you as soon as possible!";

			header('Location: /contact-us/success/' . urlencode($success_message));

		}else{

			$error_message = "Message Not Sent!";

			echo "<h3 class='error'>$error_message</h3>";

		}

			

		}else{

			$error_message = "Invalid Phone Number Format!";

			echo "<h3 class='error'>$error_message</h3>";

		}

		

			

		}else{

			$error_message = "Invalid Email Address!";

			echo "<h3 class='error'>$error_message</h3>";;

		}

			

			

		}else{

			$error_message = "All Fields Are Required!";

			echo "<h3 class='error'>$error_message</h3>";	

		}

		

		

		

	}else{//end human check

		

	}

}

?>

<article> 

<h1>Contact Us</h1>


  <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>


<?php

if(isset($_GET['successMsg'])){

	echo "<h3 class='success'>" . urldecode($_GET['successMsg']) . "</h3>";

}

if(isset($_GET['errorMsg'])){

	echo "<h3 class='error'>" . urldecode($_GET['errorMsg']) . "</h3>";

}

?>



<hr />

<br />

<h2 class="text-center">Call or fill out the form below to get your free consultation!</h2>

<br />

<p>Ryan Flowers(Owner)</p>

<p>4609 Sarava Drive</p>

<p>Edmond, Oklahoma  73025</p>

<p>Phone: <span class="green-text">(405) 878-6434</span></p>



<hr />

<div id="contact_form">

<form class="contact_form" action="/contact-us" method="post" name="contact_form">

<ul>

  <li>

    <h2>Contact Us</h2>

    <p><span class="small-text text-muted">* Denotes Required Field</span></p>

  </li>

  <li>

    <label for="name">Name:</label>

    <input type="text" name="name" id="name" placeholder="John Doe" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required /><span class="error" style="color:#ff0000;"></span>

  </li>

  <li>

    <label for="email">Email:</label>

    <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"  placeholder="john_doe@example.com" required />

</li>





<li>

    <label for="phone">Phone:</label>

    <input type="tel" pattern='\d{3}[\-]\d{3}[\-]\d{4}' name="phone" id="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" placeholder="###-###-####" required />

  </li>







<li>

<h3>How Did You Find Us?</h3>

<select name="referer" id="referer">

	<option value="google">Google</option>

    <option value="yahoo">Yahoo</option>

    <option value="bing">Bing</option>

    <option value="facebook">Facebook</option>

    <option value="angies-list">Angies List</option>

    <option value="houzz">Houzz</option>

    <option value="phone-book">Phone Book</option>

    <option value="word-of-mouth">Word of Mouth</option>

    <option value="other">Other</option>

</select>

</li>

<br />
<hr />
<li>

<h3>What Services Are You Interested In?</h3>


<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="concrete-patios" />Concrete patios

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="pool-design-and-construction" />Pool Design &amp; Construction

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="grading-and-drainage" />Grading &amp; Drainage

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="irrigation" />Irrigation

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="landscape-lighting" />Landscape Lighting 

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="pegolas" />Pergolas

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="masonry-work" />Masonry Work

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="general-planting" />General Planting

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="pool-house-and-cabanas" />Pool House &amp; Cabanas 

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="water-features" />Water Features

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="land-clearing" />Land Clearing 

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="landscape-maintenance" />Landscape Maintenance

</div>





<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="snow-removal" />Snow Removal

</div>



<div class="checkboxes">

<input type="checkbox" name="services-needed[]" value="ornamental-fencing" />Ornamental Fencing

</div>

<div class="checkboxes">
<input type="checkbox" name="services-needed[]" value="other" />Other
</div>

<div class="clear-fix"></div>



</li>

<br />
<hr />

<li>

  <label for="message">Message:</label>

<textarea name="message" id="message" cols="40" rows="6" required >

<?php if(isset($_POST['message'])) echo trim($_POST['message']); ?>

</textarea>

</li>



<!--human check-->

<input style="display:none;" name="human" type="text" value="" />

    

    

<li>

  <button class="submit" type="submit" name="submit" id="submit">Submit Form</button>

</li>

</ul>

</form>

</div>


</article>
<?php include_once('includes/footer.php'); ?>