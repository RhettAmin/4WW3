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
		    <div class="row">
		    	<xsl:for-each select="CATALOGUE/LEASH">
		    	<div class="col s4">
		    		<div class="row">
				        <div class="col s12">
				          <div class="card blue-grey lighten-4">
				            <div class="card-image">
				              	<img height="200" width="200">
			                      <xsl:attribute name="src">
			                        <xsl:value-of select="IMG"/>
			                      </xsl:attribute>
			                    </img> 
				            </div>
				            
				            <div class="card-content card-content-box blue-grey lighten-5">
				            <span class="card-title card-title-text black-text">
				              	<xsl:value-of select="TITLE"/>
				            </span>
				              <p><xsl:value-of select="DESC"/></p>
				            </div>
				            <div class="card-action blue-grey lighten-4">
				            	<div class="left">
				            		<xsl:value-of select="PRICE"/>
				            	</div>
				            	<div class="right">
				            		<xsl:value-of select="MAT"/>
				            	</div>
				            </div>
				          </div>
				        </div>
				    </div>
		    	</div>
		    	</xsl:for-each>
		    </div>
			</section>
		</main>

		<section class="sidemenu card-panel blue-grey lighten-5">
	      <ul>
	        <li id="brand" class="card green z-index-5">GLEASH</li>
	        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="../html/index.html">HOME</a></li>
	        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="#">CATALOGUE</a></li>
	        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="../html/contact.html">CONTACT US</a></li>
	        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="../html/login.html">LOGIN</a></li>
	        <li><a class="card waves-effect waves-light green lighten-2 black-text" href="../html/registration.html">REGISTER</a></li>
			<li><a class="card waves-effect waves-light green lighten-2 black-text" href="../html/sitemap.html">SITE MAP</a></li>
	      </ul>
	    </section>

	    <!--************* Footer *************-->
	    <footer class="page-footer foot">
	      <div class="container">
	        <div class="row">
	          <div class="col l6 s12">
	            <h5 class="white-text">Want to connect?</h5>
	            <p class="grey-text text-lighten-4">Follow these links!</p>
	          </div>
	          <div class="col l4 offset-l2 s12">
	            <h5 class="white-text">Links</h5>
	            <ul>
	              <li><a class="grey-text text-lighten-3" href="https://github.com/RhettAmin/ww3assn.git">Github</a></li>
	              <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Materialize</a></li>
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
	    <script type="text/javascript" src="../js/materialize.js"></script>
	    <script type="text/javascript" src="../js/sidemenu_toggle.js"></script>

	</body>
</html>

</xsl:template>
</xsl:stylesheet>