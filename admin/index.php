<?php
/*defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "flowersl_reviews");*/

defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");
defined("DB_USER") ? null : define("DB_USER", "flowersl_jared");
defined("DB_PASS") ? null : define("DB_PASS", "Guitar@10");
defined("DB_NAME") ? null : define("DB_NAME", "flowersl_reviews");

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
	
	public function count_all($table){
		
		$sql = "SELECT * FROM " . $table;
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



$sql = 'SELECT * FROM review';
$db->query($sql);
$db->execute();
$results = $db->resultset();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    
    <title>Admin Area | Flowers Landscape</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <!--[if lt IE 9]
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
</head>
<body>
	<h1><a href="index.php">Testimonials</a></h1>
 
<?php
//approve post
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['approve'])==true){
	$sql = "UPDATE review SET approved='1' WHERE id=?";
	$db->query($sql);
	$db->bind(1, $_GET['id']);
	if($db->execute()){
		echo "<h2 class='success'>Review Successfully Approved!</h2>";	
	}else{
		echo "<h2 class='error'>Unable to approve the review, please try again later.</h2>";	
	}
}

//delete post
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['delete'])==true){
	$sql = "DELETE FROM review WHERE id=?";
	$db->query($sql);
	$db->bind(1, $_GET['id']);
	if($db->execute()){
		echo "<h2 class='success'>Review Successfully Deleted!</h2>";
	}else{
		echo "<h2 class='error'>Unable to delete the review, please try again later.</h2>";
	}
}
?>
 <hr />   
    
    
    <?php
//1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
	
	//2. records per page ($per_page)
	$per_page = 20;
	
	//3. total record count ($total_count) 
	$total_count = $db->count_all("review");
	
	$pagination = new Pagination($page, $per_page, $total_count);
	
	//Instead of finding all records, just find the records
	//for this page
	$sql = "SELECT * FROM review ORDER BY id DESC ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	
	//Need to add ?page=$page to all links we want to
	//maintain the current page(or store $page in $session)
	
	$db->query($sql);
	$db->execute();
	$result = $db->resultset();
	
	$total_pages = $pagination->total_pages();
	
if(!empty($result)){
?>
<table>
<thead>
	<tr>
    	<th>Name</th>
        <th>Email</th>
        <th>Review</th>
        <th>Date</th>
        <th>Approve</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
<?php
	foreach($result as $key => $review){
?>

	<tr>
    	<td><?php echo $review['name']; ?></td>
        <td><?php echo $review['email']; ?></td>
        <td><?php echo $review['review']; ?></td>
        <td><?php echo $review['date']; ?></td>
        <td>
        <?php
		if($review['approved']==0){
			echo "<a href='index.php?approve=true&id=" . $review['id'] . "'>Approve This Post</a>";
		}else{
			echo "Approved";	
		}
		?>
        </td>
        <td><a href="index.php?delete=true&id=<?php echo $review['id'] ?>" onclick="return confirm('Are you sure you want to delete this review?');">Delete</a></td>
    </tr>

<?php
	}
?>
</tbody>
</table>
<?php //end foreach
}else{
	echo "<h1>No Testimonials Yet.</h1>";	
}
?> 

<hr />     
 <div id="pagination" style="clear:both;">
<?php
$total_pages = $total_count / $per_page;


if($pagination->total_pages() > 1){
	echo '<ul class="paginate pag2 clearfix">';
	echo '<li class="single">Page ' . $page . ' of ' . ceil($total_pages) . '</li>';
	
	if($pagination->has_previous_page()){
		echo "<li><a href=\"index.php?page=";
		echo $pagination->previous_page();
		echo "\">&laquo; Previous</a></li> ";	
	}
	
	for($i=1; $i <= $pagination->total_pages(); $i++){
		if($i == $pagination->current_page){
			echo "<li class=\"current\"><span>{$i}</span></li>";	
		}else{
			echo "<li><a href=\"index.php?page={$i}\">{$i}</a></li> ";
		}
	}
	
	if($pagination->has_next_page()){
		echo "<li><a href=\"index.php?page=";
		echo $pagination->next_page();
		echo "\">Next &raquo;</a></li> ";	
	}
	
	
}




?>
</div><!--end pagination-->
    
    
    
</body>
</html>