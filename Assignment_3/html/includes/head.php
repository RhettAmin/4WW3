<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/~aminr4/A3/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/~aminr4/A3/css/stylesheet.css"  media="screen,projection"/>
    <title>Gleash</title>
	<!--************* Login/Logout *************-->
	<?php
		session_start();

		echo "<div class=\"account row\">";

		if(isset($_SESSION['username'])) {
			echo "<p class=\"col s8\">" .$_SESSION["username"]. "</p>";
			echo "<p class=\"col s4\"><a href='../logout.php'>Logout</a></p>";
		}else{
			echo "<p class=\"col s12\"><a href='../login'>Login</a></p>";
		}

		echo "</div>";

	?>
	
</head>