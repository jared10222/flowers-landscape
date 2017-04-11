<?php

$page_title = "Testimonials | Flowers Landscape Design Edmond, Oklahoma City & Surrounding Areas";

$body_class = "testimonials";

$page_description = "See what others are saying about the Flowers Landscape Design team. Read some testimonials from our satisified customers.";

include_once("includes/header.php");

include_once("config/config.php");



/*defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "flowersl_reviews");*/



/*defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");

defined("DB_USER") ? null : define("DB_USER", "flowersl_jared");

defined("DB_PASS") ? null : define("DB_PASS", "Guitar@10");

defined("DB_NAME") ? null : define("DB_NAME", "flowersl_reviews");*/







class Database {

	private $host = DB_SERVER;

	private $user = DB_USER;

	private $pass = DB_PASS;

	private $dbname = DB_NAME;

	

	private $dbh;

	private $error;

	

	private $stmt;

	

	public function __construct(){

		//set DSN (Database Source Name)

		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

		

		//Set options

		$options = array(

			PDO::ATTR_PERSISTENT => true,

			PDO::ATTR_ERRMODE	 => PDO::ERRMODE_EXCEPTION

		);

		

		//Create a new PDO instance

		try {

			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

		}

		//Catch any errors

		catch(\PDOException $e){

			$this->error = $e->getMessage();

		}

		

	}//end construct

	

	public function query($query){

		$this->stmt = $this->dbh->prepare($query);	

	}

	

	public function bind($param, $value, $type = NULL){

		if (is_null($type)) {

		  switch (true) {

			case is_int($value):

			  $type = PDO::PARAM_INT;

			  break;

			case is_bool($value):

			  $type = PDO::PARAM_BOOL;

			  break;

			case is_null($value):

			  $type = PDO::PARAM_NULL;

			  break;

			default:

			  $type = PDO::PARAM_STR;

		  }

		}

		$this->stmt->bindValue($param, $value, $type);

	}//end bind

	

	public function execute(){

		return $this->stmt->execute();	

	}

	

	public function resultset(){

		$this->execute();

		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);	

	}

	

	public function single(){

		$this->execute();

		return $this->stmt->fetch(PDO::FETCH_ASSOC);	

	}

	

	public function rowCount(){

		return $this->stmt->rowCount();	

	}

	

	public function lastInsertId(){

		return $this->dbh->lastInsertId();	

	}

	

	public function beginTransaction(){

		return $this->dbh->beginTransaction();	

	}

	

	public function endTransaction(){

		return $this->dbh->commit();	

	}

	

	public function cancelTransaction(){

		return $this->dbh->rollBack();	

	}

	

	public function debugDumpParams(){

		return $this->stmt->debugDumpParams();	

	}

	

	public function viewQuery(){

		return $this->stmt;	

	}

	

	public function count_all($table, $where = NULL){

		

		$sql = "SELECT * FROM " . $table;

		if($where != NULL){

			$sql .= " WHERE " . $where[0] . "=" . $where[1];

		}

		$statement = $this->dbh->prepare($sql);

		$statement->execute();

		return $statement->rowCount();

	}

	

	public function getError(){

		return $this->error;	

	}

	

	public function close(){

		$this->dbh = null;	

	}

	

	

	//backup database

	public function backupDatabase(){

		$mysqlDatabaseName = DB_NAME;

		$mysqlUserName = DB_USER;

		$mysqlPassword = DB_PASS;

		$mysqlHostName = DB_SERVER;

		

		$backup_file = 'backups/' . $mysqlDatabaseName . '-' . date("Y-m-d-H-i-s") . '.sql';

		

		$command = 'mysqldump --opt --host=' . $mysqlHostName . ' --user=' . $mysqlUserName . ' --password='. $mysqlPassword . ' --default-character-set=utf8 ' . $mysqlDatabaseName . ' > ' . $backup_file . '';

		

		exec($command);

		

		$root = $_SERVER['DOCUMENT_ROOT'];

		$this->Zip($root,'backups/backup-'. date("Y-m-d-H-i-s") .'.zip');

		

		

	}

	

	//restore database

	public function restoreDatabase($file){

		$mysqlDatabaseName = DB_NAME;

		$mysqlUserName = DB_USER;

		$mysqlPassword = DB_PASS;

		$mysqlHostName = DB_SERVER;

		

		$command = 'mysql --host=' . $mysqlHostName . ' --user=' . $mysqlUserName . ' --password='. $mysqlPassword . ' ' . $mysqlDatabaseName . ' < ' . $file . '';

		

		system($command);

	}

	

	

	private function Zip($source, $destination)

    {

    	if (extension_loaded('zip') === true)

    	{

    		if (file_exists($source) === true)

    		{

    			$zip = new ZipArchive();

    

    			if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)

    			{

    				$source = str_replace('\\', '/', realpath($source)) . '/';

    

    				if (is_dir($source) === true)

    				{

    					$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

    

    					foreach ($files as $file)

    					{

    						$file = str_replace('\\', '/', realpath($file));

    

    						if (is_dir($file) === true)

    						{

    							$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));

    						}

    

    						else if (is_file($file) === true)

    						{

    							$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));

    						}

    					}

    				}

    

    				else if (is_file($source) === true)

    				{

    					$zip->addFromString(basename($source), file_get_contents($source));

    				}

    			}

    

    			return $zip->close();

    		}

    	}

    

    	return false;

    }

	

}



