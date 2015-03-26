<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$dbtable = "woodmjm_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	mysql_select_db($dbtable, $conn);
	
	//$productname = isset($_POST['productname']);
	$review = $_POST['reviewtext'];
	$rating = $_POST['rating'];

	$query = "
  		INSERT INTO $dbtable.`Reviews` (`id`, `username`, `productName`, `rating`,
        `review`) 
		VALUES (NULL, '$Tony', 'Tiger', '$rating', 'review');";

	/*
		$sql = 'INSERT INTO Reviews '.
       '(id, username, productName, rating, review) '.
       'VALUES ( "001", "Admin", "toaster", "$review", "$rating" )';
	*/
	
	mysql_query( $query );
	

	echo "Entered data successfully\n";
	mysql_close($conn);
	

	include 'reviews.html.php';
?>