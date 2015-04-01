<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo $_SESSION["username"];
		echo "<a href='logout.php'>Logout</a>";
	}else{
		echo "<a href='./login'>Login</a>";
	}
	include 'home.html';

?>