$db = new Database;









class Pagination {

	

	public $current_page;

	public $per_page;

	public $total_count;

	

	public function __construct($page=1, $per_page=20, $total_count=0){

		$this->current_page = (int)$page;

		$this->per_page = (int)$per_page;

		$this->total_count = (int)$total_count;

	}

	

	public function offset(){

		//Assuming 20 items per page:

		//Page 1 has an offset of 0 (1-1) * 20

		//Page 2 has an offset of 20 (2-1) * 20

		//in other words, page 2 starts with item 21

		return ($this->current_page - 1) * $this->per_page;	

	}

	

	public function total_pages(){

		return ceil($this->total_count/$this->per_page);

	}

	

	public function previous_page(){

		return $this->current_page - 1;	

	}

	

	public function next_page(){

		return $this->current_page + 1;	

	}

	

	public function has_previous_page(){

		return $this->previous_page() >= 1 ? true : false;	

	}

	

	public function has_next_page(){

		return $this->next_page() <= $this->total_pages() ? true : false;	

	}

	

}







$sql = 'SELECT * FROM review WHERE approved=1';

$db->query($sql);

$db->execute();

$results = $db->resultset();

?>








<article>
    

      

        <h1>Testimonials</h1>
        
        <div class="bread-crumbs">

  	<?php 

	if(!isset($second_param_breadcrumbs)){

		$second_param_breadcrumbs = NULL;

	}

	?>

  	<?php echo  breadCrumbs($body_class, $second_param_breadcrumbs); ?>

  </div>

        <hr />



<?php

//display link for adding a review


echo "<a class='button' href='/testimonials/leave-review'>Leave Your Review</a>";



if(isset($_GET['review'])==true){

?>  





   

<div id="contact_form">

<form class="contact_form" role="form" method="post" action="/testimonials" >

<ul>

	<li><h2>Leave a Review</h2></li>

    <li><label for="name">Name:</label>

    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required="required" /></li>

        

    <li><label for="email">Email:</label>

    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required="required" /></li>

            

    <li><label for="review">Review:</label>

    <textarea class="form-control" rows="5" name="review" id="review" placeholder="Testimonial" required="required"></textarea></li>

    

      

    

             

    <!--human check-->

    <input style="display:none;" name="human" type="text" value="" />

            

    <li><button type="submit" class="submit" id="submit" name="submit" >Submit</button></li>

</ul>

        </form>

 </div>       

        <hr />



<?php } //end if ?>









<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

	

	//human check

	if($_POST['human'] == ''){

	

	//check for empty values

	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['review'])){

		

		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

		$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

		$review = filter_var(trim($_POST['review']), FILTER_SANITIZE_STRING);

		$date = date('Y-m-d');

		//insert into database

		$sql = "INSERT INTO review (name, email, review, date) VALUES (?,?,?,?)";

		$db->query($sql);

		$db->bind(1, $name);

		$db->bind(2, $email);

		$db->bind(3, $review);

		$db->bind(4, $date);

		

		if($db->execute()){

			

			//to email

		$to_email = "rflow66@hotmail.com";

		$subject = "New Review on Flowers Landscape Design Website";

		

		$headers = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <admin@flowerslandscape.com>' . "\r\n";

		$headers .= 'Cc: jared_burdick10@yahoo.com' . "\r\n";

		

		$message_body = '<html><body>';

		$message_body .= "

		

<h1>Hello Ryan</h1>

<h3>Someone left a new Testimonial on your site.</h3>

<p>Follow this link to approve the review: <b><a href='http://www.flowerslandscape.com/admin/'>http://www.flowerslandscape.com/admin/</a></b></p>

<hr />

</body></html>";

			

		//send email

		mail($to_email, $subject, $message_body, $headers);

			

			$success_message = "Thanks for leaving a review, it is awaiting approval. We appreciate your business!";

			//header('Location: testimonials.php?successMsg=' . urlencode($success_message));

			header('Location: /testimonials/success/' . urlencode($success_message));

		}else{

			$error_message = "There was an error while trying to add your review to the database, please try again later.";

			//header('Location: testimonials.php?errorMsg=' . urlencode($error_message));

			header('Location: /testimonials/error/' . urlencode($error_message));

		}

		

	}else{

		$error_message = "All Fields Are Required!";

		//header('Location: testimonials.php?errorMsg=' . urlencode($error_message));

		header('Location: /testimonials/error/' . urlencode($error_message));

	}

	

	} else {//end human check

			

	}

}

