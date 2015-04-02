
<?php 
	if(!isset($_SESSION['username'])){    
	  echo "You are not logged in...Redirecting...";
	  echo"
	      <html>
	        <head>
	          <meta http-equiv='refresh' content='1; url=../login'> 
	        </head>
	      </html>
	      ";
	}