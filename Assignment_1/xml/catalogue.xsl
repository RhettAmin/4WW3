<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match="/">

<html>
	<head>
		<meta charset="UTF-8"></meta>
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    	<link type="text/css" rel="stylesheet" href="../css/stylesheet.css"  media="screen,projection"/>
    	<title>GLEASH - Catalogue</title>
	</head>

	

	<body class="grey lighten-4">

		<i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>

		<main class="content">
			<section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
		        <img src="../images/gleash_landscape.jpg" /> 
		    </section>

			<section class="card-panel container">
			  Current version of the application is
			  <xsl:for-each select="CATALOGUE/LEASH">
			  	<div><xsl:value-of select="TITLE"/></div>
			  	<div><xsl:value-of select="PRICE"/></div>
			  	<div><xsl:value-of select="MAT"/></div>
			  	<div><xsl:value-of select="DESC"/></div>
			  </xsl:for-each>
			  tits
			</section>
		</main>

		<section class="sidemenu card-panel blue-grey lighten-5">
	      <ul>
	        <li id="brand" class="card green z-index-5">GLEASH</li>
	        <a class="card waves-effect waves-light green lighten-2 black-text" href="../html/index.html"><li class="active">HOME</li></a>
	        <a class="card waves-effect waves-light green lighten-2 black-text" href="../xml/catalogue.xml"><li>CATALOGUE</li></a>
	        <a class="card waves-effect waves-light green lighten-2 black-text" href="../html/contact.html"><li>CONTACT US</li></a>
	        <a class="card waves-effect waves-light green lighten-2 black-text" href="../html/login.html"><li>LOGIN</li></a>
	        <a class="card waves-effect waves-light green lighten-2 black-text" href="../html/registration.html"><li>REGISTER</li></a>
	      </ul>
	    </section>

	    <!--************* Footer *************-->
	    <footer class="page-footer foot">
	      <div class="container">
	        <div class="row">
	          <div class="col l6 s12">
	            <h5 class="white-text">Footer Content</h5>
	            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
	          </div>
	          <div class="col l4 offset-l2 s12">
	            <h5 class="white-text">Links</h5>
	            <ul>
	              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
	              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	      <div class="footer-copyright">
	        <div class="container">
	        © 2015 Copyright Text. Website by James Anthony and Rhett Amin
	        </div>
	      </div>
	    </footer>

	    <!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="../js/materialize.min.js"></script>
	    <script type="text/javascript" src="../js/sidemenu_toggle.js"></script>

	</body>
</html>

</xsl:template>
</xsl:stylesheet>