?>









<?php

if(isset($_GET['successMsg'])){

	echo "<h3 class='text-success text-center'>" . urldecode($_GET['successMsg']) . "</h3>";

}

if(isset($_GET['errorMsg'])){

	echo "<h3 class='text-danger text-center'>" . urldecode($_GET['errorMsg']) . "</h3>";

}

?>











   

<?php

//1. the current page number ($current_page)

	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	

	//2. records per page ($per_page)

	$per_page = 5;

	

	//3. total record count ($total_count) 

	$where = array('approved', '1');

	$total_count = $db->count_all("review", $where);

	

	$pagination = new Pagination($page, $per_page, $total_count);

	

	//Instead of finding all records, just find the records

	//for this page

	$sql = "SELECT * FROM review WHERE approved='1' ORDER BY id DESC ";

	$sql .= "LIMIT {$per_page} ";

	$sql .= "OFFSET {$pagination->offset()}";

	

	//Need to add ?page=$page to all links we want to

	//maintain the current page(or store $page in $session)

	

	$db->query($sql);

	$db->execute();

	$result = $db->resultset();

	

	$total_pages = $pagination->total_pages();

	

if(!empty($result)){



	foreach($result as $key => $review){

?>



<div class="panel">

	<div class="panel-body" itemscope itemtype="http://schema.org/Review">

    

    <div class="text-center text-muted border-dashed-bottom" itemprop="itemReviewed" itemscope itemtype="http://schema.org/ProfessionalService"><span itemprop="name">Flowers Landscape Design</span></div>

    

    <p class="p-font text-indent">&ldquo;<span itemprop="name"><?php echo stripslashes($review['review']); ?></span>&rdquo;</p>

    <p class="text-muted">- <span itemprop="author"><?php echo stripslashes($review['name']); ?></span> - 

    <span itemprop="datePublished" content="<?php echo $review['date']; ?>"><?php echo $review['date']; ?></span></p>

    </div><!--end panel-body-->

</div><!--end panel-->

<?php

	}//end foreach

}else{

	echo "<h1>No Testimonials Yet.</h1>";	

}

?> 



<hr />     

 <div id="pagination" style="clear:both;">

<?php

$total_pages = $total_count / $per_page;



/*

if($pagination->total_pages() > 1){

	echo '<ul class="paginate pag2 clearfix">';

	echo '<li class="single">Page ' . $page . ' of ' . ceil($total_pages) . '</li>';

	

	if($pagination->has_previous_page()){

		echo "<li><a href=\"testimonials.php?page=";

		echo $pagination->previous_page();

		echo "\">&laquo; Previous</a></li> ";	

	}

	

	for($i=1; $i <= $pagination->total_pages(); $i++){

		if($i == $pagination->current_page){

			echo "<li class=\"current\"><span>{$i}</span></li>";	

		}else{

			echo "<li><a href=\"testimonials.php?page={$i}\">{$i}</a></li> ";

		}

	}

	

	if($pagination->has_next_page()){

		echo "<li><a href=\"testimonials.php?page=";

		echo $pagination->next_page();

		echo "\">Next &raquo;</a></li> ";	

	}

	

	

}*/





if($pagination->total_pages() > 1){

	echo '<ul class="paginate pag2 clearfix">';

	echo '<li class="single">Page ' . $page . ' of ' . ceil($total_pages) . '</li>';

	

	if($pagination->has_previous_page()){

		echo "<li><a href=\"/testimonials/page/";

		echo $pagination->previous_page();

		echo "\">&laquo; Previous</a></li> ";	

	}

	

	for($i=1; $i <= $pagination->total_pages(); $i++){

		if($i == $pagination->current_page){

			echo "<li class=\"current\"><span>{$i}</span></li>";	

		}else{

			echo "<li><a href=\"/testimonials/page/{$i}\">{$i}</a></li> ";

		}

	}

	

	if($pagination->has_next_page()){

		echo "<li><a href=\"/testimonials/page/";

		echo $pagination->next_page();

		echo "\">Next &raquo;</a></li> ";	

	}

	

	

}



?>

</div><!--end pagination-->

     













</article>

<?php include_once("includes/footer.php"); ?>